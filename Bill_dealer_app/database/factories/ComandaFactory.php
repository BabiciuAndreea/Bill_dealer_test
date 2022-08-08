<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comanda>
 */
class ComandaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'tva_total' => $this->faker->numberBetween(0, 25),
            'valoare_total' => $this->faker->randomFloat(2, 0, 100),
            'curs_valutar' => $this->faker->numberBetween(4.50, 5.00)
        ];
    }
}
