<?php

Route::get('/', function () {
    return view('main');
});

<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< HEAD
Route::get('/',function() {
    return view('welcome');
});
=======
Route::get('/boss', function () {
    return view('boss');
});

>>>>>>> b0ba4932f26c6f9640e550679faeaa053b0adf1d
=======
Route::get('/',function() {
    return view('welcome');
});
>>>>>>> Stashed changes
=======
Route::get('/',function() {
    return view('welcome');
});
>>>>>>> Stashed changes

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