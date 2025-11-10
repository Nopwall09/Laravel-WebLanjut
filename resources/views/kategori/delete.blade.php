@extends('layouts.app')
@section('title', 'Hapus Produk')
@section('content')
<div class="container mt-4">
  <h3>Hapus Produk</h3>
  <p>Apakah Anda yakin ingin menghapus produk <b>{{ $data->nama_produk }}</b>?</p>
  <form action="{{ route('produk.destroy', $data->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Ya, Hapus</button>
    <a href="{{ route('produk.index') }}" class="btn btn-secondary">Batal</a>
  </form>
</div>
@endsection
