<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Kategori;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function index(Request $request)
    {
        /** @var User $user */
        $user = Auth::user();

        $query = $user->wishlists();

        if ($request->filled('search')) {
            $query->where(function ($q) use ($request) {
                $q->where('nama', 'like', '%' . $request->search . '%')
                    ->orWhere('harga', 'like', '%' . $request->search . '%')
                    ->orWhere('deskripsi', 'like', '%' . $request->search . '%');
            });
        }

        if ($request->filled('kategori')) {
            $query->where('id_kategori', $request->kategori);
        }

        if ($request->filled('brand')) {
            $query->where('id_brand', $request->brand);
        }

        $products  = $query->get();
        $kategoris = Kategori::all();
        $brands    = Brand::all();

        return view('user.wishlist', compact('products', 'kategoris', 'brands'));
    }

    public function toggle(Product $product)
    {
        /** @var User $user */
        $user = Auth::user();

        $user->wishlists()->toggle($product->id_product);

        return back();
    }
}
