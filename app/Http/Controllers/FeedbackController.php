<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index(Request $request)
    {
        $query = Feedback::query();

        if ($request->filled('search')) {
            $query->where(function ($q) use ($request) {
                $q->where('nama_lengkap', 'like', '%' . $request->search . '%')
                    ->orWhere('email', 'like', '%' . $request->search . '%')
                    ->orWhere('subjek', 'like', '%' . $request->search . '%')
                    ->orWhere('pesan', 'like', '%' . $request->search . '%');
            });
        }

        $feedbacks   = $query->latest()->get();

        return view('admin.kelola-feedback', compact('feedbacks'));
    }

    public function create()
    {
        return view('feedback');
    }

    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'nama_lengkap'   => 'required|string|max:100',
                'email'  => 'required|string|email|max:255',
                'subjek' => 'required|string|max:100',
                'pesan'  => 'required|string',
            ],
            [
                // Nama
                'nama_lengkap.required' => 'Nama Lengkap wajib diisi.',
                'nama_lengkap.string'   => 'Nama Lengkap harus berupa teks.',
                'nama_lengkap.max'      => 'Nama Lengkap maksimal 100 karakter.',

                // Email
                'email.required' => 'Email wajib diisi.',
                'email.email'    => 'Format email tidak valid.',
                'email.string'   => 'Email harus berupa teks.',
                'email.max'      => 'Email maksimal 255 karakter.',

                // Subjek
                'subjek.required' => 'Subjek wajib diisi.',
                'subjek.string'   => 'Subjek harus berupa teks.',
                'subjek.max'      => 'Subjek maksimal 100 karakter.',

                // Pesan
                'pesan.required' => 'Pesan wajib diisi.',
                'pesan.string'   => 'Pesan harus berupa teks.',
            ]
        );

        Feedback::create($validated);

        return redirect()
            ->route('feedback')
            ->with('success', 'Feedback kamu berhasil dikirim, makasih yaa! 🥳');
    }

    public function destroy(Feedback $feedback)
    {
        $feedback->delete();
        return redirect()->route('admin.kelola-feedback')->with('success', 'Data feedback berhasil dihapus! 🥳.');
    }
}
