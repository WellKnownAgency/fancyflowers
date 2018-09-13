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

Auth::routes();

// Main Pages Routes
Route::get('/', function () {
    $flowers = App\Flower::latest()->limit(8)->get();
    $posts = App\Post::latest()->limit(5)->get();
    return view('index', compact('flowers'))->withPosts($posts);


});

Route::get('product/{slug}', ['as' => 'product.single', 'uses' => 'FlowerController@getSingle' ]) -> where('slug', '[\w\d\-\_]+');

Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart', 'CartController@store')->name('cart.store');
Route::patch('/cart/{flower}', 'CartController@update')->name('cart.update');
Route::delete('/cart/{flower}', 'CartController@destroy')->name('cart.destroy');

Route::get('/checkout', 'CheckoutController@index')->name('checkout.index');
Route::post('/checkout', 'CheckoutController@store')->name('checkout.store');


Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});

Route::get('/products-list', function () {
    return view('products-list/products-list');
});

Route::get('/blog', function () {
    return view('blog/index');
});

Route::get('/blog/{slug}', ['as' => 'post.single', 'uses' => 'PostController@getSingle' ]) -> where('slug', '[\w\d\-\_]+');


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
    $query->where('name', 'Wedding');
  })->get();
  return view('/collections/weddings', compact('flowers', 'collections'));
});

Route::get('/collections/all', function() {
  $flowers = App\Flower::latest()->get();
  return view('/collections/all', compact('flowers'));
});

Route::get('/collections/looseflowers', function() {
  $flowers = App\Flower::whereHas('collections', function ($query) {
    $query->where('name', 'looseflowers');
  })->get();
  return view('/collections/looseflowers', compact('flowers', 'collections'));
});

Route::middleware('auth:web')->group(function () {
  Route::get('/account', function () {
    $cards = App\Card::latest()->get();
    $ships = App\Ship::latest()->get();
      return view('account', compact('ships'))->withCards($cards);
  });
  Route::resource('/account/cards', 'CardController');
  Route::post('/account/cards/{id}','CardController@update');

  Route::resource('/account/addresses', 'ShipController');
  Route::post('/account/addresses/{id}','ShipController@update');
});



Route::get('/admin', function () {
    return view('admin/index');
});

Route::resource('/admin/products', 'FlowerController');
Route::resource('/admin/collections', 'CollectionController');
Route::resource('/admin/posts', 'PostController');
Route::post('/posts/{id}','PostController@update');
Route::post('/collections/{id}','CollectionController@update');
Route::post('/products/{id}','FlowerController@update');
