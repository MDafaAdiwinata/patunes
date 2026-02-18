<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Kategori;
use App\Models\Product;
use Illuminate\Http\Request;
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

            $path = Storage::disk('cloudinary')->put(
                'products',
                $request->file('gambar')
            );

            $validated['gambar'] = $path;
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

        if ($request->hasFile('gambar')) {

            // Hapus gambar lama dari Cloudinary
            if ($product->gambar) {
                Storage::disk('cloudinary')->delete($product->gambar);
            }

            // Upload gambar baru
            $path = Storage::disk('cloudinary')->put(
                'products',
                $request->file('gambar')
            );

            $validated['gambar'] = $path;
        }

        $product->update($validated);

        return redirect()
            ->route('admin.kelola-product')
            ->with('success', 'Product berhasil diperbarui! ✨');
    }

    public function destroy(Product $product)
    {
        // Hapus gambar dari Cloudinary
        if ($product->gambar) {
            Storage::disk('cloudinary')->delete($product->gambar);
        }

        $product->delete();

        return redirect()
            ->route('admin.kelola-product')
            ->with('success', 'Product berhasil dihapus! 🗑️');
    }
}
