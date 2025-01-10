<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pesanan;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Pesanan::where('id', Auth::id())->paginate(10);
        return view('frontend.pages.pesanan.index', compact('orders'));
    }
}
