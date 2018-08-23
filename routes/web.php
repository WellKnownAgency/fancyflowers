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
    return view('index');
});


Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/products-list', function () {
    return view('products-list/products-list');
});

Route::get('/blog', function () {
    return view('blog/index');
});

Route::get('/admin', function () {
    return view('admin/index');
});
