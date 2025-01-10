@extends('backend.layouts.app')
@section('title', 'Produk')
@section('content')
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <h3>Daftar Produk</h3>
    </div>

    <div class="page-content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Daftar Produk</h4>
                        <div class="card-header-action">
                            <a href="{{ route('products.create') }}" class="btn btn-primary">Tambah Produk</a>
                        </div>
                    </div>
                    @if ($products->isEmpty())
                        <div class="card-body">
                            <p class="text-muted">Tidak ada data produk.</p>
                        </div>
                    @else
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama</th>
                                            <th>Stok</th>
                                            <th>Harga</th>
                                            <th>Status</th>
                                            <th>SKU</th>
                                            <th>Foto</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $product)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $product->name }}</td>
                                                <td>{{ $product->stock }}</td>
                                                <td>{{ $product->price }}</td>
                                                <td>{{ $product->status }}</td>
                                                <td>{{ $product->sku }}</td>
                                                <td>
                                                    @if ($product->photo)
                                                        <img src="{{url('image')}}/{{ $product->photo }}" alt="{{ $product->name }}"
                                                            width="50">
                                                    @else
                                                        <img src="{{url('image/nophoto.jpg')}}" alt="{{ $product->name }}"
                                                            width="50">
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{ route('products.show', $product) }}"
                                                        class="btn btn-info btn-sm">Detail</a>
                                                    <a href="{{ route('products.edit', $product) }}"
                                                        class="btn btn-primary btn-sm">Edit</a>
                                                    <form action="{{ route('products.destroy', $product) }}" method="POST"
                                                        class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm"
                                                            onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">Hapus</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection