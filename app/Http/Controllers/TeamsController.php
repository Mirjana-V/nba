<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\Player;


class TeamsController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }
    
    public function index(){
        $teams = Team::all();
        return view('teams.index', compact('teams'));
    }

    public function show($id){
        $team = Team::with('players')->find($id);
        return view('teams.show', compact('team'));
    }
}