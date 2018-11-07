<?php

Route::middleware('auth:web')->group(function () {
    Route::get('/account', function () {
        $cards = App\Card::latest()->get();
        $ships = App\Ship::latest()->get();
        return view('account', compact('ships'))->withCards($cards);
    });
    Route::resource('/account/users', 'UserController');
    Route::post('/account/update', 'UserController@updateUser');

    Route::resource('/account/cards', 'CardController');
    Route::post('/account/cards/{id}', 'CardController@update');

    Route::resource('/account/addresses', 'ShipController');
    Route::post('/account/addresses/{id}','ShipController@update');
});
