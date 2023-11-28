<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\DashboardController;

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

Route::get('/', function () {
    return view('pages.customer.home', [
        "title" => "Home",
        "page" => "home",
    ]);
});

Route::get('/products', function () {
    return view('pages.customer.products', [
        "title" => "Product",
        "page" => "products",
    ]);
});

Route::get('/detail-product', function () {
    return view('pages.customer.detail-product', [
        "title" => "Detail Product",
        "page" => "detail-product",
    ]);
});

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


Route::prefix('admin')
    // ->middleware(['auth:sanctum', 'verified', 'is_admin'])
    ->name('admin.')
    ->group(function () {

        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    });
