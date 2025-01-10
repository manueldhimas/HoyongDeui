<?php

// app/Http/Controllers/backend/LogistikController.php
namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Logistik;
use Illuminate\Http\Request;

class LogistikController extends Controller
{
    public function index()
    {
        $logistik = Logistik::all();
        return view('backend.pages.logistik.index', compact('logistik'));
    }

    public function show(Logistik $logistik)
    {
        return view('backend.pages.logistik.show', compact('logistik'));
    }

    // Metode lain seperti create, store, edit, update, dan destroy
}
