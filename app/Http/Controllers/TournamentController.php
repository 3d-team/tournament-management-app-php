<?php

namespace App\Http\Controllers;

use App\Tournament;
use App\Team;
use App\FbMatch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Team;
//use DB;

class TournamentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(Request $request)
    {
        if ($request->isMethod('post')) {
            Tournament::create($request->all());
        }

        return view('tournaments.create');
    }

    public function manage()
    {
        $data = DB::select('select @row := @row + 1 as stt, t1.name as team_1, t2.name as team_2, mt.time, mt.date, mt.address
                            from matches as mt, teams as t1, teams as t2, (SELECT @row := 0) r
                            where mt.team_1 = t1.id and mt.team_2 = t2.id');
        // dd($data);
        return view('tournaments.manage', ['data' => $data]);
    }

    public function register(Request $request)
    {
        if($request->isMethod('post')){
            $data = $request->all();  
            // Team::create($data);
            Team::create([
                'name' => $data['name'],
                'address' => $data['address'],
                'coach' => $data['coach'],
                'tournament_id' => $data['tournament_id'],
                'logo' => "",
                'score' => 0,
                'uniform' => ""
            ]);
            // dd($data);
            return view('home.home') ;
        }
        return view('tournaments.register');
    }

    public function schedule(Request $request) {
        if( $request->has('tournament') ) {
            $tournamentId = $request->query('tournament');
        }
        else{
            $tournamentId = 1;
        }

        $tournaments = DB::table('tournaments')
        ->select('id', 'name')
        ->where('id', '<>', $tournamentId)
        ->get();

        $currentTournament = DB::table('tournaments')
        ->select('name')
        ->where('id', '=', $tournamentId)
        ->first();

        $matchTournaments = DB::table('match_tournament')
        ->select('tournament_id', 'match_id', 'fixture')
        ->where('tournament_id', '=', $tournamentId)
        ->get();

        $matches = array();
        $team_1s = array();
        $team_2s = array();
        $fixtures = array();
        foreach($matchTournaments as $matchTournament)
        {
            $match = DB::table('matches')
            ->select('team_1', 'team_2', 'time', 'address',
            'goals_1', 'goals_2', 'redcard_1', 'redcard_2',
            'yellowcard_1', 'yellowcard_2')
            ->where('id', '=', $matchTournament->match_id)
            ->first();

            $team_1 = DB::table('teams')
            ->select('name','score')
            ->where('id', '=', $match->team_1)
            ->first();
    
            $team_2 = DB::table('teams')
            ->select('name', 'score')
            ->where('id', '=', $match->team_2)
            ->first();

            $fixture = $matchTournament->fixture;

            array_push($matches, $match);
            array_push($team_1s, $team_1);
            array_push($team_2s, $team_2);
            array_push($fixtures, $fixture);
        }

        return view('tournaments.schedule')
        ->with('currentTournament', $currentTournament)
        ->with('tournaments', $tournaments)
        ->with('matches', $matches)
        ->with('fixtures', $fixtures)
        ->with('team_1', $team_1s)
        ->with('team_2', $team_2s);
    }

    public function report() {
        $matches = FbMatch::all();
        $SQLString = 'SELECT `teams`.`id` id, `teams`.`name` name, COUNT(`matches`.`id`) num_matches FROM `matches`, `teams`
        WHERE (`matches`.`team_1` = `teams`.`id` OR `matches`.`team_2` = `teams`.`id`)
        GROUP BY `teams`.`id`, `teams`.`name`';
        $temp = DB::select($SQLString);

        $result = array();
        foreach ($temp as $value) {
            $id = $value->id;
            $name = $value->name;
            $num = $value->num_matches;

            $item = array("id" => $id, "name" => $name,
                                "numMatch" => $num,
                                "win" => 0,
                                "draw" => 0,
                                "lose" => 0,
                                "goals" => 0,
                                "goalsConceded" => 0,
                                "redCard" => 0,
                                "yellowCard" => 0);
            $result[$id] = $item;
        }

        foreach ($matches as $value) {
            $id_team1 = $value->team_1;
            $id_team2 = $value->team_2;

            $goals_team1 = $value->goals_1;
            $goals_team2 = $value->goals_2;
            $redCard_team1 = $value->redcard_1;
            $redCard_team2 = $value->redcard_2;
            $yellowCard_team1 = $value->yellowcard_1;
            $yellowCard_team2 = $value->yellowcard_2;
            
            if($goals_team1 == $goals_team2){
                $result[$id_team1]["draw"]++;
                $result[$id_team2]["draw"]++;
            }else{
                if($goals_team1 > $goals_team2){
                    $result[$id_team1]["win"]++;
                    $result[$id_team2]["lose"]++;
                }else{
                    $result[$id_team1]["lose"]++;
                    $result[$id_team2]["win"]++;
                }
            }

            $result[$id_team1]["goals"] += $goals_team1;
            $result[$id_team1]["goalsConceded"] += $goals_team2;
            $result[$id_team1]["redCard"] += $redCard_team1;
            $result[$id_team1]["yellowCard"] += $yellowCard_team1;

            $result[$id_team2]["goals"] += $goals_team2;
            $result[$id_team2]["goalsConceded"] += $goals_team1;
            $result[$id_team2]["redCard"] += $redCard_team2;
            $result[$id_team2]["yellowCard"] += $yellowCard_team2;
         }

         $summary = array("win" => 0,
                            "draw" => 0,
                            "lose" => 0,
                            "goals" => 0,
                            "goalsConceded" => 0,
                            "redCard" => 0,
                            "yellowCard" => 0);
         foreach($result as $item) {
            $summary["win"] += $item["win"];
            $summary["draw"] += $item["draw"];
            $summary["lose"] += $item["lose"];
            $summary["goals"] += $item["goals"];
            $summary["goalsConceded"] += $item["goalsConceded"];
            $summary["redCard"] += $item["redCard"];
            $summary["yellowCard"] += $item["yellowCard"];
         }
        return view('tournaments.report', compact('result','summary'));
    }

    public function rule() {
        return view('tournaments.rule');
    }

    
}