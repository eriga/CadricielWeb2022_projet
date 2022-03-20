<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function categorie(){
        return $this->belongsTo(Categorie::class, 'category_id');
    }

    // Accesseur pour la popularité
    public function getPopulariteAttribute()
    {
        return $this->likes - $this->dislikes;
    }
}
