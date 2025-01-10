@extends('frontend.layouts.app')

@section('title', 'Produk')
@section('content')
    <section class="section produk" id="produk" aria-label="produk"
        style="background-image: url('{{ asset('frontend/assets/images/product-bg.jpg') }}'); margin-top: 5%;">
        <div class="container">

            <p class="section-subtitle text-center">Produk</p>

            <ul class="grid-list">
                @foreach ($products as $product)
                    <li class="product-column">
                        <div class="product-card">
                            <figure class="card-banner">
                                <a href="{{ route('produk.show', $product->id) }}">
                                    <img src="{{ url('image/' . $product->photo) }}" width="370" height="270" loading="lazy" alt="{{ $product->name }}" class="img-cover">
                                </a>
                            </figure>
                            <div class="card-content">
                                <h3 class="h3">
                                    <a href="{{ route('produk.show', $product->id) }}" class="card-title">{{ $product->name }}</a>
                                </h3>
                                <div class="card-price">
                                    @if ($product->discount_price)
                                        <span class="span">Rp{{ number_format($product->discount_price, 0, ',', '.') }}</span>
                                        <del class="del">Rp{{ number_format($product->price, 0, ',', '.') }}</del>
                                    @else
                                        <span class="span">Rp{{ number_format($product->price, 0, ',', '.') }}</span>
                                    @endif
                                </div>
                                <div class="rating-wrapper">
                                    <div class="rating">
                                        @for ($i = 0; $i < 5; $i++)
                                            <ion-icon name="star{{ $i < $product->rating ? '' : '-outline' }}"></ion-icon>
                                        @endfor
                                    </div>
                                    <span class="rating-text">({{ $product->reviews_count }} Ulasan)</span>
                                </div>
                                <p>Terjual {{ $product->sold_count }}</p>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
@endsection



<style>
.container {
    max-width: 1200px;
    margin: 0 auto;
}

.grid-list {
    display: flex;
    flex-wrap: wrap;
    gap: 1rem;
    justify-content: center;
}

.product-column {
    width: calc(25% - 1rem);
    box-sizing: border-box;
}

.product-card {
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    transition: transform 0.3s;
}

.product-card:hover {
    transform: scale(1.05);
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
    text-decoration: none;
    color: #333;
}

.card-title:hover {
    color: #007bff;
}

.card-price .span {
    font-size: 1.2rem;
    color: #e60023;
    margin-right: 0.5rem;
}

.card-price .del {
    color: #999;
}

.rating-wrapper {
    display: flex;
    align-items: center;
    margin-top: 0.5rem;
    margin-bottom: 1rem;
}

.rating ion-icon {
    color: #ffdd00;
}

.rating-text {
    font-size: 0.9rem;
    color: #666;
    margin-left: 0.5rem;
}
</style>
