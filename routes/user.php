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
    Route::get('my-account/login', [App\Http\Controllers\Customer\AuthController::class, 'login'])->name('login');
    Route::post('my-account/login', [App\Http\Controllers\Customer\AuthController::class, 'login_store'])->name('login.store');
    Route::get('my-account/lost-password', [App\Http\Controllers\Customer\LostPasswordController::class, 'lostPassword'])->name('lost-password');

    Route::get('my-account/register', [App\Http\Controllers\Customer\AuthController::class, 'register'])->name('register');
    Route::post('my-account/register', [App\Http\Controllers\Customer\AuthController::class, 'register_store'])->name('register.store');
});

// MUST LOGGED IN
Route::middleware('auth:web')->group(function () {
});
Route::get('cart', [App\Http\Controllers\Customer\CartController::class, 'index'])->name('cart');

// OPEN FOR ALL
Route::get('/', [App\Http\Controllers\Customer\HomeController::class, 'index'])->name('home');
Route::get('products', [App\Http\Controllers\Customer\ProductController::class, 'index'])->name('product');
Route::get('detail-product', [App\Http\Controllers\Customer\ProductController::class, 'show'])->name('product.detail');
Route::get('/product/{slug}', [App\Http\Controllers\Customer\DetailProductController::class, 'index'])->name('detail.index');
Route::get('cara-belanja', [App\Http\Controllers\Customer\CaraBelanjaController::class, 'index'])->name('cara-belanja');
Route::get('blog', [App\Http\Controllers\Customer\BlogController::class, 'index'])->name('blog');
Route::get('detail-blog', [App\Http\Controllers\Customer\DetailBlogController::class, 'index'])->name('detail-blog');
Route::get('faq-product', [App\Http\Controllers\Customer\FAQProductController::class, 'index'])->name('faq-product');
Route::get('faq-toko-kami', [App\Http\Controllers\Customer\FAQTokoKamiController::class, 'index'])->name('faq-toko-kami');
Route::get('/product/category/{slug}', [App\Http\Controllers\Customer\CategoryProductController::class, 'index'])->name('category-product');

Route::post('/ajax-endpoint', [App\Http\Controllers\Customer\AjaxController::class, 'ajaxMethod'])->name('ajax.endpoint');
