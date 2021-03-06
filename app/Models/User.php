<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    public function posts(){
        return $this->hasMany(Post::class);
    }

    // Accesseur pour le nom complet
    public function getNomCompletAttribute(){
        return $this->prenom . " " . $this->nom;
    }
}
