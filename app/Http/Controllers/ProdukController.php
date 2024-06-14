<?php

namespace App\Http\Controllers;

use App\Models\DataProduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProdukController extends Controller
{
    public function store(Request $request)
    {

        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'kode_produk' => 'required|string|max:255',
            'kuantitas' => 'required|integer',
            'harga_beli' => 'required|integer',
            'nama_pemilik' => 'required|string|max:255',
            'harga_jual' => 'required|integer',
            'gambar_produk' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('gambar_produk')) {
            $file = $request->file('gambar_produk');
            $path = $file->storeAs('images', $file->getClientOriginalName(), 'public');
        } else {
            $path = null;
        }

        $product = DataProduk::create([
            'nama_produk' => $request->nama_produk,
            'kode_produk' => $request->kode_produk,
            'kuantitas' => $request->kuantitas,
            'harga_beli' => $request->harga_beli,
            'nama_pemilik' => $request->nama_pemilik,
            'harga_jual' => $request->harga_jual,
            'gambar_produk' => $path,
        ]);

        return redirect()->route('data-produk')->with('success', 'Produk berhasil ditambahkan');
    }

    public function index()
    {
        $products = DataProduk::all();
        return view('content.dataproduk', compact('products'));
    }
}

