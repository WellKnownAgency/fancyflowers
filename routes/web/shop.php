<?php

Route::get('/collections/filter', 'CollectionController@filter')->name('collection.filter');
Route::get('/collections/birthday', 'CollectionController@getBirthday')->name('collection.birthday');
Route::get('/collections/compositions', 'CollectionController@getCompositions')->name('collection.compositions');
Route::get('/collections/congratulation', 'CollectionController@getCongratulation')->name('collection.congratulation');
Route::get('/collections/gifts', 'CollectionController@getGifts')->name('collection.gifts');
Route::get('/collections/new-baby', 'CollectionController@getNewbaby')->name('collection.newbaby');
Route::get('/collections/thank-you', 'CollectionController@getThankyou')->name('collection.thankyou');
Route::get('/collections/weddings', 'CollectionController@getWeddings')->name('collection.weddings');
Route::get('/collections/looseflowers', 'CollectionController@getLooseflowers')->name('collection.looseflowers');
Route::get('/collections/all', 'CollectionController@getAll')->name('collection.all');

Route::get('/products-list', function () {
    return view('products-list/products-list');
});
Route::get('product/{slug}', ['as' => 'product.single', 'uses' => 'FlowerController@getSingle' ])-> where('slug', '[\w\d\-\_]+');
Route::get('product/{flower}/price-of-size/{size}', ['as' => 'product.price-of-size', 'uses' => 'FlowerController@priceOfSize' ]);

Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart', 'CartController@store')->name('cart.store');
Route::patch('/cart/{flower}', 'CartController@update')->name('cart.update');
Route::delete('/cart/{flower}', 'CartController@destroy')->name('cart.destroy');


Route::get('/checkout-complete', 'CheckoutController@checkoutComplete')->name('checkout.complete');
Route::get('/checkout', 'CheckoutController@index')->name('checkout.index');
Route::post('/checkout', 'CheckoutController@store')->name('checkout.store');
Route::post('/checkout/validate-field', 'CheckoutController@validateField')->name('checkout.validate-field');
Route::post('/checkout/validate-form', 'CheckoutController@validateForm')->name('checkout.validate-form');
Route::middleware('auth:web')->group(function () {
    Route::post('/checkout/addresses/', 'ShipController@indexCheckout')->name('ship.index');
});

Route::middleware('auth:web')->group(function () {
    Route::post('/coupon', 'CouponController@store')->name('coupon.store');
    Route::post('/coupon/apply', 'CouponController@apply')->name('coupon.apply')->middleware('auth');
    Route::post('/coupon/cancel', 'CouponController@cancel')->name('coupon.cancel')->middleware('auth');
});

Route::middleware('auth:web')->group(function () {
    Route::post('comment/{post_id}', ['as' => 'comment.store', 'uses' => 'CommentController@store']);
});

Route::post('/rating', 'FlowerController@postPost')->name('posts.post');
