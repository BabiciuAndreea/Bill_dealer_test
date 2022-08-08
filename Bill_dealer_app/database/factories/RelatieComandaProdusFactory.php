<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RelatieComandaProdus>
 */
class RelatieComandaProdusFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id_comanda' => $this->faker->randomDigit,
            'id_produs' => $this->faker->randomDigit,
            'cantitate' => $this->faker->numberBetween(1, 20),
            'tva' => $this->faker->numberBetween(0, 25),
            'valoare' => $this->faker->randomFloat(2, 0, 100),
        ];
    }
}
