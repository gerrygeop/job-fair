<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Industri;
use App\Models\Lowongan;
use App\Models\Perusahaan;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CategorySeeder::class,
        ]);

        User::factory()->create([
            'email' => fake()->safeEmail(),
            'role' => \App\Enums\UserRole::ADMIN
        ]);

        $industri = Industri::all();
        $categories = Category::all();

        User::factory(10)->create()->each(function ($user) use ($industri, $categories) {
            $perusahaan = Perusahaan::factory()->create([
                'user_id' => $user->id,
                'industri_id' => $industri->random(),
            ]);

            Lowongan::factory(rand(1, 3))->create([
                'perusahaan_id' => $perusahaan->id,
                'category_id' => $categories->random(),
            ]);
        });
    }
}
