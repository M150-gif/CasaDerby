<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */

    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Client::class;

    public function definition()
    {
        return [
            'nom' => $this->faker->name,
            'prenom' => $this->faker->lastName,
            'email' => $this->faker->unique()->safeEmail,
            'adresse' => $this->faker->address,
        ];
    }
}
