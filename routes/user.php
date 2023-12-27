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
    Route::get('my-account/register', [App\Http\Controllers\Customer\AuthController::class, 'register'])->name('register');
    Route::post('my-account/register', [App\Http\Controllers\Customer\AuthController::class, 'register_store'])->name('register.store');
    Route::get('my-account/lost-password', [App\Http\Controllers\Customer\AuthController::class, 'lostpassword'])->name('lost-password.lostpassword');

    Route::get('my-account/', [App\Http\Controllers\Customer\MyAccountController::class, 'index'])->name('dashboard.index');
    Route::get('my-account/orders', [App\Http\Controllers\Customer\MyAccountController::class, 'order'])->name('order.order');
    Route::get('my-account/addresses', [App\Http\Controllers\Customer\MyAccountController::class, 'addresses'])->name('addresses.addresses');
    Route::get('my-account/edit-account', [App\Http\Controllers\Customer\MyAccountController::class, 'editaccount'])->name('edit_account.editaccount');
    Route::get('my-account/edit-account', [App\Http\Controllers\Customer\MyAccountController::class, 'editaccount'])->name('edit_account.editaccount');
});

// MUST LOGGED IN
Route::middleware('auth:web')->group(function () {
    Route::post('logout', [App\Http\Controllers\Customer\AuthController::class, 'logout'])->name('logout');
});
Route::get('cart', [App\Http\Controllers\Customer\CartController::class, 'index'])->name('cart');
Route::get('checkout', [App\Http\Controllers\Customer\CartController::class, 'checkout'])->name('checkout.checkout');

// OPEN FOR ALL
Route::get('/', [App\Http\Controllers\Customer\HomeController::class, 'index'])->name('home');
Route::get('products', [App\Http\Controllers\Customer\ProductController::class, 'index'])->name('product');
Route::get('/product/{slug}', [App\Http\Controllers\Customer\ProductController::class, 'show'])->name('detail.show');
Route::get('/product/category/{slug}', [App\Http\Controllers\Customer\ProductController::class, 'category'])->name('category-product.category');
Route::get('blog', [App\Http\Controllers\Customer\BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [App\Http\Controllers\Customer\BlogController::class, 'show'])->name('blog.show');
Route::get('cara-belanja', [App\Http\Controllers\Customer\OnePageController::class, 'carabelanja'])->name('cara-belanja.carabelanja');
Route::get('faq-product', [App\Http\Controllers\Customer\OnePageController::class, 'faqproduct'])->name('faq-product.faqproduct');
Route::get('faq-toko-kami', [App\Http\Controllers\Customer\OnePageController::class, 'faqtokokami'])->name('faq-toko-kami.faqtokokami');
