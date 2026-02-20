<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/view-temp-correo', function () { return view('emails.mensaje_bienvenida'); });