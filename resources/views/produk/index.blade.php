<!DOCTYPE html>
<html>
<head>
    <title>Data Produk</title>
</head>
<body>
    <h2>Data Produk</h2>
    <a href="{{ route('produk.create') }}">+ New Data</a>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Stock</th>
            <th>Aksi</th>
        </tr>
        @foreach($dataProduk as $data)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $data->nama_produk }}</td>
            <td>Rp {{ number_format($data->harga) }}</td>
            <td>{{ $data->stock }}</td>
            <td>
                <a href="{{ url('edit-produk/'.$data->id) }}">Edit</a> |
                <a href="{{ url('hapus-produk/'.$data->id) }}">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
