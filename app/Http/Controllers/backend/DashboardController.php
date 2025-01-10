<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Pesanan;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        // Ambil data dari database
        $penjualan = Pesanan::sum('total_harga');
        $modal = Product::sum('price'); // Asumsi price adalah modal
        $untung = $penjualan - $modal;
        $topProduk = Product::count();

        // Dapatkan peran pengguna saat ini
        $user_role = Auth::user()->role;

        // Kirim data ke view
        return view('backend.dashboard.index', compact('penjualan', 'modal', 'untung', 'topProduk', 'user_role'));
    }
}
