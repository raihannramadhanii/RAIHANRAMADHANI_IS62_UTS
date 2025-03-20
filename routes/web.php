<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('beranda.login');
});

Route::get('/beranda', function () {
    return view('beranda.beranda');
});

Route::get('/penitip', function () {
    return view('data-penitip.penitip');
});

Route::get('/form-penitip', function () {
    return view('data-penitip.form-penitip');
});

Route::get('/penitipan', function () {
    return view('data-penitipan.penitipan');
});

Route::get('/form-penitipan', function () {
    return view('data-penitipan.form-penitipan');
});

Route::get('/penjualan', function () {
    return view('data-penjualan.penjualan');
});

Route::get('/form-penjualan', function () {
    return view('data-penjualan.form-penjualan');
});

Route::get('/pembayaran', function () {
    return view('data-pembayaran.pembayaran');
});

Route::get('/form-pembayaran', function () {
    return view('data-pembayaran.form-pembayaran');
});

Route::get('/struk', function () {
    return view('data-pembayaran.struk');
});




