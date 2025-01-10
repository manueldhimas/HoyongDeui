@extends('backend.layouts.app')

@section('title', 'Tambah Pelanggan')

@section('content')
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <h3>Tambah Pelanggan</h3>
    </div>

    <div class="page-content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Form Tambah Pelanggan</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('pelanggan.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Pelanggan</label>
                                <input type="text" class="form-control" id="nama" name="nama" required>
                            </div>
                            <div class="mb-3">
                                <label for="lokasi" class="form-label">Lokasi</label>
                                <input type="text" class="form-control" id="lokasi" name="lokasi" required>
                            </div>
                            <div class="mb-3">
                                <label for="pesanan" class="form-label">Pesanan</label>
                                <textarea class="form-control" id="pesanan" name="pesanan" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="tagihan_pesanan" class="form-label">Tagihan Pesanan</label>
                                <input type="number" class="form-control" id="tagihan_pesanan" name="tagihan_pesanan" required min="0" step="0.01">
                            </div>
                            <button type="submit" class="btn btn-primary">Tambah Pelanggan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
