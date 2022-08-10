<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UsersBill>
 */
class UsersBillFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstname,
            'last_name' => $this->faker->lastname,
            'email' => $this->faker->unique()->safeEmail,
            'password' => $this->faker->password,
            'address' => $this->faker->streetAddress,
            'phone' => $this->faker->phoneNumber,
            'cnp' => $this->faker->unique()->randomNumber(),
            'role' => $this->faker->numberBetween(1, 2)
        ];
    }
}
