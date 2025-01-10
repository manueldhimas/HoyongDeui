<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesananTable extends Migration
{
    public function up()
    {
        Schema::create('pesanan', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->string('nama_pesanan');
            $table->decimal('total_harga', 10, 2);
            $table->enum('status', ['Selesai', 'Tunggu', 'Tolak']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pesanan');
    }
};

