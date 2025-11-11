<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Kategori;

class ProdukController extends Controller
{
    public function index()
    {
        $data = Produk::with('kategori')->get(); // Eager loading relasi
        $kategori = Kategori::all(); // Untuk dropdown di modal create
        return view('produk.index', [
            'dataProduk' => $data,
            'kategori' => $kategori
        ]);
    }

    public function create()
    {
        $kategori = Kategori::all();
        return view('produk.create', compact('kategori'));
    }

    public function store(Request $request)
    {
        $data = new Produk();
        $data->nama_produk = $request->nama_produk;
        $data->harga = $request->harga;
        $data->stock = $request->stock;
        $data->kategori_id = $request->kategori_id; // ✅ relasi kategori
        $data->save();

        return redirect('/tampil-produk');
    }

    public function update(Request $request, $id)
    {
        $produk = Produk::findOrFail($id);
        $produk->nama_produk = $request->nama_produk;
        $produk->harga = $request->harga;
        $produk->stock = $request->stock;
        $produk->kategori_id = $request->kategori_id; // ✅ update relasi
        $produk->update();

        return redirect('/tampil-produk');
    }

    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);
        $produk->delete();

        return redirect('/tampil-produk');
    }
}
