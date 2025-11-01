<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    public function index() {
        $data = Produk::all();
        return view('produk.index', ['dataProduk' => $data]);
    }

    public function create() {
        return view('produk.create');
    }

    public function store(Request $request) {
        $produk = new Produk();
        $produk->nama_produk = $request->nama_produk;
        $produk->harga = $request->harga;
        $produk->stock = $request->stock;
        $produk->save();
        return redirect()->route('produk.index');
    }

    public function edit($id) {
        $data = Produk::findOrFail($id);
        return view('produk.edit', ['data' => $data]);
    }

    public function update(Request $request, $id) {
        $produk = Produk::findOrFail($id);
        $produk->nama_produk = $request->nama_produk;
        $produk->harga = $request->harga;
        $produk->stock = $request->stock;
        $produk->save();
        return redirect()->route('produk.index');
    }

    public function delete($id) {
        $data = Produk::findOrFail($id);
        return view('produk.delete', ['data' => $data]);
    }

    public function destroy($id) {
        $produk = Produk::findOrFail($id);
        $produk->delete();
        return redirect()->route('produk.index');
    }
}
