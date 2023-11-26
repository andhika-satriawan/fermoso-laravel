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
    return view('pages.customer.home');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/single-product', function () {
    return view('single-product');
});

Route::get('/cara-belanja', function () {
    return view('cara-belanja');
});

Route::get('/faq-product', function () {
    return view('faq-product');
});

Route::get('/faq-perusahaan', function () {
    return view('faq-perusahaan');
});

Route::get('/blog', function () {
    return view('blog');
});


Route::prefix('admin')
    // ->middleware(['auth:sanctum', 'verified', 'is_admin'])
    ->name('admin.')
    ->group(function() {

        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

});