<?php

Route::get('/main', function () {
    return view('main');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
