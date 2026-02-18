<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LpKatalogController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TerbaruController;
use App\Http\Controllers\WishlistController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [BerandaController::class, 'index'])->name('index');
Route::get('/terbaru', [TerbaruController::class, 'index'])->name('terbaru');
Route::get('/katalog', [LpKatalogController::class, 'index'])->name('katalog');
Route::get('katalog/{product}/detail', [LpKatalogController::class, 'detail'])->name('katalog.detail');

Route::get('feedback', [FeedbackController::class, 'create'])->name('feedback');
Route::post('feedback', [FeedbackController::class, 'store'])->name('feedback.store');

Route::get('/dashboard', function () {
    $user = Auth::user();
    if ($user->role === 'admin') {
        return redirect()->route('admin.dashboard');
    }
    return redirect()->route('user.dashboard');
})->name('dashboard');

Route::middleware(['auth', 'verified'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'admin'])->name('admin.dashboard');

    // CRUD Kelola Brand
    Route::get('/kelola-brand', [BrandController::class, 'index'])->name('admin.kelola-brand');
    Route::get('brand/create', [BrandController::class, 'create'])->name('admin.brand.create');
    Route::post('brand', [BrandController::class, 'store'])->name('brand.store');
    Route::get('brand/{brand}/edit', [BrandController::class, 'edit'])->name('admin.brand.edit');
    Route::put('brand/{brand}', [BrandController::class, 'update'])->name('admin.brand.update');
    Route::delete('brand/{brand}', [BrandController::class, 'destroy'])->name('admin.brand.destroy');

    // CRUD Kelola Kategori
    Route::get('/kelola-kategori', [KategoriController::class, 'index'])->name('admin.kelola-kategori');
    Route::get('kategori/create', [KategoriController::class, 'create'])->name('admin.kategori.create');
    Route::post('kategori', [KategoriController::class, 'store'])->name('kategori.store');
    Route::get('kategori/{kategori}/edit', [KategoriController::class, 'edit'])->name('admin.kategori.edit');
    Route::put('kategori/{kategori}', [KategoriController::class, 'update'])->name('admin.kategori.update');
    Route::delete('kategori/{kategori}', [KategoriController::class, 'destroy'])->name('admin.kategori.destroy');

    // CRUD Kelola Kategori
    Route::get('/kelola-product', [ProductController::class, 'index'])->name('admin.kelola-product');
    Route::get('product/create', [ProductController::class, 'create'])->name('admin.product.create');
    Route::post('product', [ProductController::class, 'store'])->name('product.store');
    Route::get('product/{product}/edit', [ProductController::class, 'edit'])->name('admin.product.edit');
    Route::put('product/{product}', [ProductController::class, 'update'])->name('admin.product.update');
    Route::delete('product/{product}', [ProductController::class, 'destroy'])->name('admin.product.destroy');

    // Feedback
    Route::get('/kelola-feedback', [FeedbackController::class, 'index'])->name('admin.kelola-feedback');
    Route::delete('feedback/{feedback}', [FeedbackController::class, 'destroy'])->name('admin.feedback.destroy');
});

// role->user
Route::middleware(['auth', 'verified'])->prefix('user')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'user'])->name('user.dashboard');

    Route::get('/user-katalog', [ProductController::class, 'indexUser'])->name('user.user-katalog');
    Route::get('/wishlist', [WishlistController::class, 'index'])->name('user.wishlist');
    Route::get('product/{product}/detail', [ProductController::class, 'detail'])->name('product.detail');
    Route::post('/product/{product}/wishlist', [WishlistController::class, 'toggle'])
        ->name('product.wishlist');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
