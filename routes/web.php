<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/barbershop', function () {
    return view('barbershop');
});

Route::get('/barbershop/admin', function () {
    return view('barbershop.admin');
});

Route::get('/barbershop/auth', function () {
    return redirect('/login');
});

Route::get('/login', function () {
    return view('barbershop.login');
});

Route::get('/register', function () {
    return view('barbershop.register');
});

Route::get('/profile', function () {
    return view('barbershop.profile');
});
