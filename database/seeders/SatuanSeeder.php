<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SatuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('satuans')->insert([
            [
                'code' => 'Kg',
                'name' => 'Kilogram',
                'deskripsi' => 'Kilogram'
            ],
            [
                'code' => 'Os',
                'name' => 'Ons',
                'deskripsi' => 'Ons'
            ],
            [
                'code' => 'Lr',
                'name' => 'Liter',
                'deskripsi' => 'Liter'
            ],
        ]);
    }
}
