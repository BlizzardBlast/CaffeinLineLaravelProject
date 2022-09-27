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
    return view('index');
});

Route::get('/bevmenu', function () {
    return view('bevmenu');
});

Route::get('/tea', function () {
    return view('tea');
});

Route::get('/kopi', function () {
    return view('kopi');
});

Route::get('/makanan', function () {
    return view('makanan');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/payment', function () {
    return view('payment');
});
