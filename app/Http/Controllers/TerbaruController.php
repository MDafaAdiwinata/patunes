<?php

namespace App\Http\Controllers;

use App\Models\Product;

class TerbaruController extends Controller
{
    public function index()
    {
        $limitData = 3;
        $products = Product::latest()->take($limitData)->get();
        return view('terbaru', compact('products'));
    }
}
