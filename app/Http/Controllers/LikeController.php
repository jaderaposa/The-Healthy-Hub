<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Comment;
use App\Models\Like;

class LikeController extends Controller
{
    public function store(Comment $comment)
    {
        $like = new Like;
        $like->user_id = Auth::id();

        $comment->likes()->save($like);

        return back();
    }

    public function destroy(Comment $comment, Like $like)
    {
        if ($like->user_id == Auth::id()) {
            $like->delete();
        }

        return back();
    }
}
