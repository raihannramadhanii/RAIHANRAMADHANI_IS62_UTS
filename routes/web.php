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

Route::get('/menu', function () {
    return view('menu.menu');
});

Route::get('/pendaftaran', function () {
    return view('menu.pendaftaran');
});
