<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class EnregistrementController extends Controller
{
    public function create()
    {
        return view('auth.enregistrement');
    }

    public function store(Request $request)
    {
        $infos = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'password-confirm' => 'required|same:password'
        ]);

        // Validation réussie
        // Sauvegarde de l'utilisateur dans la BDD
        $user = new User;
        $user->nom = $infos["nom"];
        $user->prenom = $infos["prenom"];
        $user->email = $infos["email"];
        // Le mot de passe fourni par l'utilisateur DOIT être encrypté
        $user->password = bcrypt($infos["password"]);
        $user->save();

        // Authentification automatique de l'usager
        auth()->login($user);

        return redirect('/compte')->with('success', 'Enregistrement réussi!');
    }
}   
