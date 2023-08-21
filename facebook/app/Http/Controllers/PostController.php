<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function savePost(Request $request)
    {
        $data = $request->validate([
            'user_id' => 'required',
            'likes' => 'required',
            'comments' => 'required',
            'shares' => 'required',
            'post' => 'required'
        ]);

        Post::create($data);
        return redirect()->route('dashboard')->with('success', 'Post created successfully');
    }
}