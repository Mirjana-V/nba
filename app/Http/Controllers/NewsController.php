<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function index(){
        $news = News::simplePaginate(10);
        return view('news.index', compact('news'));
    }

    public function show($id){
        $news = News::findOrFail($id);
        return view('news.show', compact('news'));
    }
}
