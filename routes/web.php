<?php

use Illuminate\Support\Facades\Route;

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
    return view('beranda', [
        "title" => "beranda"
    ]);
});

Route::get('/product', function () {
    return view('product', [
        "title" => "product"
    ]);
});

Route::get('/register', function () {
    return view('register', [
        "title" => "register"
    ]);
});

Route::get('/login', function () {
    return view('login', [
        "title" => "login"
    ]);
});

Route::get('/keranjang', function () {
    return view('keranjang', [
        "title" => "keranjang"
    ]);
});