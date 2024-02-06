<?php

use App\Http\Controllers\LoginController;
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

Route::get('/tes', function(){
    return view('dashboard.main.index');
});
Route::get('/tess', function(){
    return view('dashboard.categories.edit');
});

// Route::get('/dashboard', function(){
//     return view('dashboard');
// })->middleware('auth');