@extends('layouts.app')
@section('title', 'Edit Kategori')
@section('content')
<div class="container mt-4">
  <h3>Edit Kategori</h3>
  <form action="{{ route('kategori.update', $data->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label>Nama Kategori</label>
      <input type="text" name="nama_kategori" class="form-control" value="{{ $data->nama_kategori }}" required>
    </div>
    <button type="submit" class="btn btn-success">Update</button>
    <a href="{{ route('kategori.index') }}" class="btn btn-secondary">Kembali</a>
  </form>
</div>
@endsection
