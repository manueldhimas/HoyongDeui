@extends('frontend.layouts.app')

@section('title', 'Pesanan')
@section('content')
<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs" style="margin-top: 8%;">
    <div class="container">
    </div>
</section><!-- End Breadcrumbs -->

<div class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <section class="section orders" id="orders" aria-label="orders">
                    <div class="container">
                        <h2 class="h2 section-title">Pesanan Anda</h2>
                        <div class="row">
                            @foreach ($orders as $order)
                                <div class="col-md-6">
                                    <div class="card mb-4">
                                        <!-- Pastikan relasi product terdefinisi dan photo benar -->
                                        @if ($order->product && $order->product->photo)
                                            <img src="{{ asset('storage/' . $order->product->photo) }}" class="card-img-top"
                                                alt="{{ $order->product->name }}">
                                        @endif

                                        <div class="card-body">
                                            <h3 class="card-title">{{ $order->product->name ?? 'Produk tidak ditemukan' }}
                                            </h3>
                                            <p class="card-text">Jumlah: {{ $order->quantity }}</p>
                                            <p class="card-text">Harga:
                                                Rp{{ number_format($order->product->price ?? 0, 0, ',', '.') }}</p>
                                            <p class="card-text">Tanggal Pesan: {{ $order->created_at->format('d M Y') }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!-- Pastikan pagination berfungsi -->
                        <div class="pagination">
                            {{ $orders->links() }}
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-lg-4">
                <!-- Tambahkan elemen lain jika diperlukan -->
            </div>
        </div>
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
    </div>
</div>
@endsection