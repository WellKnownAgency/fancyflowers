<?php

Auth::routes();

// Main Pages Routes
Route::get('/', 'PageController@index');

Route::get('/test', function () {
    return view('test');
});

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
