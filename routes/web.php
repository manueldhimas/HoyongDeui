<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\backend\LogistikController;
use App\Http\Controllers\backend\PesananController;
use App\Http\Controllers\backend\PelangganController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\OrderController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\ProdukController;
use App\Http\Controllers\frontend\CartController;
use App\Http\Controllers\frontend\CheckoutController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.home');
});

// frontend
Route::get('about', [AboutController::class, 'index'])->name('about.frontend');
Route::get('cart', [CartController::class, 'index'])->name('cart.index'); 

Route::middleware(['auth','verified'])->group(function () {
    Route::post('/keranjang/add/{product}', [CartController::class, 'add'])->name('cart.add'); 
    Route::post('/keranjang/remove/{product}', [CartController::class, 'remove'])->name('cart.remove');
    Route::post('/cart/update/{product}', [CartController::class, 'update'])->name('cart.update');
});


Route::get('produk', [ProdukController::class, 'index'])->name('produk.frontend');
Route::get('produk/{id}', [ProdukController::class, 'show'])->name('produk.show');
Route::get('checkout', [CheckoutController::class, 'index'])->name('checkout.frontend');
Route::post('/checkout', [CheckoutController::class, 'store'])->name('checkout.store');

Route::get('get-contact', [ContactController::class, 'index'])->name('contact.frontend');
Route::get('order', [OrderController::class, 'index'])->name('pesanan.frontend');
Route::middleware(['auth', 'verified', 'admin'])->group(function () {

    Route::get('/home', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/logouts', [LoginController::class, 'logout'])->name('logouts');

    Route::resource('pelanggan', PelangganController::class);
    Route::resource('products', ProductController::class);
    Route::resource('pesanan', PesananController::class);
    Route::resource('logistik', LogistikController::class);

});

Auth::routes();
