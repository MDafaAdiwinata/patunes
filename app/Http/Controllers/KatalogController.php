<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Kategori;
use App\Models\Product;
use Illuminate\Http\Request;

class KatalogController extends Controller
{
    public function index(Request $request)
    {
        $query = Product::query();

        if ($request->filled('search')) {
            $query->where(function ($q) use ($request) {
                $q->where('nama', 'like', '%' . $request->search . '%')
                    ->orWhere('harga', 'like', '%' . $request->search . '%');
            });
        }


        // Filter kategori
        if ($request->filled('kategori')) {
            $query->where('id_kategori', $request->kategori);
        }

        // Filter brand
        if ($request->filled('brand')) {
            $query->where('id_kategori', $request->brand);
        }

        $products   = $query->get();
        $kategoris  = Kategori::all();
        $brands     = Brand::all();

        return view('katalog', compact('products', 'kategoris', 'brands'));
    }
}
