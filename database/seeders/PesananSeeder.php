<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PesananSeeder extends Seeder
{
    public function run()
    {
        DB::table('pesanan')->insert([
            [
                'name' => 'Andi Wijaya',
                'address' => 'Jl. Mawar No. 10',
                'city' => 'Jakarta',
                'postal_code' => '10110',
                'phone' => '081234567890',
                'email' => 'andi@example.com',
                'nama_pesanan' => 'Keripik Talas, Klepon',
                'total_price' => 35000.00,
                'status' => 'Completed',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Siti Aminah',
                'address' => 'Jl. Melati No. 20',
                'city' => 'Bandung',
                'postal_code' => '40211',
                'phone' => '081987654321',
                'email' => 'siti@example.com',
                'nama_pesanan' => 'Rempeyek Kacang, Getuk',
                'total_price' => 43000.00,
                'status' => 'Pending',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Budi Santoso',
                'address' => 'Jl. Anggrek No. 5',
                'city' => 'Surabaya',
                'postal_code' => '60225',
                'phone' => '081345678901',
                'email' => 'budi@example.com',
                'nama_pesanan' => 'Bolu Kukus Pandan, Kue Lapis Legit',
                'total_price' => 110000.00,
                'status' => 'Rejected',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
