<?php

Route::get('collections/our-friends-florists', 'CollectionController@ourfriendsflorists')->name('collections.ourfriendsflorists');
Route::get('/collections/filter', 'CollectionController@filter')->name('collections.filter');
Route::get('/collections/{slug}', 'CollectionController@show')->name('collection');
Route::get('/collections', 'CollectionController@all')->name('collections');

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
