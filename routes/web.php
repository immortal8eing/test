<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
// use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;


=======
>>>>>>> f1c93730f5b6c5bfe36ac37a44c5a117843cffb5

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
<<<<<<< HEAD
    return view('welcome');
=======
    return view('index');
>>>>>>> f1c93730f5b6c5bfe36ac37a44c5a117843cffb5
});

Route::get('/dashboard', function () {
    return view('dashboard');
});
<<<<<<< HEAD


Route::get('/table', function () {
    return view('table');
});

// Route::get( 'dashboard', [DashboardController::class, 'index'] );

Route::get( 'produk', [ProdukController::class, 'index'] );
Route::get( '/produk/delete/{id}', [ProdukController::class, 'destroy'] )->name ('produkDelete');


=======
Route::get('/table', function () {
    return view('table');
});
>>>>>>> f1c93730f5b6c5bfe36ac37a44c5a117843cffb5
