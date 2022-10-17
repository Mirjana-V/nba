<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Http\Requests\CreateCommentRequest;
use App\Models\Team;

class CommentsController extends Controller
{
    public function store(CreateCommentRequest $request, $id){
        Team::find($id)->addComment($request->validated()['content']);

        return redirect()->back();
    }
}