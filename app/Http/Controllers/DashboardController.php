<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Kategori;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\User;

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
        /** @var User $user */
        $user = Auth::user();
        $query = $user->wishlists();
        $products  = $query->get()->take(3);
        return view('user.dashboard', compact('products'));
    }
}
