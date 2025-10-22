<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;

class PostController extends Controller
{
    // Display posts page
    public function view_posts() {
        $post_list = (new HomeController)->get_post();
        /*dd($post_list);*/
        return view('posts', compact('post_list'));
    }
}
