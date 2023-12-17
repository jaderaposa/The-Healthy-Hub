<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('user-home', ['posts' => $posts]);
    }

    public function postCreatePost(Request $request)
    {
        $this->validate($request, [
            'body' => 'required|max:1000',
            'photo' => 'image|mimes:jpg,jpeg,png',
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

    public function destroy($id)
    {
        $post = Post::find($id);

        // Check if the authenticated user is the owner of the post
        if (Auth::id() !== $post->user_id) {
            return redirect()->route('posts.index')->with('error', "You don't have the permission!");
        }

        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Post deleted successfully');
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'body' => 'required|max:1000',
            'photo' => 'image|mimes:jpg,jpeg,png',
        ]);

        $post = Post::find($request['id']);

        // Check if the authenticated user is the owner of the post
        if (Auth::id() !== $post->user_id) {
            return redirect('/home-page')->with('error', "You don't have the permission!");
        }

        $post->body = $request['body'];

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $filename);
            $post->photo = $filename;
        }

        $post->save();

        return redirect('/home-page')->with('message', 'Post successfully updated!');
    }

    public function show(Post $post)
    {
        $post->load('comments.user');

        return view('posts.show', compact('post'));
    }
}
