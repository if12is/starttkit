<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin>
 */
class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
          'name' => $this->faker->name,
          'email' => $this->faker->unique()->safeEmail,
          'username' => $this->faker->unique()->userName,
          'phone' => $this->faker->unique()->phoneNumber,
          'super_admin' => $this->faker->boolean,
          'status' => 'active',
          'password' => bcrypt('password'),
        ];
    }
    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
      return $this->state(fn (array $attributes) => [
        'email_verified_at' => null,
        'phone_verified_at' => null,
      ]);
    }
}
