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

    public function show($id) {
        $posts = file_get_contents(resource_path('posts.json'));
        $posts = json_decode($posts);

        $resultat = null;
        foreach($posts as $post){
            if($post->id == $id) {
                $resultat = $post;
            }
        }

        return view('show', [
            "post" => $resultat,
        ]);
    }

    public function parAuteur($nom) {
        $posts = file_get_contents(resource_path('posts.json'));
        $posts = json_decode($posts);

        $resultat = [];
        foreach ($posts as $post) {
            if ($post->auteur == $nom) {
                $resultat[] = $post;
            }
        }

        return view('index', [
            "posts" => $resultat,
        ]);
    }
}
