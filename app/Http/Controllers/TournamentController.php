<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function create()
    {
        return view('tournaments.create');
    }

    public function manage()
    {
        return view('tournaments.manage');
    }

    public function register()
    {
        return view('tournaments.register');
    }

    public function schedule() {
        return view('tournaments.schedule');
    }

    public function matches() {
        return view('tournaments.matches');
    }

    public function report() {
        return view('tournaments.report');
    }

    public function rule() {
        return view('tournaments.rule');
    }
}