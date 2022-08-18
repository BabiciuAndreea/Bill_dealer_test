<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produs>
 */
class ProdusFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            'name' => $this->faker->word,
            'price' => $this->faker->randomFloat(2, 1, 20),
            'unit' => $this->faker->randomFloat(2, 1, 20),
            'quantity' => $this->faker->randomElement($array = array('Piece', 'Liter', 'MP', 'Kilo')),
            'type' => $this->faker->randomElement($array = array('Product', 'Service')),
        ];
    }
}