<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PraktikumController;


use App\Http\Controllers\ProdukController;

Route::get('/tampil-produk', [ProdukController::class, 'index'])->name('produk.index');
Route::get('/tambah-produk', [ProdukController::class, 'create'])->name('produk.create');
Route::post('/simpan-produk', [ProdukController::class, 'store'])->name('produk.store');
Route::get('/edit-produk/{id}', [ProdukController::class, 'edit'])->name('produk.edit');
Route::put('/update-produk/{id}', [ProdukController::class, 'update'])->name('produk.update');
Route::get('/hapus-produk/{id}', [ProdukController::class, 'delete'])->name('produk.delete');
Route::delete('/destroy-produk/{id}', [ProdukController::class, 'destroy'])->name('produk.destroy');






