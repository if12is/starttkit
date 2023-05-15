<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Film>
 */
class FilmFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {
        return [
            // make fake data
            'name' => $this->faker->word,
            'storyline' => $this->faker->text,
            'year' => $this->faker->year,
            'category' => $this->faker->randomElement(['Action', 'Comedy', 'Drama', 'Horror', 'Thriller', 'Fantasy', 'Documentary']),
            'photo' => $this->faker->imageUrl(500,500),
            'rating' => $this->faker->numberBetween(5,10),
            'slug' => $this->faker->slug,
        ];
    }
}
