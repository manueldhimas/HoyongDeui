<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('frontend.pages.produk.index', compact('products'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('frontend.pages.produk.show', compact('product'));
    }
}
