<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesananProductsTable extends Migration
{
    public function up()
    {
        Schema::create('pesanan_products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pesanan_id')->constrained('pesanan')->onDelete('cascade'); // Pastikan nama tabel 'pesanan' di sini
            $table->foreignId('product_id')->constrained()->onDelete('cascade'); // Referensi ke tabel products
            $table->integer('quantity'); // Menyimpan jumlah produk
            $table->decimal('price', 10, 2); // Menyimpan harga produk
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pesanan_products');
    }
}
