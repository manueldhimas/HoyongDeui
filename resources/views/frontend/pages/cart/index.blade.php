@extends('frontend.layouts.app')
@section('title', 'Keranjang')
@section('content')
    <!-- #KERANJANG-->
    <section class="section cart" id="cart" aria-label="cart" style="margin-top: 2%;">
        <div class="container">
            <p class="section-subtitle">Keranjang Belanja</p>
            <h2 class="h2 section-title">Produk dalam Keranjang Anda</h2>

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if(!empty($cart))
                <ul class="grid-list">
                    @foreach($cart as $productId => $details)
                        <li>
                            <div class="cart-card">
                                <figure class="card-banner">
                                    <img src="{{ url('image/' . $details['photo']) }}" width="370" height="250" loading="lazy" alt="{{ $details['name'] }}" class="img-cover">
                                </figure>
                                <div class="card-content">
                                    <h3 class="h3">
                                        <a href="#" class="card-title">{{ $details['name'] }}</a>
                                    </h3>
                                    <p class="card-price">
                                        <span class="span">Rp{{ number_format($details['price'], 0, ',', '.') }}</span>
                                    </p>
                                    <p class="card-quantity">Jumlah: {{ $details['quantity'] }}</p>
                                    <form action="{{ route('cart.update', $productId) }}" method="POST">
                                        @csrf
                                        <input type="number" name="quantity" value="{{ $details['quantity'] }}" min="1">
                                        <button type="submit" class="btn-link">
                                            <span class="span">Perbarui</span>
                                        </button>
                                    </form>
                                    <form action="{{ route('cart.remove', $productId) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn-link">
                                            <span class="span">Hapus</span>
                                            <ion-icon name="trash-outline" aria-hidden="true"></ion-icon>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
                <div class="total">
                    <h3>Total: Rp{{ number_format(collect($cart)->sum(function($item) { return $item['price'] * $item['quantity']; }), 0, ',', '.') }}</h3>
                    <a href="{{ route('checkout.frontend') }}" class="btn-link">
                        <span class="span">Checkout</span>
                        <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                    </a>
                </div>
            @else
                <p>Keranjang Anda kosong.</p>
            @endif
        </div>
    </section>
@endsection




<style>
.container {
    max-width: 1200px;
    margin: 0 auto;
}

.section-title {
    text-align: center;
    margin-bottom: 2rem;
}

.grid-list {
    display: flex;
    flex-wrap: wrap;
    gap: 1rem;
}

.cart-card {
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    width: 100%;
    max-width: 300px;
}

.card-banner img {
    width: 100%;
    height: auto;
}

.card-content {
    padding: 1rem;
}

.card-title {
    font-size: 1.2rem;
    margin-bottom: 0.5rem;
}

.card-price {
    font-size: 1rem;
    margin-bottom: 0.5rem;
}

.card-quantity {
    font-size: 0.9rem;
    margin-bottom: 1rem;
}

.btn-link {
    color: #007bff;
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.btn-link:hover {
    color: #0056b3;
}

.total {
    text-align: right;
    margin-top: 2rem;
}

.total h3 {
    font-size: 1.5rem;
    margin-bottom: 1rem;
}

.total .btn-link {
    background: #007bff;
    color: #fff;
    padding: 0.5rem 1rem;
    border-radius: 4px;
    text-decoration: none;
    transition: background 0.3s;
}

.total .btn-link:hover {
    background: #0056b3;
}
</style>
