<?php

use App\Http\Controllers\AboutCompanyController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PilihKamiController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SosmedController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;
use App\Models\Category;
use App\Models\Product;
use App\Models\Team;
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


// Company Profile
Route::get('/', [ProfileController::class, 'home']);
Route::get('/about', [ProfileController::class, 'about']);


// Login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
// Logout
Route::delete('/logout', [LoginController::class, 'logout']);

// Dashboard
Route::get('/dashboard', function () {

    $productCount = Product::count();
    $categoryCount = Category::count();
    $teamCount = Team::count();

    return view('dashboard.main.index', compact('productCount', 'categoryCount', 'teamCount'));
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
    Route::get('/dashboard/categories/create', 'create')->name('dashboard.categories.create');
    Route::post('/dashboard/categories', 'store')->name('dashboard.categories.store');
    Route::get('/dashboard/categories/{category:slug}/edit', 'edit')->name('dashboard.categories.edit');
    Route::put('/dashboard/categories/{category:slug}', 'update')->name('dashboard.categories.update');
    Route::delete('/dashboard/categories/{category:slug}', 'destroy')->name('dashboard.categories.destroy');
});

// Dashboard About Company
Route::controller(AboutCompanyController::class)->middleware('auth')->group(function () {
    Route::get('/dashboard/about-company', 'index')->name('dashboard.aboutcompany.index');
    Route::get('/dashboard/about-company/{about_company:id}/edit', 'edit')->name('dashboard.aboutcompany.edit');
    Route::put('/dashboard/about-company/{about_company:id}', 'update')->name('dashboard.aboutcompany.update');
});

// Dashboard Layanan Kami
Route::controller(LayananController::class)->middleware('auth')->group(function () {
    Route::get('/dashboard/layanan-kami', 'index')->name('dashboard.layanan.index');
    Route::get('/dashboard/layanan-kami/create', 'create')->name('dashboard.layanan.create');
    Route::post('/dashboard/layanan-kami', 'store')->name('dashboard.layanan.store');
    Route::get('/dashboard/layanan-kami/{layanan:id}/edit', 'edit')->name('dashboard.layanan.edit');
    Route::put('/dashboard/layanan-kami/{layanan:id}', 'update')->name('dashboard.layanan.update');
    Route::delete('/dashboard/layanan-kami/{layanan:id}', 'destroy')->name('dashboard.layanan.destroy');
});

// Dashboard Menu Mengapa Memilih Kami
Route::controller(PilihKamiController::class)->middleware('auth')->group(function () {
    Route::get('/dashboard/mengapa-pilih-kami', 'index')->name('dashboard.pilihkami.index');
    Route::get('/dashboard/mengapa-pilih-kami/create', 'create')->name('dashboard.pilihkami.create');
    Route::post('/dashboard/mengapa-pilih-kami', 'store')->name('dashboard.pilihkami.store');
    Route::get('/dashboard/mengapa-pilih-kami/{pilih_kami:id}/edit', 'edit')->name('dashboard.pilihkami.edit');
    Route::put('/dashboard/mengapa-pilih-kami/{pilih_kami:id}', 'update')->name('dashboard.pilihkami.update');
    Route::delete('/dashboard/mengapa-pilih-kami/{pilih_kami:id}', 'destroy')->name('dashboard.pilihkami.destroy');
});

// Dashboard FAQ
Route::controller(FaqController::class)->middleware('auth')->group(function () {
    Route::get('/dashboard/faq', 'index')->name('dashboard.faq.index');
    Route::get('/dashboard/faq/create', 'create')->name('dashboard.faq.create');
    Route::post('/dashboard/faq', 'store')->name('dashboard.faq.store');
    Route::get('/dashboard/faq/{faq:id}/edit', 'edit')->name('dashboard.faq.edit');
    Route::put('/dashboard/faq/{faq:id}', 'update')->name('dashboard.faq.update');
    Route::delete('/dashboard/faq/{faq:id}', 'destroy')->name('dashboard.faq.destroy');
});

// Dashboard Team Pemasaran
Route::controller(TeamController::class)->middleware('auth')->group(function () {
    Route::get('/dashboard/team', 'index')->name('dashboard.team.index');
    Route::get('/dashboard/team/create', 'create')->name('dashboard.team.create');
    Route::post('/dashboard/team', 'store')->name('dashboard.team.store');
    Route::get('/dashboard/team/{team:id}/edit', 'edit')->name('dashboard.team.edit');
    Route::put('/dashboard/team/{team:id}', 'update')->name('dashboard.team.update');
    Route::delete('/dashboard/team/{team:id}', 'destroy')->name('dashboard.team.destroy');
});

// Dashboard Sosmed
Route::controller(SosmedController::class)->middleware('auth')->group(function () {
    Route::get('/dashboard/sosmed', 'index')->name('dashboard.sosmed.index');
    Route::get('/dashboard/sosmed/create', 'create')->name('dashboard.sosmed.create');
    Route::post('/dashboard/sosmed', 'store')->name('dashboard.sosmed.store');
    Route::get('/dashboard/sosmed/{sosmed:id}/edit', 'edit')->name('dashboard.sosmed.edit');
    Route::put('/dashboard/sosmed/{sosmed:id}', 'update')->name('dashboard.sosmed.update');
    Route::delete('/dashboard/sosmed/{sosmed:id}', 'destroy')->name('dashboard.sosmed.destroy');
});

// Dashboard Setting
Route::controller(UserController::class)->middleware('auth')->group(function () {
    // Ubah profile
    Route::get('/dashboard/settings', 'index')->name('dashboard.setting.index');
    Route::put('/dashboard/settings', 'update')->name('dashboard.setting.update');
    // Ubah PW
    Route::get('/dashboard/changepw', 'changepw')->name('dashboard.setting.changepw');
    Route::post('/dashboard/changepw', 'updatepw')->name('dashboard.setting.updatepw');
});
