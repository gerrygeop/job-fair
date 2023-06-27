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
            ['name' => 'Akuntan'],
            ['name' => 'Adminstrasi'],
            ['name' => 'Ahli IT'],
            ['name' => 'Ahli Kesehatan'],
            ['name' => 'Ahli Keuangan'],
            ['name' => 'Ahli Pemasaran'],
            ['name' => 'Ahli HR (Sumber Daya Manusia)'],
            ['name' => 'Analis Data'],
            ['name' => 'Arsitek'],
            ['name' => 'Asisten Riset'],
            ['name' => 'Auditor'],
            ['name' => 'Desainer Grafis'],
            ['name' => 'Developer Web'],
            ['name' => 'Dokter'],
            ['name' => 'Editor Konten'],
            ['name' => 'Engineer (Insinyur)'],
            ['name' => 'Event Planner'],
            ['name' => 'Guru'],
            ['name' => 'Ilustrator'],
            ['name' => 'Juru Masak'],
            ['name' => 'Manajer Proyek'],
            ['name' => 'Pengacara'],
            ['name' => 'Penerjemah'],
            ['name' => 'Penulis'],
            ['name' => 'Public Relations (Hubungan Masyarakat)'],
            ['name' => 'Sales Executive'],
            ['name' => 'Teknisi'],
            ['name' => 'Translator'],
            ['name' => 'Travel Consultant'],
            ['name' => 'Video Editor'],
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
