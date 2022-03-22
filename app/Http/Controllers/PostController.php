<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Categorie;
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
        return view('posts.index', [
            'posts' => Post::limit(6)->latest()->get(),
            'plus' => true
        ]);
    }

    public function tous() {
        return view('posts.index', [
            'posts' => Post::all()
        ]);
    }

    /**
     * Méthode pour la route /posts/{id}
     * Retourne le post correspondant à l'id reçu
     */
    public function show($id)
    {        
        $post = Post::findOrFail($id);

        return view('posts.show', [
                "post" => $post,
            ]);
    }

    /**
     * Méthode pour la route /auteur/{id}
     * Retourne tous les posts d'un auteur spécifique
     */
    public function parAuteur($id)
    {
        $user = User::findOrFail($id);

        return view('posts.index', [
            "posts" => $user->posts,
        ]);
    }

    /**
     * Méthode pour la route /categorie/{id}
     * Retourne tous les posts d'une catégorie spécifique
     */
    public function parCategorie($id)
    {        
        $categorie = Categorie::find($id);

        return view('posts.index', [
            "posts" => $categorie->posts,
        ]);
    }

    /**
     * Méthode pour la route /posts/create
     * Retourne la vue affichant le formulaire d'ajout d'une publication
     */
    public function create(){
        $categories = [
            'categories' => Categorie::all()
        ];

        return view('posts.create', $categories);
    }

    /**
     * Méthode pour la route /posts
     * Récupère les informations du formulaire et les persiste
     */
    public function store(PostRequest $request){

        $post = new Post;
        $post->titre = $request->titre;
        $post->texte = $request->texte;
        $post->category_id = $request->categorie;
        $post->user_id = 1;
        $post->likes = 0;
        $post->dislikes = 0;

        $post->save();


        return redirect('/')->with('success', 'Publication ajoutée!');
    }

    /**
     * Méthode pour la route /posts/update/{id}
     * Retourne la vue affichant le formulaire de la publication à modifier
     */
    public function update(Request $request, $id){
        return view('posts.update', [
                "post" => Post::find($id),
                "categories" => Categorie::all()
            ]);
    }

    /**
     * Méthode pour la route /posts/destroy/{id}
     * Supprime une publication et redirige à la page d'accueil
     */
    public function destroy($id){
        Post::destroy($id);

        return redirect('/')->with('destroy', 'Suppression effectuée');
    }

    /**
     * Méthode pour la route /posts/chercher
     * Retourne tous les posts correspondants à la recherche
     */
    public function chercher(Request $request)
    {
        // dd($request->recherche);
        //Conversion de la requête en minuscules, par prévention
        $requete = strtolower($request->recherche);

        // Récupération des posts, s'il y a lieu
        $posts = Post::where('texte', 'like', '%'.$requete.'%')
                     ->orWhere('titre', 'like', '%'.$requete.'%')
                     ->get();

        return view('posts.index', [
            "posts" => $posts
        ]);
    }
}
