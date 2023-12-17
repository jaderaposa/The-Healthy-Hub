<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\LikePost;

class LikePostController extends Controller
{
    public function store(Request $request, Post $post)
    {
        $likePost = new LikePost;
        $likePost->user_id = $request->user()->id;
        $likePost->post_id = $post->id;
        $likePost->save();

        return back();
    }

    public function destroy(Request $request, Post $post)
    {
        $request->user()->likeposts()->where('post_id', $post->id)->delete();

        return back();
    }
}
