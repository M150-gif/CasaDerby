<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert dummy data for clients
        Client::create([
            'nom' => 'John', // Provide a value for the 'nom' column
            'prenom' => 'Doe',
            'email' => 'john@example.com',
            'adresse' => '123 Street, City',
        ]);

        // You can add more dummy data as needed
    }
}
