<?php

Route::middleware('auth:admin')->group(function (){
    Route::get('/admin', 'AdminPageController@index');
    Route::get('/admin/contacts', 'ContactController@index');
    Route::get('/admin/contacts/{id}', 'ContactController@show')->name('contacts.show');
    Route::resource('/admin/products', 'FlowerController');
    Route::resource('/admin/collections', 'CollectionController');
    Route::resource('/admin/posts', 'PostController');
    Route::resource('/admin/coupons', 'CouponAdminController');
    Route::post('/posts/{id}','PostController@update');
    Route::post('/collections/{id}','CollectionController@update');
    Route::post('/products/{id}','FlowerController@update');
    Route::get('/admin/comments', 'CommentController@index');
    Route::get('/admin/comments/{id}', 'CommentController@show')->name('comments.show');
    Route::get('/admin/users', 'UserController@index');
    Route::get('/admin/coupons', 'CouponAdminController@index');
    Route::get('/admin/products/{id}/delete', ['uses' => 'FlowerController@destroy', 'as' => 'flower.delete']);
    Route::get('/admin/comments/{id}/delete', ['uses' => 'CommentController@destroy', 'as' => 'comment.delete']);
    Route::get('/admin/users/{id}/delete', ['uses' => 'UserController@destroy', 'as' => 'user.delete']);
    Route::get('/admin/collections/{id}/delete', ['uses' => 'CollectionController@destroy', 'as' => 'collection.delete']);
    Route::get('/admin/posts/{id}/delete', ['uses' => 'PostController@destroy', 'as' => 'post.delete']);
    Route::get('/admin/coupons/{id}/delete', ['uses' => 'CouponAdminController@destroy', 'as' => 'coupon.delete']);
    Route::get('/admin/contacts/{id}/delete', ['uses' => 'ContactController@destroy', 'as' => 'contact.delete']);
});

Route::get('admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
