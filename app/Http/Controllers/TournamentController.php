<?php

namespace App\Http\Controllers;

use App\Tournament;
use App\Team;
use Illuminate\Http\Request;
use DB;

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

    public function schedule() {
        return view('tournaments.schedule');
    }

    public function matches() {
        return view('tournaments.matches');
    }

    public function report() {
        $teams = Team::all();
        return view('tournaments.report', compact('teams'));
    }

    public function rule() {
        return view('tournaments.rule');
    }
}