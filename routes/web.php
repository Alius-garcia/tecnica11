<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/plantilla', function () {
    return view('plantilla/index');
});

Route::get('/inicio', function () {
    return view('inicio');
});

Route::get('/especialidades', function () {
    return view('especialidades');
});

Route::get('/novedades', function () {
    return view('novedades');
});
