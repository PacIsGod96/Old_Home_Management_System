<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/register', function () {
    return view('layouts.register');
});

Route::get('/login', function () {
    return view('layouts.login');
});
