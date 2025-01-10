@extends('frontend.layouts.app')

@section('title', 'Checkout')
@section('content')
    <div class="container my-5" style="margin-top: 10%;">
        <div class="page-heading text-center mb-4">
            <h3>Checkout</h3>
        </div>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">Ringkasan Pesanan</div>

                    <div class="card-body">
                        @foreach($cart as $id => $item)
                            <div class="d-flex justify-content-between mb-3">
                                <div>{{ $item['name'] }} x {{ $item['quantity'] }}</div>
                                <div>Rp{{ number_format($item['price'] * $item['quantity'], 0, ',', '.') }}</div>
                            </div>
                        @endforeach
                        <hr>
                        <div class="d-flex justify-content-between font-weight-bold">
                            <div>Total</div>
                            <div>Rp{{ number_format(collect($cart)->sum(function ($item) { return $item['price'] * $item['quantity']; }), 0, ',', '.') }}</div>
                        </div>
                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-header text-center">Informasi Pengiriman</div>

                    <div class="card-body">
                        <form action="{{ route('checkout.store') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="name">Nama</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="address">Alamat</label>
                                <input type="text" class="form-control" id="address" name="address" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="city">Kota</label>
                                <input type="text" class="form-control" id="city" name="city" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="postal_code">Kode Pos</label>
                                <input type="text" class="form-control" id="postal_code" name="postal_code" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="phone">Telepon</label>
                                <input type="text" class="form-control" id="phone" name="phone" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>

                            <button type="submit" class="btn btn-primary w-100">Proses Pesanan</button>
                        </form>
                    </div>
                </div>

                <div class="text-center mt-4">
                    <a href="{{ route('produk.frontend') }}" class="btn btn-secondary w-100">Kembali</a>
                </div>
            </div>
        </div>
    </div>
@endsection
