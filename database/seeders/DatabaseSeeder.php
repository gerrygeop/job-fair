<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
        $industri = Industri::factory(10)->create();

        User::factory()->create([
            'role' => \App\Enums\UserRole::ADMIN
        ]);

        User::factory(10)->create()->each(function ($user) use ($industri) {
            $perusahaan = Perusahaan::factory()->create([
                'user_id' => $user->id,
            ]);

            $perusahaan->industri()->attach($industri->random());

            Lowongan::factory(rand(1, 3))->create([
                'perusahaan_id' => $perusahaan->id
            ]);
        });
    }
}
