<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'stock', 'price', 'status', 'sku', 'photo'];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->sku)) {
                $model->sku = 'HYD-' . strtoupper(uniqid());
            }
        });
    }
}
