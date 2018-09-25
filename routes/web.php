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
Route::get('/', 'PageController@index');

Route::get('/test', function () {
    return view('test');
});


Route::get('product/{slug}', ['as' => 'product.single', 'uses' => 'FlowerController@getSingle' ]) -> where('slug', '[\w\d\-\_]+');

Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart', 'CartController@store')->name('cart.store');
Route::patch('/cart/{flower}', 'CartController@update')->name('cart.update');
Route::delete('/cart/{flower}', 'CartController@destroy')->name('cart.destroy');

Route::get('/checkout-complete', 'CheckoutController@checkoutComplete')->name('checkout.complete');
Route::get('/checkout', 'CheckoutController@index')->name('checkout.index');
Route::post('/checkout', 'CheckoutController@store')->name('checkout.store');


Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});

Route::get('/guarantees', function () {
    return view('guarantees');
});

Route::get('/shipping&returns', function () {
    return view('shipping&returns');
});

Route::get('/terms', function () {
    return view('terms');
});

Route::post('/contact-us/contact', 'ContactController@postMess')->name('contact.store');

Route::get('/products-list', function () {
    return view('products-list/products-list');
});

Route::get('/blog', function () {
    $postss = App\Post::latest()->paginate(9);
    return view('blog/index')->withPostss($postss);
});


Route::get('/blog/{slug}', ['as' => 'post.single', 'uses' => 'PostController@getSingle' ]) -> where('slug', '[\w\d\-\_]+');


Route::get('/collections/birthday', 'CollectionController@getBirthday')->name('collection.birthday');
Route::get('/collections/compositions', 'CollectionController@getCompositions')->name('collection.compositions');
Route::get('/collections/congratulation', 'CollectionController@getCongratulation')->name('collection.congratulation');
Route::get('/collections/gifts', 'CollectionController@getGifts')->name('collection.gifts');
Route::get('/collections/new-baby', 'CollectionController@getNewbaby')->name('collection.newbaby');
Route::get('/collections/thank-you', 'CollectionController@getThankyou')->name('collection.thankyou');
Route::get('/collections/weddings', 'CollectionController@getWeddings')->name('collection.weddings');
Route::get('/collections/looseflowers', 'CollectionController@getLooseflowers')->name('collection.looseflowers');
Route::get('/collections/all', 'CollectionController@getAll')->name('collection.all');
Route::post('/rating', 'FlowerController@postPost')->name('posts.post');

Route::middleware('auth:web')->group(function () {
  Route::get('/account', function () {
    $cards = App\Card::latest()->get();
    $ships = App\Ship::latest()->get();
      return view('account', compact('ships'))->withCards($cards);
  });
  Route::resource('/account/users', 'UserController');
  Route::post('/account/update','UserController@updateUser');

  Route::resource('/account/cards', 'CardController');
  Route::post('/account/cards/{id}','CardController@update');


  Route::post('/checkout/addresses/', 'ShipController@indexCheckout')->name('ship.index');
  Route::resource('/account/addresses', 'ShipController');
  Route::post('/account/addresses/{id}','ShipController@update');

  Route::post('comment/{post_id}', ['as' => 'comment.store', 'uses' => 'CommentController@store']);
});


Route::middleware('auth:admin')->group(function (){
  Route::get('/admin', function () {
      return view('admin/index');
  });

  Route::get('/admin/contacts', 'ContactController@index');
  Route::get('/admin/contacts/{id}', 'ContactController@show')->name('contacts.show');
  Route::resource('/admin/products', 'FlowerController');
  Route::resource('/admin/collections', 'CollectionController');
  Route::resource('/admin/posts', 'PostController');
  Route::post('/posts/{id}','PostController@update');
  Route::post('/collections/{id}','CollectionController@update');
  Route::post('/products/{id}','FlowerController@update');
  Route::get('/admin/comments', 'CommentController@index');
  Route::get('/admin/comments/{id}', 'CommentController@show')->name('comments.show');
  Route::get('/admin/users', 'UserController@index');
});

Route::get('admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
