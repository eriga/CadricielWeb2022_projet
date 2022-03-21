<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{

    /**
     * Méthode pour la route principale
     * Retourne tous les posts
     */
    public function index()
    {
        return view('index', [
            'posts' => Post::limit(6)->get(),
            'plus' => true
        ]);
    }

    public function tous() {
        return view('index', [
            'posts' => Post::all()
        ]);
    }

    /**
     * Méthode pour la route /posts/{id}
     * Retourne le post correspondant à l'id reçu
     */
    public function show($id)
    {

        // $resultat = DB::select('SELECT * FROM posts WHERE id = ?', [$id]);
        $resultat = Post::findOrFail($id);

        return view('show', [
                "post" => $resultat,
            ]);
    }

    /**
     * Méthode pour la route /auteur/{nom}
     * Retourne tous les posts d'un auteur spécifique
     */
    public function parAuteur($id)
    {
        $resultat = User::findOrFail($id);

        dd($resultat);

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
        // $resultat = DB::select("SELECT * FROM posts WHERE categorie = ?", [$nom]);
        $resultat = DB::table('posts')
            ->where('categorie', '=', $nom)
            ->get();

        return view('index', [
            "posts" => $resultat,
        ]);
    }
}
