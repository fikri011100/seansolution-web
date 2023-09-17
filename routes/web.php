<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndustriController;
use App\Http\Controllers\DashboardController;

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
    return view('dashboard');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/article', function () {
    return view('article');
});

Route::get('/katalog', function () {
    return view('katalog');
})->name('katalog');

Route::get('/detailartikel', function () {
    return view('detailartikel');
})->name('detailartikel');

Route::get('/product/{id}', [IndustriController::class, 'index'])->name('product');

Route::get('/product/{id}/{fam}', [IndustriController::class, 'industriproduk'])->name('productselected');

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/download/{filename}', [DashboardController::class, 'download'])->name('download');

Route::post('/send-email', [DashboardController::class, 'sendEmail'])->name('send-email');
