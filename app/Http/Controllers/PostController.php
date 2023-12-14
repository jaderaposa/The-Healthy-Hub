<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::all();
        return view('user-home', ['posts' => $posts]);
    }

    public function postCreatePost(Request $request)
    {
        $this->validate($request, [
            'body' => 'required|max:1000',
            'photo' => 'required|image|mimes:jpg,jpeg,png',
        ]);

        $post = new Post();
        $post->body = $request['body'];

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $filename);
            $post->photo = $filename;
        }

        $request->user()->posts()->save($post);

        return redirect('/home-page')->with('message', 'Post successfully created!');
    }
}
