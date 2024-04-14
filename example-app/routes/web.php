<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('cart', function () {
    return view('cart');
});
Route::get('item', function () {
    return view('item');
});
