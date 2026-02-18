<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Kategori;
use App\Models\Product;
use Illuminate\Http\Request;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $query = Product::query();

        if ($request->filled('search')) {
            $query->where(function ($q) use ($request) {
                $q->where('nama', 'like', '%' . $request->search . '%')
                    ->orWhere('deskripsi', 'like', '%' . $request->search . '%')
                    ->orWhere('harga', 'like', '%' . $request->search . '%');
            });
        }

        $products   = $query->latest()->get();

        return view('admin.kelola-product', compact('products'));
    }

    public function indexUser(Request $request)
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
            $query->where('id_brand', $request->brand);
        }

        $products   = $query->get();
        $kategoris  = Kategori::all();
        $brands     = Brand::all();

        return view('user.user-katalog', compact('products', 'kategoris', 'brands'));
    }

    public function detail(Product $product)
    {
        return view('user.product.detail', compact('product'));
    }

    public function create()
    {
        $brands = Brand::all();
        $kategoris = Kategori::all();
        return view('admin.product.create', compact('brands', 'kategoris'));
    }

    public function edit(Product $product)
    {
        $brands = Brand::all();
        $kategoris = Kategori::all();
        return view('admin.product.edit', compact('product', 'brands', 'kategoris'));
    }

    public function store(Request $request)
    {
        // dd($request);
        $validated = $request->validate([
            'nama' => 'required|string|max:100',
            'harga' => 'required|numeric|min:0',
            'deskripsi' => 'nullable|string',
            'gambar' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'id_brand' => 'required|exists:brand,id_brand',
            'id_kategori' => 'required|exists:kategori,id_kategori',
        ]);

        // Upload ke Cloudinary
        if ($request->hasFile('gambar')) {

            $uploadedFile = Cloudinary::uploadApi()->upload(
                $request->file('gambar')->getRealPath(),
                [
                    'folder' => 'products-patunes'
                ]
            );

            $validated['gambar'] = $uploadedFile['secure_url'];
            $validated['image_public_id'] = $uploadedFile['public_id'];
        }

        Product::create($validated);

        return redirect()
            ->route('admin.kelola-product')
            ->with('success', 'Product berhasil ditambahkan! 🚀');
    }

    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:100',
            'harga' => 'required|numeric|min:0',
            'deskripsi' => 'nullable|string',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'id_brand' => 'required|exists:brand,id_brand',
            'id_kategori' => 'required|exists:kategori,id_kategori',
        ]);

        // Jika upload logo baru
        if ($request->hasFile('gambar')) {

            // Hapus logo lama dari Cloudinary (jika ada)
            if ($product->image_public_id) {
                Cloudinary::uploadApi()->destroy($product->image_public_id);
            }

            // Upload logo baru
            $uploadedFile = Cloudinary::uploadApi()->upload(
                $request->file('gambar')->getRealPath(),
                [
                    'folder' => 'products-patunes'
                ]
            );

            $validated['gambar'] = $uploadedFile['secure_url'];
            $validated['image_public_id'] = $uploadedFile['public_id'];
        }

        $product->update($validated);

        return redirect()
            ->route('admin.kelola-product')
            ->with('success', 'Product berhasil diperbarui! ✨');
    }

    public function destroy(Product $product)
    {
        if ($product->image_public_id) {
            Cloudinary::uploadApi()->destroy($product->image_public_id);
        }

        $product->delete();

        return redirect()
            ->route('admin.kelola-product')
            ->with('success', 'Product berhasil dihapus! 🗑️');
    }
}
