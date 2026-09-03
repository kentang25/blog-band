<?php

namespace Database\Factories;

use App\Models\Katalog;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Katalog>
 */
class KatalogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'slug' => fake()->slug(),
            'gambar' => fake()->imageUrl(),
            'size' => fake()->randomElement(['S', 'M', 'L', 'XL'])
        ];
    }
}
