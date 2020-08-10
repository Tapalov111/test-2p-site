<?php

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

Route::get('/profile',function() {

    if(\Auth::user() && \Auth::user()->psychotype_id == 0)
    {
        return redirect()->route('user_test');
    }
    
    return view('profile');
});

//Ниже идут роуты на страницы и вкладки


// // Route::get('/message',function() {
// //     return view('message');
// // }) -> name('message');

// Route::get('/elect',function() {
//     return view('elect');
// }) -> name('elect');

// Route::get('/liked',function() {
//     return view('liked');
// })-> name ('liked');

// Route::get('/guest',function() {
//     return view('guest');
// }) -> name('guest');

// Route::get('/profile',function() {
//     return view('profile');
// }) -> name('profile');

// Route::get('/payments',function() {
//     return view('payments');
// }) -> name('payments');

// Route::get('/about',function() {
//     return view('about');
// }) -> name('about');

// Route::get('/welcome',function() {
//     return view('welcome');
// }) -> name('welcome');

// // Route::get('/login',function() {
// //     return view('login');
// // }) -> name('login');

// // Route::get('/register',function() {
// //     return view('register');
// // }) -> name('register');

// Route::get('/oprosnik',function() {
//     return view('user/test');
// }) -> name('test');

// Route::get('/oprosnik-2',function() {
//     return view('user/phyzotest');
// }) -> name('phyzotest');

Route::resource('/tima/message','MessageController');



Route::post('test','UserController@test')->name('test');

Route::get('script', function(){
    return view('scrip');
});