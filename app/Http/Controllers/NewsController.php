<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Team;

class NewsController extends Controller
{

    public function index(){
        $news = News::simplePaginate(10);
        return view('news.index', compact('news'));
    }

    public function show($id){
        $news = News::with('teams')->findOrFail($id);
        return view('news.show', compact('news'));
    }

    public function getNewsByTeamName($teamName){
        $team = Team::where('name', $teamName)->first();
        $news = $team->news()->paginate(10);

        return view('news.index', compact('news'));
    }
}