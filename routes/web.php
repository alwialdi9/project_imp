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

Route::get('/', 'DashboardController@index');

Route::get('/keuangan', 'KeuanganController@index');
Route::get('/keuangan/create', 'KeuanganController@create');

Route::get('/penjualan', 'PenjualanController@index');
Route::get('/penjualan/buat_penjualan', 'PenjualanController@create');
Route::post('/penjualan', 'PenjualanController@store');

Route::get('/pembelian', 'PembelianController@index');
Route::get('/pembelian/buat_pembelian', 'PembelianController@create');
Route::post('/pembelian', 'PenjualanController@validation');
Route::post('/pembelian', 'PembelianController@store');

Route::get('/biaya', 'BiayaController@index');
Route::get('/biaya/buat_biaya', 'BiayaController@create');
Route::post('/biaya', 'PenjualanController@validation');
Route::post('/biaya', 'BiayaController@store');

Route::get('/petty', 'PettyCashController@index');
Route::get('/petty/buat_petty', 'PettyCashController@create');
Route::post('/petty', 'PenjualanController@validation');
Route::post('/petty', 'PettyCashController@store');

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
