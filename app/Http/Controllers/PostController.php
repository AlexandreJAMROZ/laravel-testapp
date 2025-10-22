<?php

namespace App\Http\Controllers;

use App\Models\Post;

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
}
