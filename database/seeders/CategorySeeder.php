<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name' => 'Manajemen', 'slug' => 'manajemen'],
            ['name' => 'Keuangan', 'slug' => 'keuangan'],
            ['name' => 'Teknologi Informasi', 'slug' => 'teknologi-informasi'],
            ['name' => 'Kesehatan', 'slug' => 'kesehatan'],
            ['name' => 'Penjualan', 'slug' => 'penjualan'],
            ['name' => 'Analitik', 'slug' => 'analitik'],
            ['name' => 'Kreatif', 'slug' => 'kreatif'],
            ['name' => 'Pendidikan', 'slug' => 'pendidikan'],
            ['name' => 'Teknik', 'slug' => 'teknik'],
            ['name' => 'Administrasi', 'slug' => 'administrasi'],
        ]);

        DB::table('industri')->insert([
            ['name' => 'Makanan dan Minuman', 'slug' => 'makanan-dan-minuman'],
            ['name' => 'Tekstil dan Garmen', 'slug' => 'tekstil-dan-garmen'],
            ['name' => 'Otomotif', 'slug' => 'otomotif'],
            ['name' => 'Elektronik dan Teknologi Informasi', 'slug' => 'elektronik-dan-teknologi-informasi'],
            ['name' => 'Konstruksi', 'slug' => 'konstruksi'],
            ['name' => 'Pertanian dan Perkebunan', 'slug' => 'pertanian-dan-perkebunan'],
            ['name' => 'Peralatan Medis', 'slug' => 'peralatan-medis'],
            ['name' => 'Kimia', 'slug' => 'kimia'],
            ['name' => 'Energi dan Pertambangan', 'slug' => 'energi-dan-pertambangan'],
            ['name' => 'Pariwisata dan Perhotelan', 'slug' => 'pariwisata-dan-perhotelan'],
            ['name' => 'Jasa Keuangan', 'slug' => 'jasa-keuangan'],
            ['name' => 'Perdagangan', 'slug' => 'perdagangan'],
            ['name' => 'Manufaktur', 'slug' => 'manufaktur'],
            ['name' => 'Logistik dan Transportasi', 'slug' => 'logistik-dan-transportasi'],
            ['name' => 'Kreatif', 'slug' => 'kreatif'],
        ]);
    }
}
