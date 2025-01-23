<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'city',
        'postal_code',
        'phone',
        'email',
        'total_price',
        'status',
    ];

    protected $table = 'pesanan';

    public function products()
    {
        return $this->belongsToMany(Product::class, 'pesanan_products')  // Menghubungkan ke tabel pivot
                    ->withPivot('quantity', 'price'); // Menyimpan informasi tambahan di tabel pivot
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
