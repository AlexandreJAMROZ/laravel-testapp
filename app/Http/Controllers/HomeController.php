<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    public function index() {
        return view('home');
    }

    public function get_post() {
        
        $post_list = Post::all();
        return $post_list;
    }
}
