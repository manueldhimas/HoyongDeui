<!-- resources/views/backend/pages/pesanan/tab_content.blade.php -->
<table class="table table-striped">
    <thead>
        <tr>
            <th>Tanggal</th>
            <th>Nama Pesanan</th>
            <th>Total Harga</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pesanans as $pesanan)
        <tr>
            <td>{{ $pesanan->tanggal }}</td>
            <td>{{ $pesanan->nama_pesanan }}</td>
            <td>{{ $pesanan->total_harga }}</td>
            <td>{{ $pesanan->status }}</td>
            <td>
                <a href="{{ route('pesanan.show', $pesanan->id) }}" class="btn btn-info btn-sm">Detail</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
