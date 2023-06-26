<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Perusahaan>
 */
class PerusahaanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_perusahaan' => fake()->company(),
            'alamat' => fake()->address(),
            'lokasi' => fake()->city(),
            'telpon' => fake()->phoneNumber(),
            'url_website' => fake()->domainName(),
            'deskripsi' => fake()->text(),
            'logo_path' => basename(fake()->image(storage_path('app/public/perusahaan/logo'))),
        ];
    }
}
