<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Kategori;
use App\Models\Product;

class DashboardController extends Controller
{
    public function admin()
    {
        $limitData = 3;

        $totalBrand = Brand::count();
        $totalKategori = Kategori::count();
        $totalProduct = Product::count();

        $products = Product::latest()->take($limitData)->get();
        return view('admin.dashboard', compact('totalBrand', 'totalKategori', 'totalProduct', 'products'));
    }

    public function user()
    {
        return view('user.dashboard');
    }
}
