@extends('backend.layouts.app')

@section('title', 'Detail Pelanggan')

@section('content')

<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <h3>Detail Pelanggan</h3>
    </div>

    <div class="page-content">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Nama Pelanggan</h5>
                        <p class="card-text">{{ $pelanggan->nama }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Lokasi</h5>
                        <p class="card-text">{{ $pelanggan->lokasi }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Pesanan</h5>
                        <p class="card-text">{{ $pelanggan->pesanan }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tagihan Pesanan</h5>
                        <p class="card-text">{{ $pelanggan->tagihan_pesanan }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
