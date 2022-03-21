<?php

namespace Database\Factories;

use App\Models\Categorie;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user = User::inRandomOrder()->first();
        $categorie = Categorie::inRandomOrder()->first();

        return [
            'titre' => $this->faker->sentence(),
            'texte' => $this->faker->paragraphs(6, true),
            'user_id' => $user->id,
            'category_id' => $categorie->id,
            'likes' => rand(0, 300),
            'dislikes' => rand(0, 300),
        ];
    }
}
