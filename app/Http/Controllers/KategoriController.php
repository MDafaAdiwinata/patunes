<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    public function index(Request $request)
    {
        $query = Kategori::query();

        if ($request->filled('search')) {
            $query->where(function ($q) use ($request) {
                $q->where('nama', 'like', '%' . $request->search . '%')
                    ->orWhere('deskripsi', 'like', '%' . $request->search . '%');
            });
        }

        $kategoris   = $query->latest()->get();

        return view('admin.kelola-kategori', compact('kategoris'));
    }

    public function create()
    {
        return view('admin.kategori.create');
    }

    public function edit(Kategori $kategori)
    {
        return view('admin.kategori.edit', compact('kategori'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:100',
            'deskripsi' => 'required',
        ]);

        Kategori::create($validated);

        return redirect()
            ->route('admin.kelola-kategori')
            ->with('success', 'Kategori Berhasil ditambahkan! 🥳');
    }

    public function update(Request $request, Kategori $kategori)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:100',
            'deskripsi' => 'nullable|string',
        ]);

        // Update data brand
        $kategori->update($validated);

        return redirect()
            ->route('admin.kelola-kategori')
            ->with('success', 'Kategori berhasil diperbarui! 🚀');
    }

    public function destroy(Kategori $kategori)
    {
        $kategori->delete();
        return redirect()->route('admin.kelola-kategori')->with('success', 'Data Kategori berhasil dihapus! 🥳.');
    }
}
