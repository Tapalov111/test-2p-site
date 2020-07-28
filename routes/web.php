<?php

Route::get('/', function () {
    return view('main');
});

Route::get('/boss', function () {
    return view('boss');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
