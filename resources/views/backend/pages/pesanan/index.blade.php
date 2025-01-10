@extends('backend.layouts.app')

@section('title', 'Pesanan')

@section('content')

<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <h3>Pesanan</h3>
    </div>

    <div class="page-content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>List Pesanan</h4>
                        <div class="card-header-action">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="all-tab" data-bs-toggle="tab" href="#all" role="tab">All</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="selesai-tab" data-bs-toggle="tab" href="#selesai" role="tab">Selesai</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tunggu-tab" data-bs-toggle="tab" href="#tunggu" role="tab">Tunggu</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tolak-tab" data-bs-toggle="tab" href="#tolak" role="tab">Tolak</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="all" role="tabpanel">
                                @include('backend.pages.pesanan.tab_content', ['pesanans' => $allPesanan])
                            </div>
                            <div class="tab-pane fade" id="selesai" role="tabpanel">
                                @include('backend.pages.pesanan.tab_content', ['pesanans' => $selesaiPesanan])
                            </div>
                            <div class="tab-pane fade" id="tunggu" role="tabpanel">
                                @include('backend.pages.pesanan.tab_content', ['pesanans' => $tungguPesanan])
                            </div>
                            <div class="tab-pane fade" id="tolak" role="tabpanel">
                                @include('backend.pages.pesanan.tab_content', ['pesanans' => $tolakPesanan])
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
