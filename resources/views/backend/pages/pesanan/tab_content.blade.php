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
        @foreach ($pesanan as $pesananItem)
            <tr>
                <td>{{ $pesananItem->created_at ? $pesananItem->created_at->format('d-m-Y') : '-' }}</td>
                <td>{{ $pesananItem->name }}</td>
                <td>{{ $pesananItem->total_price }}</td>
                <td>{{ $pesananItem->status }}</td>
                <td>
                    <a href="{{ route('pesanan.show', $pesananItem->id) }}" class="btn btn-info btn-sm">Detail</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>