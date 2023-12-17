<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// NOT LOGGED IN ONLY
Route::middleware('guest:web')->group(function () {
    Route::get('login', [App\Http\Controllers\Customer\AuthController::class, 'login'])->name('login');
    Route::post('login', [App\Http\Controllers\Customer\AuthController::class, 'login_store'])->name('login.store');

    Route::get('register', [App\Http\Controllers\Customer\AuthController::class, 'register'])->name('register');
    Route::post('register', [App\Http\Controllers\Customer\AuthController::class, 'register_store'])->name('register.store');
});

// MUST LOGGED IN
Route::middleware('auth:web')->group(function () {
    Route::get('cart', [App\Http\Controllers\Customer\CartController::class, 'index'])->name('cart');
});

// OPEN FOR ALL
Route::get('/', [App\Http\Controllers\Customer\HomeController::class, 'index'])->name('home');
Route::get('products', [App\Http\Controllers\Customer\ProductController::class, 'index'])->name('product');
Route::get('detail-product', [App\Http\Controllers\Customer\ProductController::class, 'show'])->name('product.detail');
Route::get('/product/{slug}', [App\Http\Controllers\Customer\DetailProductController::class, 'index'])->name('detail.index');

Route::get('/cara-belanja', function () {
    return view('pages.customer.cara-belanja', [
        "title" => "Cara Belanja",
        "page" => "cara-belanja"
    ]);
});

Route::get('/faq-product', function () {
    return view('pages.customer.faq-product', [
        "title" => "FAQ Product",
        "page"  => "faq-product"
    ]);
});

Route::get('/faq-toko-kami', function () {
    return view('pages.customer.faq-toko-kami', [
        "title" => "FAQ Toko Kami",
        "page"  => "faq-toko-kami"
    ]);
});

Route::get('/blog', function () {
    return view('pages.customer.blog', [
        "title" => "Blog",
        "page"  => "blog"
    ]);
});
