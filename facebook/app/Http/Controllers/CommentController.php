<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    //
    public function index()
    {
        $comments = Comment::all();
        return view('dashboard', compact('comments'));
    }
    public function saveComment(Request $request)
    {
        $data = $request->validate([
            'user_id' => 'required',
            'post_id' => 'required',
            'comment' => 'required',
        ]);

        Comment::create($data);
        return redirect()->route('dashboard');
    }


}