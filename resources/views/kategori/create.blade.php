@extends('layouts.app')
@section('title', 'Tambah Kategori')
@section('content')
<div class="container mt-4">
  <h3>Tambah Kategori Baru</h3>
  <form action="{{ route('kategori.store') }}" method="POST">
    @csrf
    <div class="mb-3">
      <label>Nama Kategori</label>
      <input type="text" name="nama_kategori" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="{{ route('kategori.index') }}" class="btn btn-secondary">Kembali</a>
  </form>
</div>
@endsection
