<?php

Route::get('/blog', function () {
    $postss = App\Post::latest()->paginate(9);
    return view('blog/index')->withPostss($postss);
});

Route::get('/blog/{slug}', ['as' => 'post.single', 'uses' => 'PostController@getSingle' ]) -> where('slug', '[\w\d\-\_]+');
