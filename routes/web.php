<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriController;

// PRODUK
Route::get('/tampil-produk', [ProdukController::class, 'index'])->name('produk.index');
Route::get('/tambah-produk', [ProdukController::class, 'create'])->name('produk.create');
Route::post('/simpan-produk', [ProdukController::class, 'store'])->name('produk.store');
Route::get('/edit-produk/{id}', [ProdukController::class, 'edit'])->name('produk.edit');
Route::put('/update-produk/{id}', [ProdukController::class, 'update'])->name('produk.update');
Route::delete('/hapus-produk/{id}', [ProdukController::class, 'destroy'])->name('produk.destroy');

// KATEGORI
Route::get('/tampil-kategori', [KategoriController::class, 'index'])->name('kategori.index');
Route::get('/tambah-kategori', [KategoriController::class, 'create'])->name('kategori.create');
Route::post('/simpan-kategori', [KategoriController::class, 'store'])->name('kategori.store');
Route::get('/edit-kategori/{id}', [KategoriController::class, 'edit'])->name('kategori.edit');
Route::put('/update-kategori/{id}', [KategoriController::class, 'update'])->name('kategori.update');
Route::delete('/hapus-kategori/{id}', [KategoriController::class, 'destroy'])->name('kategori.destroy');
