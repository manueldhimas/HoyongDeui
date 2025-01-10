@extends('backend.layouts.app')

@section('title', 'Edit Pelanggan')

@section('content')

<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <h3>Edit Pelanggan</h3>
    </div>

    <div class="page-content">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('pelanggan.update', $pelanggan->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Pelanggan</label>
                                <input type="text" class="form-control" id="nama" name="nama"
                                    value="{{ $pelanggan->nama }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="lokasi" class="form-label">Lokasi</label>
                                <input type="text" class="form-control" id="lokasi" name="lokasi"
                                    value="{{ $pelanggan->lokasi }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="pesanan" class="form-label">Pesanan</label>
                                <textarea class="form-control" id="pesanan" name="pesanan" required>{{ $pelanggan->pesanan }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="tagihan_pesanan" class="form-label">Tagihan Pesanan</label>
                                <input type="number" class="form-control" id="tagihan_pesanan" name="tagihan_pesanan"
                                    value="{{ $pelanggan->tagihan_pesanan }}" required min="0" step="0.01">
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
