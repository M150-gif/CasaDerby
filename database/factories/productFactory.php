<?php

namespace Database\Factories;

use App\Models\Categorie;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class productFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->word,
            'quantite' => $this->faker->numberBetween(1, 100),
            'description' => $this->faker->paragraph,
            'prix' => $this->faker->randomFloat(2, 10, 100),
            'categorie_id' => Categorie::factory(),
        ];
    }
}
