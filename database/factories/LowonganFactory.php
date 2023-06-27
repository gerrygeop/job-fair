<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lowongan>
 */
class LowonganFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $datetime = fake()->dateTimeBetween('-1 month', 'now');

        return [
            'judul' => fake()->jobTitle(),
            'kota' => fake()->city(),
            'deskripsi' => fake()->paragraph(),
            'deadline' => fake()->dateTimeBetween('now', '+2 month'),
        ];
    }
}
