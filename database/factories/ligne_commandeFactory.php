<?php

namespace Database\Factories;

use App\Models\Commande;
use App\Models\ligne_commande;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ligne_commandeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = ligne_commande::class;

    public function definition()
    {
        $product = Product::inRandomOrder()->first();
        $quantity = $this->faker->numberBetween(1, 10);
        $prixParLigne = $product->prix * $quantity;

        return [
            'commande_id' => Commande::factory(),
            'product_id' => $product->id,
            'qte_commande' => $quantity,
            'prix_par_ligne' => $prixParLigne,
        ];
    }
}
