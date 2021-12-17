<?php

namespace App\Http\Controllers;

use App\Player;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PlayerController extends Controller
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

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'fullname' => ['required', 'string', 'max:255'],
            'number' => ['required', 'string', 'max:3'],
            'position' => ['required', 'string', 'max:255'],
            'type' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'min:8', 'max:255'],
            'cmnd' => ['required', 'string', 'min:8', 'max:255']
        ]);
    }

    public function index() {
        return view('players.index');
    }

    public function add(Request $request) {
        $data = $request->all();
        
        Player::create($data);

        return redirect()->route('players.index');
    }

    public function upload() {
        return view('players.upload');
    }
}