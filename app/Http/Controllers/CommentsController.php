<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Http\Requests\CreateCommentRequest;
use App\Models\Team;
use App\Mail\CommentReceived;
use Mail;

class CommentsController extends Controller
{
    public function store(CreateCommentRequest $request, $id){
        $team = Team::find($id);
        $team->addComment($request->validated()['content']);

        Mail::to($team->email)->send(new CommentReceived($team));

        return redirect()->back();
    }

}