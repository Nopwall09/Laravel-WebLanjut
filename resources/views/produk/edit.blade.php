@extends('layouts.app')
@section('title', 'Edit Produk')
@section('content')
<div class="container mt-4">
  <h3>Edit Produk</h3>
  <form action="{{ route('produk.update', $data->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label>Nama Produk</label>
      <input type="text" name="nama_produk" class="form-control" value="{{ $data->nama_produk }}" required>
    </div>
    <div class="mb-3">
      <label>Harga</label>
      <input type="number" name="harga" class="form-control" value="{{ $data->harga }}" required>
    </div>
    <div class="mb-3">
      <label>Stock</label>
      <input type="number" name="stock" class="form-control" value="{{ $data->stock }}" required>
    </div>
    <button type="submit" class="btn btn-success">Update</button>
    <a href="{{ route('produk.index') }}" class="btn btn-secondary">Kembali</a>
  </form>
</div>
@endsection
