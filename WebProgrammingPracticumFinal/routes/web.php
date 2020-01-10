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
    return view('homecontent');
});

Route::get('/login', function () {
    return view('Auth/login');
});

Route::get('/register', function () {
    return view('Auth/register');
});

Route::get('/product-detail', function () {
    return view('product-detail');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/manage-figure', function () {
    return view('manage-figure');
});

Route::get('/insert-figure', function () {
    return view('insert-figure');
});

Route::get('/update-figure', function () {
    return view('update-figure');
});

Route::get('/manage-figure-category', function () {
    return view('manage-figure-category');
});


Route::get('/insert-figure-category', function () {
    return view('insert-figure-category');
});


Route::get('/update-figure-category', function () {
    return view('update-figure-category');
});

Route::get('/manage-feedback', function () {
    return view('manage-feedback');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/manage-user', function () {
    return view('manage-user');
});

Route::get('/update-user', function () {
    return view('update-user');
});

Route::get('/transaction-history', function () {
    return view('transaction-history');
});

Route::get('/insert-feedback', function () {
    return view('insert-feedback');
});
