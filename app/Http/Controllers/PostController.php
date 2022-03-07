<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{

    /**
     * Méthode pour la route principale
     * Retourne tous les posts
     */
    public function index() {
        $posts = DB::select('SELECT * FROM posts');

        return view('index', [
            'posts' => $posts
        ]);
    }

    /**
     * Méthode pour la route /posts/{id}
     * Retourne le post correspondant à l'id reçu
     */
    public function show($id) {

        $resultat = DB::select('SELECT * FROM posts WHERE id = ?', [$id]);

        return $resultat == null ?
                    abort(404) :
                    view('show', [
                        "post" => $resultat,
                    ]);
    }

    /**
     * Méthode pour la route /auteur/{nom}
     * Retourne tous les posts d'un auteur spécifique
     */
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

    /**
     * Méthode pour la route /categorie/{nom}
     * Retourne tous les posts d'une catégorie spécifique
     */
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
