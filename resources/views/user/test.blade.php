@extends('layouts.app_user')

@section('content')
<div class="container" >
    <div class="container">
        <form action="{{ route('test') }}" method="POST">
        @csrf
            <input type="hidden" value="take" name="take">
            <?php
                $i = 1; //Для нумеровки вопросов
            ?>
            @foreach(\App\question::all() as $question)
                <div>
                    <p><strong> {{ $question->question}} </strong></p>
                    <label><input name='{{  "q$i" }}' type="radio" value="{{ $question->variant1Value }}" required>{{ $question->variant1}}</label>
                    <label><input name='{{  "q$i" }}' type="radio" value="{{ $question->variant2Value }}" required>{{ $question->variant2}}</label>
                    <hr>
                </div>
                <?php
                    $i++;
                ?>
            @endforeach
            <button type="submit">Результат</button>
        </form>
    </div>
</div>
@endsection