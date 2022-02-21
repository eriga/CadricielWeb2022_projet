<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $posts = file_get_contents(resource_path('posts.json'));

        $posts = json_decode($posts);

        return view('index', [
            'posts' => $posts
        ]);
    }

    public function show() {
        return view('show');
    }
}
