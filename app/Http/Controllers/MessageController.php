<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = \App\User::where('id', '!=', auth()->id() )->get();

        $messages =  Message::select(\DB::raw('`from` as sender_id , `to` as sender_id '))
            ->where( 'from',auth()->id() )
            ->orwhere('to',auth()->id() )
            ->get()->reverse();

        $messages = $messages->where('sender_id','!=',auth()->id());
        $messages = $messages->unique('sender_id');
        
        return view('user.message.index',[
            'messages'  =>  $messages,
        ]);
        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $messages = Message::where( function($q) use($id) {
            $q->where('from',auth()->id());
            $q->where('to', $id );
        })->orwhere( function($q) use($id) {
            $q->where('to',auth()->id());
            $q->where('from', $id );
        })->get(); // (a = 1 AND b = 2) OR (c = 1 AND d = 2)
        
        return view('user.message.show',[
            'messages'   =>  $messages,
        ]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
        //
    }
}
