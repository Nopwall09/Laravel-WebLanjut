<?php

namespace App\Http\Controllers;

use App\Exports\ProdukExport;
use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Kategori;
use Maatwebsite\Excel\Facades\Excel;   // ✔ INI YANG HARUS DIPAKAI

class ProdukController extends Controller
{
    public function index()
    {
        $data = Produk::with('kategori')->get(); 
        $kategori = Kategori::all(); 
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
            $message = [
                'required' => ':attribute tidak boleh kosong',
                'unique' => ':attribute sudah digunakan',
                'numeric' => ':attribute harus berupa angka',
            ];
        
            $validatedData = $request->validate([
                // 'id' => 'required|numeric|unique:produk',
                'nama_produk' => 'required|unique:produk',
            ], $message);
            
            $data = new Produk();
            $data->nama_produk = $request->nama_produk;
            $data->harga = $request->harga;
            $data->stock = $request->stock;
            $data->kategori_id = $request->kategori_id; 
            $data->save();

            return redirect('/tampil-produk')->with('success','Data berhasil ');
        }

    public function update(Request $request, $id)
    {
        $produk = Produk::findOrFail($id);
        $produk->nama_produk = $request->nama_produk;
        $produk->harga = $request->harga;
        $produk->stock = $request->stock;
        $produk->kategori_id = $request->kategori_id; 
        $produk->update();

        return redirect('/tampil-produk')->with('success','Data berhasil dirubah');
    }

    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);
        $produk->delete();

        return redirect('/tampil-produk')->with('success','Data berhasil dihapus');
    }

    public function excel(){
        return Excel::download(new ProdukExport, 'produk.xlsx');  
    }

    public function pdf(){
        $data = Produk::all();
        return view('produk.pdf', ['dataProduk' => $data]);        // ✔ perbaikan array
    }

    public function chart(){
        $datalabel = Produk::orderBy('nama_produk', 'asc')->pluck('nama_produk')->toArray();
        $datastock = Produk::orderBy('nama_produk', 'asc')->pluck('stock')->toArray();
        return view('produk.chart', compact('datalabel', 'datastock'));
    }
}
