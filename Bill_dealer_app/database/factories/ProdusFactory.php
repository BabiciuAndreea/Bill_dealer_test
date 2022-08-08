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

            'denumire' => $this->faker->word,
            'unitate_masura' => $this->faker->randomElement($array = array('buc', 'litru', 'mp')),
            'pret_unitar' => $this->faker->randomFloat(2, 1, 20),
            'cantitate' => $this->faker->numberBetween(1, 20),
        ];
    }
}
