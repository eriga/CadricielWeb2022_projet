<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InitController extends Controller
{
    /**
     * Méthode en charge de la route /init
     * La méthode lit le fichier posts.json
     * et ajoute les infos à la BDD
     */
    public function index() {
        DB::statement('TRUNCATE posts');

        $posts = file_get_contents(resource_path('posts.json'));
        $posts = json_decode($posts, true);

        foreach($posts as $post){
            $res = DB::table('posts')
                        ->insert([
                            "titre" => $post["titre"],
                            "texte" => $post["texte"],
                            "auteur" => $post["auteur"],
                            "categorie" => $post["categorie"]
                        ]);

            if(!$res) break;
        }

        return ["succes" => $res];

    }
}
