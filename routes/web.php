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

// Main Pages Routes
Route::get('/', function () {
    $flowers = App\Flower::latest()->limit(8)->get();
    return view('index', compact('flowers'));
});

Route::get('product/{slug}', ['as' => 'product.single', 'uses' => 'FlowerController@getSingle' ]) -> where('slug', '[\w\d\-\_]+');

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


// Collection Routes
Route::get('/collections/birthday', function() {
  $flowers = App\Flower::whereHas('collections', function ($query) {
    $query->where('name', 'Birthday');
  })->get();
  return view('/collections/birthday', compact('flowers', 'collections'));
});


Route::get('/collections/compositions', function() {
  $flowers = App\Flower::whereHas('collections', function ($query) {
    $query->where('name', 'Compositions');
  })->get();
  return view('/collections/compositions', compact('flowers', 'collections'));
});

Route::get('/collections/congratulation', function() {
  $flowers = App\Flower::whereHas('collections', function ($query) {
    $query->where('name', 'Congratulation');
  })->get();
  return view('/collections/congratulation', compact('flowers', 'collections'));
});

Route::get('/collections/gifts', function() {
  $flowers = App\Flower::whereHas('collections', function ($query) {
    $query->where('name', 'Gifts');
  })->get();
  return view('/collections/gifts', compact('flowers', 'collections'));
});

Route::get('/collections/new-baby', function() {
  $flowers = App\Flower::whereHas('collections', function ($query) {
    $query->where('name', 'New Baby');
  })->get();
  return view('/collections/new-baby', compact('flowers', 'collections'));
});

Route::get('/collections/thank-you', function() {
  $flowers = App\Flower::whereHas('collections', function ($query) {
    $query->where('name', 'Thank You');
  })->get();
  return view('/collections/thank-you', compact('flowers', 'collections'));
});

Route::get('/collections/weddings', function() {
  $flowers = App\Flower::whereHas('collections', function ($query) {
    $query->where('name', 'Weddings');
  })->get();
  return view('/collections/weddings', compact('flowers', 'collections'));
});

Route::get('/collections/all', function() {
  $flowers = App\Flower::whereHas('collections', function ($query) {
    $query->where('name', 'All');
  })->get();
  return view('/collections/all', compact('flowers', 'collections'));
});

Route::get('/collections/looseflowers', function() {
  $flowers = App\Flower::whereHas('collections', function ($query) {
    $query->where('name', 'looseflowers');
  })->get();
  return view('/collections/looseflowers', compact('flowers', 'collections'));
});





Route::get('/admin', function () {
    return view('admin/index');
});

Route::resource('/admin/products', 'FlowerController');
Route::resource('/admin/collections', 'CollectionController');
Route::resource('/admin/posts', 'PostController');
