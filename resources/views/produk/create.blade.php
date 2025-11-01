@extends('layouts.app')
@section('title', 'Tambah Produk')
@section('content')
<div class="container mt-4">
  <h3>Tambah Produk Baru</h3>
  <form action="{{ route('produk.store') }}" method="POST">
    @csrf
    <div class="mb-3">
      <label>Nama Produk</label>
      <input type="text" name="nama_produk" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>Harga</label>
      <input type="number" name="harga" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>Stock</label>
      <input type="number" name="stock" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="{{ route('produk.index') }}" class="btn btn-secondary">Kembali</a>
  </form>
</div>
@endsection
