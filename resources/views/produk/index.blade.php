@extends('layouts.app')
@section('title', 'Data Produk')

@section('content')
<div class="container mt-4">
  <h3 class="mb-4">Data Produk</h3>
  <a href="{{ route('produk.create') }}" class="btn btn-success mb-3">+ Tambah Produk</a>

  <table class="table table-bordered table-striped">
    <thead class="table-dark text-center">
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
      @forelse ($dataProduk as $data)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $data->id }}</td>
        <td>{{ $data->nama_produk }}</td>
        <td>Rp{{ number_format($data->harga, 0, ',', '.') }}</td>
        <td>{{ $data->stock }}</td>
        <td class="text-center">
          <a href="{{ route('produk.edit', $data->id) }}" class="btn btn-warning btn-sm">Edit</a>
          <form action="{{ route('produk.destroy', $data->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Yakin ingin menghapus produk ini?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
          </form>
        </td>
      </tr>
      @empty
      <tr>
        <td colspan="6" class="text-center">Tidak ada data produk</td>
      </tr>
      @endforelse
    </tbody>
  </table>
</div>
@endsection
