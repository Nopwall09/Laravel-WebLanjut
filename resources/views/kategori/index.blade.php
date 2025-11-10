@extends('layouts.app')
@section('title', 'Data Kategori')
@section('content')
<div class="container mt-4">
  <h3 class="mb-4">Data Kategori</h3>
  <a href="{{ route('kategori.create') }}" class="btn btn-success mb-3">+ Tambah Kategori</a>

  <table class="table table-bordered table-striped">
    <thead class="table-dark">
      <tr>
        <th>No</th>
        <th>ID</th>
        <th>Nama Kategori</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($dataKategori as $data)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $data->id }}</td>
        <td>{{ $data->nama_kategori }}</td>
        <td>
          <a href="{{ route('kategori.edit', $data->id) }}" class="btn btn-warning btn-sm">Edit</a>
          <form action="{{ route('kategori.destroy', $data->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Yakin ingin menghapus kategori ini?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
