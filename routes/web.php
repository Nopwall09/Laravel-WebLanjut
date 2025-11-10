<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;

Route::get('tampil-produk', [ProdukController::class, 'index']);
Route::get('tambah-produk', [ProdukController::class,'create'])->name('produk.create');

//simpan data produk
Route::post('tampil-produk',[ProdukController::class,'store'])->name('produk.store');

//update
Route::put('/produk/update/{id}',[ProdukController::class,'update'])->name('produk.update');

//Delete
Route::delete('/produk/{id}', [ProdukController::class, 'destroy'])->name('produk.destroy');