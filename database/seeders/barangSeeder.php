<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class barangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barangs')->insert([
            [
                'Kode_barang' => 'S',
                'nama_barang' => 'Sepatu',
                'Deskripsi' => 'barang bagus',
                'Harga' => 20000,
                'Satuan_id' => 1
            ],
            [
                'Kode_barang' => 'B',
                'nama_barang' => 'Baju',
                'Deskripsi' => 'Baju musim dingin',
                'Harga' => 25000,
                'Satuan_id' => 2
            ],
            [
                'Kode_barang' => 'J',
                'nama_barang' => 'Jaket',
                'Deskripsi' => 'Jaket Jeans',
                'Harga' => 23000,
                'Satuan_id' => 3
            ],
        ]);
    }
}
