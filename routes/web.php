<?php

Route::get('/main', function () {
    if(\Auth::user() && \Auth::user()->psychotype_id == 0)
    {
        return redirect()->route('user_test');
    }
    return view('main');
});

Route::get('/',function() {

    if(\Auth::user() && \Auth::user()->psychotype_id == 0)
    {
        return redirect()->route('user_test');
    }
    
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

            if(\Auth::user() && \Auth::user()->psychotype_id == 0)
            {
                return redirect()->route('user_test');
            }

            return view('user/main');
        });

        Route::get('search','SearchController@index');

        Route::post('search','SearchController@search')->name('search');
        
        Route::get('test',function (){
            return view('user/test');
        })->name('user_test');
    }
);


Route::post('test','UserController@test')->name('test');