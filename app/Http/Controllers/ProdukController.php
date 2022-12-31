<?php

namespace App\Http\Controllers;

use App\Models\Category_product;
use App\Models\Product;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function data_produk()
    {
        $produk = Product::get();
        return view('pages.produk.data-produk', compact('produk'));
    }

    public function tambah_produk()
    {
        $kategori_produk = Category_product::get();
        return view('pages.produk.tambah-produk', compact('kategori_produk'));
    }

    public function store(Request $request)
    {
        // Eloquent type
        Product::create($request->all());
        return redirect()->route('data.produk');
    }

    public function edit_produk($id)
    {
        $produk = Product::find($id);
        $kategori_produk = Category_product::get();
        return view('pages.produk.edit-produk', compact('produk', 'kategori_produk'));
    }

    public function update_produk(Request $request, $id)
    {
        // Eloquent type
        $produk = Product::find($id);
        $produk->update($request->all());
        return redirect()->route('data.produk');
    }

    public function destroy_produk(Request $request, $id)
    {
        // Eloquent type
        $pegawai = Product::find($id);
        $pegawai->delete();
        return redirect()->route('data.produk');
    }

    public function kategori_produk()
    {
        $kategori_produk = Category_product::get();
        return view('pages.kategori-produk.data-kategori-produk', compact('kategori_produk'));
    }

    public function tambah_kategori_produk()
    {
        $kategori_produk = Category_product::get();
        return view('pages.kategori-produk.tambah-kategori-produk', compact('kategori_produk'));
    }

    public function store_kategori_produk(Request $request)
    {
        // Eloquent type
        Category_product::create($request->all());
        return redirect()->route('kategori.produk');
    }

    public function edit_kategori_produk($id)
    {
        $kategori_produk = Category_product::find($id);
        return view('pages.kategori-produk.edit-kategori-produk', compact('kategori_produk'));
    }

    public function update_kategori_produk(Request $request, $id)
    {
        // Eloquent type
        $kategori_produk = Category_product::find($id);
        $kategori_produk->update($request->all());
        return redirect()->route('kategori.produk');
    }

    public function destroy_kategori_produk(Request $request, $id)
    {
        // Eloquent type
        $kategori_pegawai = Category_product::find($id);
        $kategori_pegawai->delete();
        return redirect()->route('kategori.produk');
    }
}