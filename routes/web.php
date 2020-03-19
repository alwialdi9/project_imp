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

Route::get('buatpembelian', function () {
    return view('keuangan.buatpembelian');
});

Route::get('biaya', function () {
    return view('keuangan.biaya');
});

Route::get('buatbiaya', function () {
    return view('keuangan.buatbiaya');
});

Route::get('pattycash', function () {
    return view('keuangan.pattycash');
});

Route::get('buatpattycash', function () {
    return view('keuangan.buatpattycash');
});

Route::get('surat', function () {
    return view('surat.index');
});

Route::get('suratmasuk', function () {
    $surat = 'surat';
    return view('surat.suratmasuk', compact('surat'));
});

Route::get('suratkeluar', function () {
    $surat = 'surat';
    return view('surat.suratkeluar', compact('surat'));
});

Route::get('akun', 'AkunController@index');

Route::get('invoice', function () {
    return view('invoice.index');
});

Route::get('buatinvoice', function () {
    return view('invoice.buatinvoice');
});
