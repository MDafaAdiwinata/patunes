<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'nama' => 'Compass Gazelle Low',
                'harga' => 498000,
                'deskripsi' => 'Sneakers kasual klasik',
                'gambar' => 'gazelle.jpg',
                'id_kategori' => 1,
                'id_brand' => 1
            ],
            [
                'nama' => 'Ventela Public Low',
                'harga' => 389000,
                'deskripsi' => 'Sneakers kasual harian',
                'gambar' => 'publiclow.jpg',
                'id_kategori' => 1,
                'id_brand' => 2
            ],
            [
                'nama' => 'Brodo Signore',
                'harga' => 799000,
                'deskripsi' => 'Sepatu formal pria',
                'gambar' => 'signore.jpg',
                'id_kategori' => 5,
                'id_brand' => 3
            ],
            [
                'nama' => 'NAH FlexKnit',
                'harga' => 450000,
                'deskripsi' => 'Sneakers ringan modern',
                'gambar' => 'flexknit.jpg',
                'id_kategori' => 2,
                'id_brand' => 4
            ],
            [
                'nama' => 'Piero Jogger',
                'harga' => 420000,
                'deskripsi' => 'Sepatu running ringan',
                'gambar' => 'jogger.jpg',
                'id_kategori' => 2,
                'id_brand' => 5
            ],
            [
                'nama' => 'League Kumo',
                'harga' => 550000,
                'deskripsi' => 'Sepatu basket performa tinggi',
                'gambar' => 'kumo.jpg',
                'id_kategori' => 3,
                'id_brand' => 6
            ],
            [
                'nama' => 'Geoff Max 1500',
                'harga' => 399000,
                'deskripsi' => 'Sepatu skate klasik',
                'gambar' => 'gm1500.jpg',
                'id_kategori' => 10,
                'id_brand' => 7
            ],
            [
                'nama' => 'Ardiles Outdoor Pro',
                'harga' => 470000,
                'deskripsi' => 'Sepatu outdoor tahan air',
                'gambar' => 'outdoorpro.jpg',
                'id_kategori' => 9,
                'id_brand' => 8
            ],
            [
                'nama' => 'Specs Accelerator',
                'harga' => 520000,
                'deskripsi' => 'Sepatu futsal profesional',
                'gambar' => 'accelerator.jpg',
                'id_kategori' => 4,
                'id_brand' => 9
            ],
            [
                'nama' => 'Word Division Urban High',
                'harga' => 430000,
                'deskripsi' => 'Sneakers urban high cut',
                'gambar' => 'urbanhigh.jpg',
                'id_kategori' => 1,
                'id_brand' => 10
            ],
        ]);
    }
}
