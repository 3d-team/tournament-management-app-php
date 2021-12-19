<?php

namespace App\Http\Controllers;

use App\FbMatch;
use App\MatchTournament;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MatchController extends Controller
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

    public function index(Request $request) {
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
        ->select('id', 'name')
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
            ->select('id', 'team_1', 'team_2', 'time', 'address')
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

        return view('matches.index')
        ->with('currentTournament', $currentTournament)
        ->with('tournaments', $tournaments)
        ->with('matches', $matches)
        ->with('fixtures', $fixtures)
        ->with('team_1', $team_1s)
        ->with('team_2', $team_2s);
    }

    public function create(Request $request) {
        if( $request->has('tournament_id') ) {
            $tournamentId = $request->query('tournament_id');
        }
        else{
            $tournamentId = 1;
        }

        return view('matches.create')
        ->with('tournament_id', $tournamentId);
    }

    public function add(Request $request) {

        if ($request->isMethod('post')) {
            $tournamentId = $request->get('tournament_id');
            $fixture = $request->get('fixture');
            
            $match = FbMatch::create($request->all())->id;
            
            MatchTournament::create(
                [
                    'fixture' => $fixture,
                    'match_id' => $match,
                    'tournament_id' => $tournamentId
                ]
            );
        }

        return redirect()->route('matches.index');
    }

    public function delete($id) {

        $match = FbMatch::findOrFail($id);
        $matchTournament = MatchTournament::where('match_id', '=', $id)->firstOrFail();

        $match->delete();
        $matchTournament->delete();

        return  redirect()->route('matches.index');
    }

    public function edit($id) {

        $match = FbMatch::findOrFail($id);
        $matchTournament = MatchTournament::where('match_id', '=', $id)->firstOrFail();

        return view('matches.edit')
        ->with('match', $match)
        ->with('matchTournament', $matchTournament);
    }

    public function update($id, Request $request) {

        FbMatch::where('id', $id)
        ->update($request->except('_method', '_token', 'fixture'));         
        MatchTournament::where('match_id', $id)
        ->update($request->except('_method', '_token', 'team_1', 'team_2', 'time', 'address'));        

        return redirect()->route('matches.index');
    }
}