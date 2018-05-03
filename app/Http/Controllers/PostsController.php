<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();
        return view('home', compact('posts'));
    }

    public function show(Post $post)
    {
        return $post;
    }
}