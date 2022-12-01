<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Post $post) {
        request()->validate([
            'content' => 'required'
        ]);
        $post->comments()->create([
           'user_id' => auth()->user()->id,
           'content' => request()->get('content')
        ]);
        return back();
    }

    public function destroy(Comment $comment) {
        $comment->destroy($comment->id);
        return back();
    }
}
