<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoice>
 */
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'data_emitere' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'data_scadenta' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'serie_factura' => $this->faker->word,
            'nr_factura' => $this->faker->randomNumber($nbDigits = NULL, $strict = false),
        ];
    }
}
