<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KameraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kamera')->insert([
            [
                'kamera' => 'Produk 1',
                'tipe_kamera' => 'Elektronik',
                'deskripsi' => 'Deskripsi untuk Produk 1',
                'harga_jual' => 1000000.00,
                'foto' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kamera' => 'Produk 2',
                'tipe_kamera' => 'Pakaian',
                'deskripsi' => 'Deskripsi untuk Produk 2',
                'harga_jual' => 200000.00,
                'foto' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kamera' => 'Produk 3',
                'tipe_kamera' => 'Peralatan Rumah Tangga',
                'deskripsi' => 'Deskripsi untuk Produk 3',
                'harga_jual' => 300000.00,
                'foto' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        //
    }
}
