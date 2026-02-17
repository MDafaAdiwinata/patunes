<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\KatalogController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TerbaruController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [BerandaController::class, 'index'])->name('index');
Route::get('/terbaru', [TerbaruController::class, 'index'])->name('terbaru');
Route::get('/katalog', [KatalogController::class, 'index'])->name('katalog');

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/dashboard', function () {
    $user = Auth::user();
    if ($user->role === 'admin') {
        return redirect()->route('admin.dashboard');
    }
    return redirect()->route('user.dashboard');
})->name('dashboard');

Route::middleware(['auth', 'verified'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'admin'])->name('admin.dashboard');
    Route::get('/kelola-brand', function () {
        return view('admin.kelola-brand');
    })->name('admin.kelola-brand');
    Route::get('/kelola-kategori', function () {
        return view('admin.kelola-kategori');
    })->name('admin.kelola-kategori');
    Route::get('/kelola-produk', function () {
        return view('admin.kelola-produk');
    })->name('admin.kelola-produk');
    Route::get('/kelola-feedback', function () {
        return view('admin.kelola-feedback');
    })->name('admin.kelola-feedback');
    // CRUD Products
    // Route::resource('products', ProductController::class);
});

// role->user
Route::middleware(['auth', 'verified'])->prefix('user')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'user'])->name('user.dashboard');

    Route::get('/katalog', function () {
        return view('user.katalog');
    })->name('user.katalog');
    Route::get('/wishlist', function () {
        return view('user.wishlist');
    })->name('user.wishlist');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
