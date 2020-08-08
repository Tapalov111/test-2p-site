@extends('layouts.app')

@section('content')
    @foreach($messages as $message)
        {{\App\User::where('id',$message->sender_id)->first()->name}}
        :
        {{\App\Message::where('from',$message->sender_id)->orwhere('to', $message->sender_id)->get()->reverse()->first()->text }}
        <hr>
    @endforeach
@endsection