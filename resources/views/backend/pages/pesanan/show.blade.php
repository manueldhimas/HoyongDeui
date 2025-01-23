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
                                <p><strong>Nama Pelanggan:</strong> {{ $pesanan->name }}</p>
                                <p><strong>Alamat Pelanggan:</strong> {{ $pesanan->address }}</p>
                                <p><strong>Kota:</strong> {{ $pesanan->city }}</p>
                                <p><strong>Kode Pos:</strong> {{ $pesanan->postal_code }}</p>
                                <p><strong>No. Telp:</strong> {{ $pesanan->phone }}</p>
                                <p><strong>Email:</strong> {{ $pesanan->email }}</p>
                                <p><strong>Tanggal Pesanan:</strong> {{ $pesanan->created_at->format('d M Y H:i:s') }}
                                </p>
                                <p><strong>Nama Pesanan:</strong> {{ $pesanan->nama_pesanan }}</p>
                            </div>
                            <div class="col-md-6">
                                <p><strong>Total Harga:</strong> {{ number_format($pesanan->total_price, 2) }}</p>
                                <p><strong>Status:</strong> {{ $pesanan->status }}</p>
                                <p><strong>Produk Dipesan:</strong></p>
                                <ul>
                                    @foreach($pesanan->products as $product)
                                        <li>{{ $product->name }} ({{ $product->pivot->quantity }} x
                                            {{ number_format($product->pivot->price, 2) }})</li>
                                    @endforeach
                                </ul>
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