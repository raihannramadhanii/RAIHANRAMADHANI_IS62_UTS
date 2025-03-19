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


