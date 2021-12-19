<?php

namespace App\Http\Controllers;

use App\Tournament;
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
        $teams = Team::all();
        return view('tournaments.report', compact('teams'));
    }

    public function rule() {
        return view('tournaments.rule');
    }
}