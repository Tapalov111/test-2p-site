@extends('layouts.app_user')

@section('content')
<div class="container" style="border-color:black;border-radius:5px">
    @foreach($messages as $message)
        {{$message->text}} <br>
    @endforeach
</div>
@endsection