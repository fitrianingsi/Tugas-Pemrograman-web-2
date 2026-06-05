<?php

namespace Database\Factories;

use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(2),
            'director' => fake()->name(),
            'genre_id' => Genre::inRandomOrder()->first()->id,
            'release_year' => fake()->year(),
            'rating' => fake()->randomFloat(1, 1, 10),
            'poster' => null,
            'synopsis' => fake()->paragraph(),
            'status' => fake()->randomElement([
                'sedang_tayang',
                'akan_tayang'
            ])
        ];
    }
}
