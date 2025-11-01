@extends('layouts.app')
@section('title', 'Data Produk')
@section('content')
<div class="container mt-4">
  <h3 class="mb-4">Data Produk</h3>
  <a href="{{ route('produk.create') }}" class="btn btn-success mb-3">+ Tambah Produk</a>

  <table class="table table-bordered table-striped">
    <thead class="table-dark">
      <tr>
        <th>No</th>
        <th>ID Produk</th>
        <th>Nama Produk</th>
        <th>Harga</th>
        <th>Stock</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($dataProduk as $data)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $data->id }}</td>
        <td>{{ $data->nama_produk }}</td>
        <td>{{ number_format($data->harga,0,',','.') }}</td>
        <td>{{ $data->stock }}</td>
        <td>
          <a href="{{ route('produk.edit', $data->id) }}" class="btn btn-warning btn-sm">Edit</a>
          <a href="{{ route('produk.delete', $data->id) }}" class="btn btn-danger btn-sm">Hapus</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
