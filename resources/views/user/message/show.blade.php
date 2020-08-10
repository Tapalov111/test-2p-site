@extends('layouts.app_user')

@section('content')
<div class="container" id="messageC" style="background-color:grey;border-radius:0.25rem;max-height: 500px;min-height:100px;bottom:40px;overflow: scroll;border-left: 1px solid #a6a6a6;">
    <ul style="list-style-type: none;padding-left: 0;">
    @if($messageStatus->status == 0)
    <li>
        <h2>Для отпраки сообшения вам нужно заплатить</h2>
    </li>
    @else
        @foreach($messages as $message)
            @if($message->from != \Auth::user()->id)
            <li style="text-align:left;display: flex;padding: 2px;position:relative;cursor: pointer;">
                <span style="max-width: 200px;border-radius: 5px;padding:12px;display:inline-block;background-color: #b2b2b2;">
            @else
            <li style="text-align:right;padding: 2px;position:relative;cursor: pointer;">
                <span style="max-width: 200px;border-radius: 5px;padding:12px;display:inline-block;background-color: #81c4f9;">
            @endif
                {{$message->text}} 
                </span>
            </li>
        @endforeach
        <div class="app"></div>
    @endif
    </ul>
</div>
        <br><br><br>
<div>
    <div class="container" >
        <form action="/api/message/store" id="form" method="post" >
            @csrf
            <input type="hidden" name="from" value="{{ \Auth::user()->id}}">
            <input type="hidden" name="to" value="{{ $friend_id }}">
            <div class="container" style="position: fixed;padding:10px;animation: 1s;animation-direction: alternate;bottom:30px;">
                <div class="row">
                    <input type="text" class="form-control" name="text" style="width:60%">
                    <div class="container" style="width:40%">
                        <button class="btn btn-primary"  ><small> Отправить</small></button>
                    </div>
                </div>
            </div>        
        </form>
    </div>
</div>
@endsection