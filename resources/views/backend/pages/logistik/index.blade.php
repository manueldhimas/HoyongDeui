@extends('backend.layouts.app')

@section('title', 'Logistik')

@section('content')

<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <h3>Logistik</h3>
    </div>

    <div class="page-content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>List Logistik</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID Pesanan</th>
                                        <th>Status Pengiriman</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($logistik as $logistik)
                                    <tr>
                                        <td>{{ $logistik->pesanan_id }}</td>
                                        <td>{{ $logistik->status_pengiriman }}</td>
                                        <td>
                                            <a href="{{ route('logistik.show', $logistik->id) }}" class="btn btn-info btn-sm">Detail</a>
                                            <a href="{{ route('logistik.edit', $logistik->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                            <form action="{{ route('logistik.destroy', $logistik->id) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus logistik ini?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
