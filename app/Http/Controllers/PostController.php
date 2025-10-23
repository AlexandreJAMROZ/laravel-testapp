<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Display posts page
    public function index()
    {
        // route --> /posts
        $post_list = Post::orderBy('created_at', 'desc')->get();

        // dd($post_list); // Die and dump for debug
        return view('posts.index', compact('post_list'));
    }

    public function show($id)
    {
        // route --> /posts/{id}
        $post = Post::findOrFail($id);

        return view('posts.show', compact('post'));
    }

    public function view_create()
    {
        // route --> /posts/create
        return view('posts.create');
    }

    public function post_create(Request $request)
    {
        // route --> /posts/create
        // dd($request->all());

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'content' => 'required|string|',
        ]);

        Post::create($validated);

        return redirect('/posts')->with('success', 'Post created successfully!');
    }
}
