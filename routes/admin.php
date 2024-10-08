<?php

use Illuminate\Support\Facades\Route;

Route::prefix('monyet')
    ->name('admin.')
    ->group(function () {

        Route::middleware('guest:admin')->group(function () {
            Route::get('login', [App\Http\Controllers\Admin\AuthController::class, 'index'])->name('login');
            Route::post('login', [App\Http\Controllers\Admin\AuthController::class, 'store'])->name('login.store');
        });

        // Route::middleware('auth:admin')->group(function () {
        Route::middleware('admin')->group(function () {
            Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
            Route::prefix('product')
                ->name('product.')
                ->group(function () {
                    Route::resource('list', App\Http\Controllers\Admin\ProductController::class);
                    Route::delete('variant-delete/{id}', [App\Http\Controllers\Admin\ProductController::class, 'variant_destroy'])->name('variant.delete');
                    Route::delete('image-delete/{id}', [App\Http\Controllers\Admin\ProductController::class, 'image_destroy'])->name('image.delete');
                    Route::resource('category', App\Http\Controllers\Admin\ProductCategoryController::class);
                    Route::resource('subcategory', App\Http\Controllers\Admin\ProductSubcategoryController::class);
                });

            Route::resource('service', App\Http\Controllers\Admin\ServiceController::class);

            Route::prefix('setting')
                ->name('setting.')
                ->group(function () {
                    Route::resource('general', App\Http\Controllers\Admin\SettingController::class);
                    Route::resource('deal', App\Http\Controllers\Admin\SettingLatestDealController::class);
                    Route::resource('product-slider', App\Http\Controllers\Admin\SettingProductSliderController::class);
                });
                
            Route::resource('review', App\Http\Controllers\Admin\ReviewDummyController::class);
            Route::resource('slider', App\Http\Controllers\Admin\SliderController::class);
            Route::resource('custom-page', App\Http\Controllers\Admin\CustomPageController::class);

            Route::prefix('article')
                ->name('article.')
                ->group(function () {
                    Route::resource('blog', App\Http\Controllers\Admin\ArticleController::class);
                    Route::resource('category', App\Http\Controllers\Admin\ArticleCategoryController::class);
                });

            Route::prefix('faq')
                ->name('faq.')
                ->group(function () {
                    Route::resource('list', App\Http\Controllers\Admin\FaqController::class);
                    Route::resource('category', App\Http\Controllers\Admin\FaqCategoryController::class);
                });

            Route::resource('customer', App\Http\Controllers\Admin\CustomerController::class);
            Route::resource('sales', App\Http\Controllers\Admin\SalesController::class)->only([
                'index', 'show'
            ]);
            Route::post('update-sales-status/{id}', [App\Http\Controllers\Admin\SalesController::class, 'update_status'])->name('sales.update_status');
            Route::post('update-sales-resi/{id}', [App\Http\Controllers\Admin\SalesController::class, 'update_resi'])->name('sales.update_resi');


            // Route::get('setting', [App\Http\Controllers\Admin\SettingController::class, 'index'])->name('admin.setting.index');
            // Route::post('setting', [App\Http\Controllers\Admin\SettingController::class, 'update'])->name('admin.setting.update');

            // Route::get('sales', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('sales');
            Route::post('logout', [App\Http\Controllers\Admin\AuthController::class, 'logout'])->name('logout');

            Route::prefix('theme')
                ->name('theme.')
                ->group(function () {
                    Route::resource('header', App\Http\Controllers\Admin\ThemeHeaderController::class);
                    Route::resource('slider', App\Http\Controllers\Admin\ThemeSliderController::class);

                    Route::resource('footer', App\Http\Controllers\Admin\ThemeFooterController::class);
                });
        });
    });
