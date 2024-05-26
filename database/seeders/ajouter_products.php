<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ajouter_products extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Products')->insert([
            [
                'nom' => 'Product 1',
                'quantite' => 10,
                'description' => Str::random(100),
                'prix' => 19.99,
                'categorie_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            ]);
    }
}
