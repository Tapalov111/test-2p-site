<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('getAll','MessageController@getAll');

Route::post('/message/store', function(Request $request){

    $messageStatus = \App\MessageStatus::where( function($q) use($request)  {
        $q->where('user_one', $request->from );
        $q->where('user_two', $request->to );
    })->orwhere( function($q) use($request) {
        $q->where('user_two', $request->from );
        $q->where('user_one', $request->to );
    })->first();

    if( !isset($messageStatus->status)  )
    {
        \App\MessageStatus::create([
            'user_one'  =>  $request->from,
            'user_two'  =>  $request->to,
        ]);
    }

    
    \App\Message::create([
        'from'  =>  $request->from,
        'to'    =>  $request->to,
        'text'  =>  $request->text,
    ]);
});



Route::post('/message/getReceived', function(Request $request)
{
    $messages = \App\Message::where('from',$request->to)
                ->where('to',$request->from)
                ->where('read',false)
                ->get();

    \App\Message::where('from',$request->to)
                ->where('to',$request->from)
                ->where('read',false)
                ->update([
                    'read'  =>  true,
                ]);
    return response()->json($messages);
});