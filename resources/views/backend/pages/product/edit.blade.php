@extends('backend.layouts.app')

@section('content')
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <h3>Edit Produk</h3>
    </div>

    <div class="page-content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">Edit Produk</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('products.update', $product) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="name">Nama Produk</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    value="{{ old('name', $product->name) }}" required>
                            </div>

                            <div class="form-group">
                                <label for="stock">Stok</label>
                                <input type="number" class="form-control" id="stock" name="stock"
                                    value="{{ old('stock', $product->stock) }}" required min="0">
                            </div>

                            <div class="form-group">
                                <label for="price">Harga</label>
                                <input type="number" class="form-control" id="price" name="price"
                                    value="{{ old('price', $product->price) }}" required min="0" step="0.01">
                            </div>

                            <div class="form-group">
                                <label for="status">Status</label>
                                <select class="form-control" id="status" name="status" required>
                                    <option value="Aktif" {{ $product->status == 'Aktif' ? 'selected' : '' }}>Aktif
                                    </option>
                                    <option value="Nonaktif" {{ $product->status == 'Nonaktif' ? 'selected' : '' }}>
                                        Nonaktif</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="sku">SKU</label>
                                <input type="text" class="form-control" id="sku" name="sku"
                                    value="{{ old('sku', $product->sku) }}" required>
                            </div>

                            <div class="form-group">
                                <label for="photo">Foto Produk</label>
                                <input type="file" class="form-control" id="photo" name="photo">
                                @if (isset($product->photo) && !empty($product->photo))
                                    <img src="{{url('image/' . $product->photo) }}" alt="{{ $product->name }}" width="100"
                                        class="mt-2">
                                @else
                                    <img src="{{ url('image/nophoto.jpg') }}" alt="No Foto" width="100" class="mt-2">
                                @endif
                            </div>

                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection