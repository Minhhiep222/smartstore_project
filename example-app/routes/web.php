<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Vite;

Route::get('/', function () {
    return view('welcome');
});

Route::get('cart', function () {
    return view('auth.cart');
});

Route::get('item', function () {
    return view('auth.item');
});
Route::get('header', function () {
    return view('header');
});

Route::get('home', function () {
    return view('auth.home');
});
Route::get('crud', function () {
    return view('auth.crud');
});
