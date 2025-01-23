<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductsSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Keripik Talas',
                'stock' => 100,
                'price' => 15000.00,
                'photo' => 'keripik_talas.jpg',
                'status' => 'Aktif',
                'sku' => Str::upper(Str::random(8)),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Kue Lapis Legit',
                'stock' => 50,
                'price' => 75000.00,
                'photo' => 'lapis_legit.jpg',
                'status' => 'Aktif',
                'sku' => Str::upper(Str::random(8)),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Klepon',
                'stock' => 30,
                'price' => 20000.00,
                'photo' => 'klepon.jpg',
                'status' => 'Aktif',
                'sku' => Str::upper(Str::random(8)),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Getuk',
                'stock' => 40,
                'price' => 18000.00,
                'photo' => 'getuk.jpg',
                'status' => 'Aktif',
                'sku' => Str::upper(Str::random(8)),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Rempeyek Kacang',
                'stock' => 120,
                'price' => 25000.00,
                'photo' => 'rempeyek_kacang.jpg',
                'status' => 'Aktif',
                'sku' => Str::upper(Str::random(8)),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bolu Kukus Pandan',
                'stock' => 60,
                'price' => 35000.00,
                'photo' => 'bolu_kukus_pandan.jpg',
                'status' => 'Aktif',
                'sku' => Str::upper(Str::random(8)),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
