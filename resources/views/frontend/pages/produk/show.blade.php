@extends('frontend.layouts.app')

@section('title', 'Detail Produk')
@section('content')
    <div class="container my-5">
        <div class="page-heading text-center mb-4">
            <h3>Detail Produk</h3>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <div class="card mb-4">
                    <div class="image-section text-center p-3">
                        @if ($product->photo)
                            <img src="{{ url('image/' . $product->photo) }}" alt="{{ $product->name }}" class="img-fluid">
                        @else
                            <p>Tidak ada foto produk.</p>
                        @endif
                    </div>
                </div>
                <div class="card p-3">
                    <h4 class="card-title mb-3">{{ $product->name }}</h4>
                    <p class="card-price text-danger font-weight-bold">Rp{{ number_format($product->price, 0, ',', '.') }}</p>

                    <div class="d-flex justify-content-center align-items-center mb-3">
                        <div class="rating-wrapper mx-auto">
                            <div class="rating">
                                @for ($i = 0; $i < 5; $i++)
                                    <ion-icon name="star{{ $i < $product->rating ? '' : '-outline' }}"></ion-icon>
                                @endfor
                            </div>
                            <span class="rating-text">({{ $product->reviews_count }} Ulasan)</span>
                        </div>
                    </div>

                    <p class="stock mx-auto">Stok: Tersisa {{ $product->stock }}</p>

                    <h5>Deskripsi Produk</h5>
                    <p>{{ $product->description }}</p>

                    <h5>Atur Jumlah Pesanan</h5>
                    <input type="number" class="form-control mb-3 text-center mx-auto" name="quantity" id="quantity" value="1" min="1" max="{{ $product->stock }}" style="width: 100px;">
                    <p>Subtotal: <span id="subtotal">Rp{{ number_format($product->price, 0, ',', '.') }}</span></p>
                </div>
            </div>
            <div class="col-md-8 text-center mt-4">
                <div class="d-flex justify-content-around">
                    <a href="{{ route('produk.frontend') }}" class="btn btn-secondary mx-1">Kembali</a>
                    <form action="{{ route('cart.add', $product->id) }}" method="POST" class="d-inline-block mx-1">
                        @csrf
                        <button type="submit" class="btn btn-success">Tambah ke Keranjang</button>
                    </form>
                    <form action="{{ route('checkout.frontend') }}" method="GET" class="d-inline-block mx-1">
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <input type="hidden" name="quantity" id="hidden_quantity" value="1">
                        <button type="submit" class="btn btn-primary">Beli</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="mt-5">
            <h4 class="text-center">Ulasan Produk</h4>
            <div class="row justify-content-center">
                @forelse ($product->reviews ?? [] as $review)
                    <div class="col-md-8 mb-3">
                        <div class="card p-3 text-center">
                            <h5>{{ $review->user->name }}</h5>
                            <div class="rating mx-auto">
                                @for ($i = 0; $i < 5; $i++)
                                    <ion-icon name="star{{ $i < $review->rating ? '' : '-outline' }}"></ion-icon>
                                @endfor
                            </div>
                            <p>{{ $review->comment }}</p>
                            <p class="text-muted">{{ $review->created_at->format('d M Y') }}</p>
                        </div>
                    </div>
                @empty
                    <div class="col-md-8 mb-3">
                        <p class="text-center">Belum ada ulasan untuk produk ini.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>

    <script>
        // Update hidden input quantity based on user input
        const quantityInput = document.getElementById('quantity');
        const hiddenQuantityInput = document.getElementById('hidden_quantity');
        const subtotalElement = document.getElementById('subtotal');
        const productPrice = {{ $product->price }};

        quantityInput.addEventListener('input', function() {
            const quantity = parseInt(quantityInput.value);
            hiddenQuantityInput.value = quantity;
            const subtotal = productPrice * quantity;
            subtotalElement.textContent = 'Rp' + subtotal.toLocaleString('id-ID');
        });
    </script>
@endsection

<style>
.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 15px;
}

.page-heading {
    margin-bottom: 2rem;
}

.card {
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    margin-bottom: 1rem;
}

.image-section {
    display: flex;
    justify-content: center;
    align-items: center;
    background: #f9f9f9;
    padding: 1rem;
}

.img-fluid {
    max-width: 100%;
    height: auto;
}

.details-section {
    padding: 2rem;
}

.card-title {
    font-size: 1.8rem;
    font-weight: bold;
    margin-bottom: 1rem;
}

.card-price {
    font-size: 1.8rem;
    color: #e60023;
    font-weight: bold;
    margin-bottom: 1rem;
}

.stock {
    text-align: center;
    margin-bottom: 1rem;
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
    font-size: 1rem;
    color: #666;
    margin-left: 0.5rem;
}

.card-body h5 {
    font-size: 1.3rem;
    margin-bottom: 0.5rem;
    font-weight: bold;
}

.card-body p {
    margin-bottom: 1rem;
}

.btn {
    font-size: 1rem;
    font-weight: bold;
}

.btn-success {
    background: #28a745;
    color: #fff;
}

.btn-primary {
    background: #007bff;
    color: #fff;
}

.btn-secondary {
    background: #6c757d;
    color: #fff;
}

.card-footer {
    padding: 1rem;
    background: #f8f8f8;
    text-align: center;
}

.text-center a {
    display: inline-block;
    margin: 1rem 0;
}

.reviews-section {
    padding: 2rem;
    background: #f8f8f8;
    border-radius: 8px;
}

.review {
    margin-bottom: 1rem;
}
</style>
