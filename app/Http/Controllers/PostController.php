<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            "title" => "All Posts",
            "posts" => Post::latest()->filter(request(['search', 'category', 'user']))->paginate(7)->withQueryString(),
            'active' => 'posts'
        ]);
    }

    public function show(Post $post) 
    {
        return view('post', [
            "title" => "Single Post",
            "post" => $post,
            'active' => 'posts'
        ]);
    }
}