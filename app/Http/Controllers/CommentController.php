<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(Request $request, Post $post)
    {
        $request->validate(['body' => 'required']);

        $comment = new Comment($request->all());
        $comment->user_id = Auth::id();

        if ($request->has('parent_id')) {
            // This is a reply
            $comment->parent_id = $request->parent_id;
        }

        // Save the comment or reply
        $post->comments()->save($comment);

        return back();
    }

    public function destroy($id)
    {
        // Check if the authenticated user is an admin
        if (!Auth::user()->is_admin) {
            return back()->with('error', 'You are not authorized to delete this comment!');
        }

        $comment = Comment::find($id);
        $comment->delete();

        return back()->with('status', 'Comment deleted successfully!');
    }
}
