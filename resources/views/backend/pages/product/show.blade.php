@extends('backend.layouts.app')

@section('content')
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <h3>Detail Produk</h3>
    </div>

    <div class="page-content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">Detail Produk</div>

                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Nama Produk</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}"
                                readonly>
                        </div>

                        <div class="form-group">
                            <label for="stock">Stok</label>
                            <input type="number" class="form-control" id="stock" name="stock"
                                value="{{ $product->stock }}" readonly>
                        </div>

                        <div class="form-group">
                            <label for="price">Harga</label>
                            <input type="number" class="form-control" id="price" name="price"
                                value="{{ $product->price }}" readonly>
                        </div>

                        <div class="form-group">
                            <label for="status">Status</label>
                            <input type="text" class="form-control" id="status" name="status"
                                value="{{ $product->status }}" readonly>
                        </div>

                        <div class="form-group">
                            <label for="sku">SKU</label>
                            <input type="text" class="form-control" id="sku" name="sku" value="{{ $product->sku }}"
                                readonly>
                        </div>

                        <div class="form-group">
                            <label for="photo">Foto Produk</label>
                            @if ($product->photo)
                                <img src="{{url('image')}}/{{ $product->photo }}" alt="{{ $product->name }}" width="300">
                            @else
                                <img src="{{url('image/nophoto.jpg')}}" alt="{{ $product->name }}" width="300">
                            @endif
                        </div>

                        <a href="{{ route('products.edit', $product) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('products.destroy', $product) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection