<?php

Auth::routes();

// Main Pages Routes
Route::get('/', 'PageController@index');

Route::get('/sitemap.xml', function () {
    $posts = App\Post::get();
    $flowers = App\Flower::get();
    return view('sitemap')->withPosts($posts)->withFlowers($flowers);
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

Route::get('/shipping', function () {
    return view('shipping');
});

Route::get('/terms', function () {
    return view('terms');
});

Route::post('/contact-us/contact', 'ContactController@postMess')->name('contact.store');
