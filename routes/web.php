<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\deleteController;
use App\Http\Controllers\viewController;

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
});
Route::get('/table', function () {
    return view('table');
});
Route::get('produk', [ProdukController::class, 'index'])->name('getProduk');

Route::get('/produk/delete/{id}', [ProdukController::class, 'destroy'])->name('produkDelete');

//customer
Route::get('customer', [viewController::class, 'index'])->name('getCustomers');
Route::get('/customer/delete/{id}', [viewController::class, 'destroy'])->name('customerDelete');

Route::get('categories', [deleteController::class, 'index'])->name('getCategories');
Route::get('/categories/delete/{id}', [deleteController::class, 'destroy'])->name('categoriesDelete');