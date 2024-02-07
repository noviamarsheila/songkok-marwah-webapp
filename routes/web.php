<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
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
Route::get('/dashboard', function () {
    return view('dashboard.main.index');
})->middleware('auth');

// Product
// dibuar grup routing yang menuju ke product controller
// di chaining middleware 'auth' 
Route::controller(ProductController::class)->middleware('auth')->group(function () {
    Route::get('/dashboard/products/', 'index')->name('dashboard.products.index');
    Route::get('/dashboard/products/create', 'create')->name('dashboard.products.create');
    Route::post('/dashboard/products', 'store')->name('dashboard.products.store');
});
