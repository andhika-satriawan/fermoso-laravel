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

    Route::prefix('my-account')
        ->group(function () {
            Route::get('login', [App\Http\Controllers\Customer\AuthController::class, 'login'])->name('login');
            Route::post('login', [App\Http\Controllers\Customer\AuthController::class, 'login_store'])->name('login.store');
            Route::get('register', [App\Http\Controllers\Customer\AuthController::class, 'register'])->name('register');
            Route::post('register', [App\Http\Controllers\Customer\AuthController::class, 'register_store'])->name('register.store');
            Route::get('lost-password', [App\Http\Controllers\Customer\AuthController::class, 'lostpassword'])->name('lost_password');
        });
});

// MUST LOGGED IN
Route::middleware('auth:web')->group(function () {
    Route::post('logout', [App\Http\Controllers\Customer\AuthController::class, 'logout'])->name('logout');
    Route::get('cart', [App\Http\Controllers\Customer\CartController::class, 'index'])->name('cart');
    Route::delete('cart', [App\Http\Controllers\Customer\CartController::class, 'destroy'])->name('cart.delete');
    Route::post('cart', [App\Http\Controllers\Customer\CartController::class, 'store'])->name('cart.store');
    Route::get('checkout', [App\Http\Controllers\Customer\CartController::class, 'checkout'])->name('checkout');

    Route::prefix('my-account')
        ->name('my_account.')
        ->group(function () {
            Route::get('dashboard', [App\Http\Controllers\Customer\MyAccountController::class, 'index'])->name('dashboard');
            Route::get('orders', [App\Http\Controllers\Customer\MyAccountController::class, 'order'])->name('order');
            Route::get('addresses', [App\Http\Controllers\Customer\MyAccountController::class, 'addresses'])->name('address');
            Route::get('edit-account', [App\Http\Controllers\Customer\MyAccountController::class, 'editaccount'])->name('edit_account');
        });

    Route::prefix('api')
        ->name('api.')
        ->group(function () {
            Route::get('cart', [App\Http\Controllers\Customer\CartController::class, 'index_api'])->name('cart');
            Route::post('cart', [App\Http\Controllers\Customer\CartController::class, 'store_api'])->name('cart.store_api');
        });
});


// OPEN FOR ALL
Route::prefix('api')
        ->name('api.')
        ->group(function () {
            Route::get('product-category', [App\Http\Controllers\Customer\ProductController::class, 'subcategory_api'])->name('product_category');
        });

Route::get('/', [App\Http\Controllers\Customer\HomeController::class, 'index'])->name('home');
Route::get('products', [App\Http\Controllers\Customer\ProductController::class, 'index'])->name('products');
Route::get('/product/{slug}', [App\Http\Controllers\Customer\ProductController::class, 'show'])->name('product.detail.show');
Route::get('/product/category/{slug}', [App\Http\Controllers\Customer\ProductController::class, 'category'])->name('category-product.category');
Route::get('blog', [App\Http\Controllers\Customer\BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [App\Http\Controllers\Customer\BlogController::class, 'show'])->name('blog.show');
Route::get('cara-belanja', [App\Http\Controllers\Customer\OnePageController::class, 'carabelanja'])->name('cara-belanja.carabelanja');
Route::get('faq-product', [App\Http\Controllers\Customer\OnePageController::class, 'faqproduct'])->name('faq-product.faqproduct');
Route::get('faq-toko-kami', [App\Http\Controllers\Customer\OnePageController::class, 'faqtokokami'])->name('faq-toko-kami.faqtokokami');
