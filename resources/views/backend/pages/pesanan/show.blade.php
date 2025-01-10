<!-- resources/views/backend/pages/pesanan/show.blade.php -->
@extends('backend.layouts.app')

@section('title', 'Detail Pesanan')

@section('content')

<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <h3>Detail Pesanan</h3>
    </div>

    <div class="page-content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Detail Pesanan</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <p><strong>Nama Pelanggan:</strong> {{ $pesanan->pelanggan->nama }}</p>
                                <p><strong>Lokasi Pelanggan:</strong> {{ $pesanan->pelanggan->lokasi }}</p>
                                <p><strong>Tanggal Pesanan:</strong> {{ $pesanan->tanggal }}</p>
                                <p><strong>Nama Pesanan:</strong> {{ $pesanan->nama_pesanan }}</p>
                            </div>
                            <div class="col-md-6">
                                <p><strong>Total Harga:</strong> {{ $pesanan->total_harga }}</p>
                                <p><strong>Status:</strong> {{ $pesanan->status }}</p>
                                <p><strong>Produk SKU:</strong> {{ $pesanan->produk_sku }}</p>
                            </div>
                        </div>
                        <a href="{{ route('pesanan.index') }}" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
