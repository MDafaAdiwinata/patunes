<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BrandController extends Controller
{
    public function index(Request $request)
    {
        $query = Brand::query();

        if ($request->filled('search')) {
            $query->where(function ($q) use ($request) {
                $q->where('nama', 'like', '%' . $request->search . '%')
                    ->orWhere('tagline', 'like', '%' . $request->search . '%')
                    ->orWhere('deskripsi', 'like', '%' . $request->search . '%')
                    ->orWhere('url', 'like', '%' . $request->search . '%');
            });
        }

        $brands   = $query->latest()->get();

        return view('admin.kelola-brand', compact('brands'));
    }

    public function create()
    {
        return view('admin.brand.create');
    }

    public function edit(Brand $brand)
    {
        return view('admin.brand.edit', compact('brand'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:100',
            'tagline' => 'required|string|max:50',
            'url' => 'required',
            'deskripsi' => 'required',
            'logo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);
        // upload ke cloudinary
        if ($request->hasFile('logo')) {

            $path = Storage::disk('cloudinary')->put(
                'brands',
                $request->file('logo')
            );

            $validated['logo'] = $path;
            $validated['image_public_id'] = $path;
        }

        Brand::create($validated);

        return redirect()
            ->route('admin.kelola-brand')
            ->with('success', 'Brand Berhasil ditambahkan! 🥳');
    }

    public function update(Request $request, Brand $brand)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:100',
            'tagline' => 'required|string|max:50',
            'deskripsi' => 'nullable|string',
            'url' => 'required|string',
            'logo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Jika upload logo baru
        if ($request->hasFile('logo')) {

            // 🔥 Hapus gambar lama dari Cloudinary (jika ada)
            if ($brand->image_public_id) {
                Storage::disk('cloudinary')->delete($brand->image_public_id);
            }

            // Upload gambar baru
            $path = Storage::disk('cloudinary')->put(
                'brands',
                $request->file('logo')
            );

            $validated['logo'] = $path;
            $validated['image_public_id'] = $path;
        }

        // Update data brand
        $brand->update($validated);

        return redirect()
            ->route('admin.kelola-brand')
            ->with('success', 'Brand berhasil diperbarui! 🚀');
    }

    public function destroy(Brand $brand)
    {

        // Jika image ada, maka hapus
        if ($brand->logo) {
            if (Storage::disk('public')->exists($brand->logo)) {
                Storage::disk('public')->delete($brand->logo);
            }
        }

        $brand->delete();
        return redirect()->route('admin.kelola-brand')->with('success', 'Data Brand berhasil dihapus! 🥳.');
    }
}
