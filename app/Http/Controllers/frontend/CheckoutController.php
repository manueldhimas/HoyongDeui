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
        // Ambil data keranjang dari session
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

        // Periksa apakah keranjang tidak kosong
        $cart = session()->get('cart', []);
        if (empty($cart)) {
            return redirect()->back()->withErrors(['cart' => 'Keranjang belanja Anda kosong.']);
        }

        // Hitung total harga pesanan
        $totalPrice = collect($cart)->sum(function ($item) {
            return $item['price'] * $item['quantity'];
        });

        // Simpan data pesanan ke database
        $pesanan = new Pesanan();
        $pesanan->name = $validatedData['name'];
        $pesanan->address = $validatedData['address'];
        $pesanan->city = $validatedData['city'];
        $pesanan->postal_code = $validatedData['postal_code'];
        $pesanan->phone = $validatedData['phone'];
        $pesanan->email = $validatedData['email'];
        $pesanan->total_price = $totalPrice;
        $pesanan->status = 'Pending'; // Status default
        $pesanan->save();

        // Simpan detail pesanan (contoh: produk dan jumlahnya)
        foreach ($cart as $productId => $item) {
            $pesanan->products()->attach($productId, [
                'quantity' => $item['quantity'],
                'price' => $item['price'],
            ]);
        }

        // Kosongkan keranjang belanja setelah berhasil disimpan
        session()->forget('cart');

        return redirect()->route('checkout.frontend')->with('success', 'Pesanan Anda telah berhasil diproses.');
    }
}