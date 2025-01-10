<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Pesanan;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    public function index()
    {
        $allPesanan = Pesanan::all();
        $selesaiPesanan = Pesanan::where('status', 'Selesai')->get();
        $tungguPesanan = Pesanan::where('status', 'Tunggu')->get();
        $tolakPesanan = Pesanan::where('status', 'Tolak')->get();

        return view('backend.pages.pesanan.index', compact('allPesanan', 'selesaiPesanan', 'tungguPesanan', 'tolakPesanan'));
    }

    public function create()
    {
        return view('backend.pages.pesanan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'nama_pesanan' => 'required|string|max:255',
            'total_harga' => 'required|numeric|min:0',
            'status' => 'required|in:Selesai,Tunggu,Tolak',
        ]);

        Pesanan::create($request->all());

        return redirect()->route('pesanan.index')->with('success', 'Pesanan berhasil ditambahkan');
    }

    public function show(Pesanan $pesanan)
    {
        return view('backend.pages.pesanan.show', compact('pesanan'));
    }

    public function edit(Pesanan $pesanan)
    {
        return view('backend.pages.pesanan.edit', compact('pesanan'));
    }

    public function update(Request $request, Pesanan $pesanan)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'nama_pesanan' => 'required|string|max:255',
            'total_harga' => 'required|numeric|min:0',
            'status' => 'required|in:Selesai,Tunggu,Tolak',
        ]);

        $pesanan->update($request->all());

        return redirect()->route('pesanan.index')->with('success', 'Pesanan berhasil diperbarui');
    }

    public function destroy(Pesanan $pesanan)
    {
        $pesanan->delete();

        return redirect()->route('pesanan.index')->with('success', 'Pesanan berhasil dihapus');
    }
}
