<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kategori')->insert([
            ['nama' => 'Sneakers', 'deskripsi' => 'Sepatu kasual dan lifestyle'],
            ['nama' => 'Running', 'deskripsi' => 'Sepatu untuk olahraga lari'],
            ['nama' => 'Basket', 'deskripsi' => 'Sepatu untuk olahraga basket'],
            ['nama' => 'Futsal', 'deskripsi' => 'Sepatu khusus futsal'],
            ['nama' => 'Formal', 'deskripsi' => 'Sepatu formal dan pantofel'],
            ['nama' => 'Boots', 'deskripsi' => 'Sepatu boots pria dan wanita'],
            ['nama' => 'Slip On', 'deskripsi' => 'Sepatu tanpa tali'],
            ['nama' => 'Sandal', 'deskripsi' => 'Sandal kasual'],
            ['nama' => 'Outdoor', 'deskripsi' => 'Sepatu kegiatan outdoor'],
            ['nama' => 'Skate', 'deskripsi' => 'Sepatu untuk skateboard'],
        ]);
    }
}
