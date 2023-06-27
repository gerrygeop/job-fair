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
            ['name' => 'Manajemen'],
            ['name' => 'Keuangan'],
            ['name' => 'Teknologi Informasi'],
            ['name' => 'Kesehatan'],
            ['name' => 'Penjualan'],
            ['name' => 'Analitik'],
            ['name' => 'Kreatif'],
            ['name' => 'Pendidikan'],
            ['name' => 'Teknik'],
            ['name' => 'Administrasi'],
        ]);

        DB::table('industri')->insert([
            ['name' => 'Makanan dan Minuman'],
            ['name' => 'Tekstil dan Garmen'],
            ['name' => 'Otomotif'],
            ['name' => 'Elektronik dan Teknologi Informasi'],
            ['name' => 'Konstruksi'],
            ['name' => 'Pertanian dan Perkebunan'],
            ['name' => 'Peralatan Medis'],
            ['name' => 'Kimia'],
            ['name' => 'Energi dan Pertambangan'],
            ['name' => 'Pariwisata dan Perhotelan'],
            ['name' => 'Jasa Keuangan'],
            ['name' => 'Perdagangan'],
            ['name' => 'Manufaktur'],
            ['name' => 'Logistik dan Transportasi'],
            ['name' => 'Kreatif'],
        ]);
    }
}
