<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/home', function () {
    return view('main.home');
});

Route::get('/umum', function () {
    return view('main.umum');
});

Route::get('/sosial', function () {
    return view('main.sosial');
});

Route::get('/sosial2', function () {
    return view('main.sosial2');
});

Route::get('/teknis', function () {
    return view('main.teknis');
});





Route::get('/adm1', function () {
    return view('administrasi.adm1');
});

Route::get('/adm2', function () {
    return view('administrasi.adm2');
});

Route::get('/adm3', function () {
    return view('administrasi.adm3');
});
Route::get('/transaksi', function () {
    return view('administrasi.transaksi');
});
Route::get('/search', function () {
    return view('administrasi.search');
});


Route::get('/dbadmin', function () {
    return view('admin.dbadmin');
});


Route::get('/dbmitra', function () {
    return view('mitra.dbmitra');
});
Route::get('/riwayatmitra', function () {
    return view('mitra.riwayatmitra');
});
Route::get('/loginmitra', function () {
    return view('mitra.loginmitra');
});