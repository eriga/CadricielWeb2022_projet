<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    protected $posts = [];

    public function __construct(){
        $this->posts = file_get_contents(resource_path('posts.json'));
        $this->posts = json_decode($this->posts);
    }

    public function index() {
        return view('index', [
            'posts' => $this->posts
        ]);
    }

    public function show($id) {
        $resultat = null;
        foreach($this->posts as $post){
            if($post->id == $id) {
                $resultat = $post;
            }
        }

        // if($resultat == null) {
        //     abort(404);
        // } else {
        //     return view('show', [
        //         "post" => $resultat,
        //     ]);
        // }

        return $resultat == null ?
                    abort(404) :
                    view('show', [
                        "post" => $resultat,
                    ]);
    }

    public function parAuteur($nom) {
        $resultat = [];
        foreach ($this->posts as $post) {
            if ($post->auteur == $nom) {
                $resultat[] = $post;
            }
        }

        return view('index', [
            "posts" => $resultat,
        ]);
    }

    public function parCategorie($nom)
    {
        $resultat = [];
        foreach ($this->posts as $post) {
            if ($post->categorie == $nom) {
                $resultat[] = $post;
            }
        }

        return view('index', [
            "posts" => $resultat,
        ]);
    }
}
