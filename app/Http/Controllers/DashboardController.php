<?php

namespace App\Http\Controllers;

use App\Models\Category_product;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $countPelanggan = User::where('role', 0)->count();
        $countPegawai = User::where('role', 1)->count();
        $countProduk = Product::count();
        $kategoriProduk = Category_product::count();
        return view('pages.dashboard', compact('countPelanggan', 'countPegawai', 'countProduk', 'kategoriProduk'));
    }
}