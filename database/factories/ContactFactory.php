<?php

namespace Database\Factories;

use App\Models\Model;
use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'email' => $this->faker->unique()->safeEmail(),
            'instagram' => $this->faker->sentence(),
            'bandcamb' => $this->faker->sentence()
        ];
    }
}
