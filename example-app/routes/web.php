<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Vite;

Route::get('/', function () {
    return view('welcome');
});
Route::get('ThemXoaSuaProduct', function () {
    return view('themXoaSuaProduct');
});
Route::get('MenuUser', function () {
    return view('menuUser');
});
Route::get('UserProfile', function () {
    return view('userProfile');
});
Route::get('UpdateProfileUser', function () {
    return view('updateProfileUser');
});
Route::get('ProfileUserOrder', function () {
    return view('profileUserOrder');
});
Route::get('ProfileUserRecentView', function () {
    return view('profileUserRecentView');
});
Route::get('SupportUser', function () {
    return view('supportUser');
});
Route::get('Login', function () {
    return view('login');
});
Route::get('Register', function () {
    return view('register');
});
Route::get('productDetail', function () {
    return view('productDetail');
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

Route::get('/', function () {
    return view('auth.home');
});

Route::get('seller', function () {
    return view('auth.seller');
});

Route::get('crud', function () {
    return view('auth.crud');
});
