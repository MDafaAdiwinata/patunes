<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;

class BerandaController extends Controller
{
    public function index()
    {
        $limitData = 3;
        $brands = Brand::latest()->take($limitData)->get();
        $products = Product::latest()->take($limitData)->get();
        return view('index', compact('brands', 'products'));
    }
}
