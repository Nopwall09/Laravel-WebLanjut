<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    public function index()
    {
        $data = Produk::all();
        return view('produk.index', ['dataProduk' => $data]);
    }

    public function create()
    {
        return view('produk.create');
    }

    public function store(Request $request)
    {
        Produk::create([
            'nama_produk' => $request->nama_produk,
            'harga' => $request->harga,
            'stock' => $request->stock,
        ]);

        return redirect()->route('produk.index');
    }

    public function edit($id)
    {
        $data = Produk::findOrFail($id);
        return view('produk.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $produk = Produk::findOrFail($id);
        $produk->update([
            'nama_produk' => $request->nama_produk,
            'harga' => $request->harga,
            'stock' => $request->stock,
        ]);

        return redirect()->route('produk.index');
    }

    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);
        $produk->delete();

        return redirect()->route('produk.index');
    }
}
