<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ClientFactory extends Factory
{
    protected $model = Client::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'cpf' => $this->faker->cpf,
            'cnpj' => $this->faker->cnpj,
            'street' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'number' => $this->faker->buildingNumber,
            'zipcode' => $this->faker->postcode,
            'city' => $this->faker->city,
            'state' => $this->faker->stateAbbr,
            'phone1' => $this->faker->phone,
            'phone2' => $this->faker->phone,
            'email' => $this->faker->unique()->safeEmail,
            'notes' => $this->faker->text($maxNbChars = 200),
            'user_id' => $this->faker->numberBetween(1, 2)
        ];
    }
}
