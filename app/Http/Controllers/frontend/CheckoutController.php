<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pesanan;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart', []);
        return view('frontend.pages.checkout.index', compact('cart'));
    }

    public function store(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'postal_code' => 'required|string|max:10',
            'phone' => 'required|string|max:15',
            'email' => 'required|string|email|max:255',
        ]);

        // Simpan pesanan
        $pesanan = new Pesanan();
        $pesanan->id = Auth::id();
        $pesanan->name = $validatedData['name'];
        $pesanan->address = $validatedData['address'];
        $pesanan->city = $validatedData['city'];
        $pesanan->postal_code = $validatedData['postal_code'];
        $pesanan->phone = $validatedData['phone'];
        $pesanan->email = $validatedData['email'];
        $pesanan->total_price = collect(session()->get('cart'))->sum(function ($item) {
            return $item['price'] * $item['quantity'];
        });
        $pesanan->save();

        // Simpan detail pesanan
        foreach (session()->get('cart') as $productId => $item) {
            $pesanan->products()->attach($productId, ['quantity' => $item['quantity'], 'price' => $item['price']]);
        }

        // Kosongkan keranjang
        session()->forget('cart');

        return redirect()->route('checkout.index')->with('success', 'Pesanan Anda telah berhasil diproses.');
    }
}