<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriController;

// PRODUK
Route::get('tampil-produk', [ProdukController::class, 'index']);
Route::get('tambah-produk', [ProdukController::class,'create'])->name('produk.create');
Route::post('tampil-produk',[ProdukController::class,'store'])->name('produk.store');
Route::put('/produk/update/{id}',[ProdukController::class,'update'])->name('produk.update');
Route::delete('/produk/{id}', [ProdukController::class, 'destroy'])->name('produk.destroy');

// KATEGORI
Route::get('tampil-kategori', [KategoriController::class, 'index']);
Route::get('tambah-kategori', [KategoriController::class,'create'])->name('kategori.create');
Route::post('tampil-kategori',[KategoriController::class,'store'])->name('kategori.store');
Route::put('/kategori/update/{id}',[KategoriController::class,'update'])->name('kategori.update');
Route::delete('/kategori/{id}', [KategoriController::class, 'destroy'])->name('kategori.destroy');
