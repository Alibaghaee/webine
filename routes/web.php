<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', function () {
        return view('main.main');
    });
    Route::group(['prefix' => 'products'], function () {
        Route::get('index', [\App\Http\Controllers\Admin\ProductController::class, 'index'])
            ->name('admin.product.index');
        Route::get('create', [\App\Http\Controllers\Admin\ProductController::class, 'create'])
            ->name('admin.product.create');
        Route::get('show/{product}', [\App\Http\Controllers\Admin\ProductController::class, 'show'])
            ->name('admin.product.show');
        Route::get('edit/{product}', [\App\Http\Controllers\Admin\ProductController::class, 'edit'])
            ->name('admin.product.edit');
        Route::post('store', [\App\Http\Controllers\Admin\ProductController::class, 'store'])
            ->name('admin.product.store');
        Route::put('update/{product}', [\App\Http\Controllers\Admin\ProductController::class, 'update'])
            ->name('admin.product.update');
        Route::delete('delete/{product}', [\App\Http\Controllers\Admin\ProductController::class, 'destroy'])
            ->name('admin.product.delete');
    });

});


require __DIR__.'/auth.php';
