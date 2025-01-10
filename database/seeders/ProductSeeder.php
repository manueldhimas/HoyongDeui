<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'name' => 'Produk Contoh',
            'stock' => 100,
            'price' => 15000.00,
            'status' => 'Aktif',
            'sku' => 'SKU12345',
        ]);
    }
}
