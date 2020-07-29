<?php

Route::get('/main', function () {
    return view('main');
});

Route::get('/',function() {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(
    [
        'prefix'        => 'user',
        'middleware'    => 'auth',
    ],
    function () {
        Route::get('/',function(){
            return view('user/main');
        });
        Route::get('test',function (){
            return view('user/test');
        });
    }
);


Route::post('test','UserController@test')->name('test');