<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'client_name' => $this->faker->name,
            'cif' => $this->faker->numerify('RO ######'),
            'nr_reg' => $this->faker->numerify('J##/####/####'),
            'city' => $this->faker->city,
            'county' => $this->faker->state,
            'address' => $this->faker->streetAddress,
            'phone' => $this->faker->e164PhoneNumber,
            'email' => $this->faker->unique()->safeEmail
        ];
    }
}
