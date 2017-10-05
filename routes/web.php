<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('user.pages.index');
});

Route::get('/try', function () {
    return view('user.pages.try');
});

Route::get('/single', function () {
    return view('user.pages.singleProduct');
});

Route::get('/cart1', function () {
    return view('user.pages.cart-1');
});
Route::get('/cart2', function () {
    return view('user.pages.cart-2');
});
Route::get('/cart3', function () {
    return view('user.pages.cart-3');
});
Route::get('/register', function () {
    return view('user.pages.register');
});
Route::get('/showcase', function () {
    return view('user.pages.showcase');
});
