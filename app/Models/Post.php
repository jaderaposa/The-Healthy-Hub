<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Post extends Model
{

    use HasFactory;

    protected $fillable = [
        'name', 'detail'
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $posts = Post::latest()->paginate(5);

        return view('posts.index', compact('posts'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function createPost()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function storePost(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);

        Post::create($request->all());

        return redirect()->route('posts.index')
            ->with('success', 'Post created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  
     * @return \Illuminate\Http\Response
     */


    public function showPost(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $product
     * @return \Illuminate\Http\Response
     */


    public function editPost(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $product
     * @return \Illuminate\Http\Response
     */


    public function updatePost(Request $request, Post $post)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);

        $post->update($request->all());

        return redirect()->route('posts.index')->with('success', 'Post updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */


    public function destroyPost(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Post deleted successfully');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
