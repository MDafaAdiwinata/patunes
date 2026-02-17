<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('brand')->insert([
            [
                'nama' => 'Compass',
                'tagline' => 'Local Pride',
                'deskripsi' => 'Brand sepatu lokal asal Bandung',
                'logo' => 'compass.png',
                'url' => 'https://compass.co.id'
            ],
            [
                'nama' => 'Ventela',
                'tagline' => 'Everyday Sneakers',
                'deskripsi' => 'Sneakers lokal berkualitas',
                'logo' => 'ventela.png',
                'url' => 'https://ventela.com'
            ],
            [
                'nama' => 'Brodo',
                'tagline' => 'Gentleman Shoes',
                'deskripsi' => 'Sepatu formal pria lokal',
                'logo' => 'brodo.png',
                'url' => 'https://bro.do'
            ],
            [
                'nama' => 'NAH Project',
                'tagline' => 'Modern Sneakers',
                'deskripsi' => 'Sneakers modern lokal',
                'logo' => 'nahproject.png',
                'url' => 'https://nahproject.com'
            ],
            [
                'nama' => 'Piero',
                'tagline' => 'Sport Spirit',
                'deskripsi' => 'Sepatu olahraga lokal',
                'logo' => 'piero.png',
                'url' => 'https://piero.co.id'
            ],
            [
                'nama' => 'League',
                'tagline' => 'Move Forward',
                'deskripsi' => 'Brand olahraga Indonesia',
                'logo' => 'league.png',
                'url' => 'https://league-world.com'
            ],
            [
                'nama' => 'Geoff Max',
                'tagline' => 'Skate Culture',
                'deskripsi' => 'Sepatu skate lokal',
                'logo' => 'geoffmax.png',
                'url' => 'https://geoff-max.com'
            ],
            [
                'nama' => 'Ardiles',
                'tagline' => 'Active Lifestyle',
                'deskripsi' => 'Sepatu aktif lokal',
                'logo' => 'ardiles.png',
                'url' => 'https://ardiles.com'
            ],
            [
                'nama' => 'Specs',
                'tagline' => 'Performance First',
                'deskripsi' => 'Sepatu olahraga Indonesia',
                'logo' => 'specs.png',
                'url' => 'https://specs.id'
            ],
            [
                'nama' => 'Word Division',
                'tagline' => 'Urban Style',
                'deskripsi' => 'Sepatu urban lokal',
                'logo' => 'worddivision.png',
                'url' => 'https://worddivision.com'
            ],
        ]);
    }
}
