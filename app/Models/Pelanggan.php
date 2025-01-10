<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'lokasi', 'pesanan', 'tagihan_pesanan'];
    protected $table = 'pelanggan'; // Menunjuk ke tabel pelanggan
}
