<?php

namespace App\Http\Livewire;


use App\Models\Post;
use Livewire\Component;

class Createpost extends Component
{

    public $user_id, $likes, $comments, $shares, $post;
    public function render()
    {
        return view('livewire.createpost');
    }


    public function savePost()
    {
        $this->validate([
            'user_id' => 'user_id',
            'likes' => 'likes',
            'comments' => 'comments',
            'shares' => 'shares',
            'post' => 'post'
        ]);

        Post::create(['id' => $this->user_id], [
            'user_id' => $this->user_id,
            'likes' => $this->likes,
            'comments' => $this->comments,
            'shares' => $this->shares,
            'post' => $this->post
        ]);

        session()->flash('message', $this->user_id ? 'Comment updated' : 'Success');

    }
}