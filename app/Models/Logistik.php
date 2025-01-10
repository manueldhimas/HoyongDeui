<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logistik extends Model
{
    use HasFactory;

    protected $fillable = ['pesanan_id', 'status_pengiriman'];

    protected $table = 'logistik'; // Nama tabel kustom

    public function pesanan()
    {
        return $this->belongsTo(Pesanan::class);
    }
}

