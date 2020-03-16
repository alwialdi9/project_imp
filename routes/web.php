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
    return view('dashboard.index');
});

Route::get('penjualan', function () {
    return view('keuangan.penjualan');
});

Route::get('buatpenjualan', function () {
    return view('keuangan.buatpenjualan');
});

Route::get('pembelian', function () {
    return view('keuangan.pembelian');
});
