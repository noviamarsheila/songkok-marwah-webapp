<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Models\Category;
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

// Login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
// Logout
Route::delete('/logout', [LoginController::class, 'logout']);

// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard.main.index');
})->middleware('auth');

// Dashboard Produk
Route::controller(ProductController::class)->middleware('auth')->group(function () {
    Route::get('/dashboard/products/', 'index')->name('dashboard.products.index');
    // tampil form add
    Route::get('/dashboard/products/create', 'create')->name('dashboard.products.create');
    // proses add
    Route::post('/dashboard/products', 'store')->name('dashboard.products.store');
    // edit
    // {product:slug} penjelasan: product itu nama model, slug nama field yang cari
    Route::get('/dashboard/products/{product:slug}/edit', 'edit')->name('dashboard.products.edit');
    Route::put('/dashboard/products/{product:slug}', 'update')->name('dashboard.products.update');
    //hapus
    // {product:slug} penjelasan: product itu nama model, slug nama field yang cari
    Route::delete('/dashboard/products/{product:slug}', 'destroy')->name('dashboard.products.destroy');
});

// Dashboard Kategori
Route::controller(CategoryController::class)->middleware('auth')->group(function () {
    Route::get('/dashboard/categories/', 'index')->name('dashboard.categories.index');
    Route::get('/dahsboard/categories/create', 'create')->name('dashboard.categories.create');
    Route::post('/dashboard/categories', 'store')->name('dashboard.categories.store');
});
