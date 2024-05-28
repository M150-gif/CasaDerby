<?php

namespace Database\Seeders;
use App\Models\Categorie;
use App\Models\Client;
use App\Models\Commande;
use App\Models\ligne_commande;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Créez 10 catégories
        User::factory()->count(1)->create();
        // $categories = Categorie::factory()->count(10)->create();

        // // Créez 50 produits et assignez-les à des catégories existantes
        // Product::factory()->count(50)->create([
        //     'categorie_id' => $categories->random()->id,
        // ]);
        // $clients = Client::factory()->count(10)->create();
        // $clients->each(function($client) {
        //     $commande = Commande::factory()->create(['client_id' => $client->id]);
        //     // Créez des lignes de commande pour chaque commande
        //     ligne_commande::factory()->count(5)->create(['commande_id' => $commande->id]);
        // });
    }
}
