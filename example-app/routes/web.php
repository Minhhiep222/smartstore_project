<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('ThemXoaSuaProduct', function () {
    return view('ThemXoaSuaProduct');
});
Route::get('MenuUser', function () {
    return view('MenuUser');
});
Route::get('UserProfile', function () {
    return view('UserProfile');
});


