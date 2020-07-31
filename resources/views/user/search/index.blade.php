@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{ route('search') }}" method="post">
            @csrf

            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">Искать</label>

                <div class="col-md-6">
                    <select class="form-control" name="search">
                        <option value="1">Все</option>
                        <option value="2">Совместимые</option>
                    </select>

                </div>
            </div>

            
            <div class="form-group row">
                <label for="city_id" class="col-md-4 col-form-label text-md-right">Пол</label>

                <div class="col-md-6">
                
                    <select class="form-control" name="gender">
                        <option value="1">Мужчина</option>
                        <option value="2">Женщина</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="city_id" class="col-md-4 col-form-label text-md-right">Город</label>

                <div class="col-md-6">
                
                    <select class="form-control" name="city_id">
                        <option value="0">Все</option>
                        @foreach(\App\city::all() as $city )
                            <option value="{{$city->id}}">{{$city->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            
            <div class="form-group row">
                <label for="city_id" class="col-md-4 col-form-label text-md-right">Возраст</label>

                <div class="col-md-6">
                
                    <select class="form-control" name="birthday">
                        <option value="0">Все</option>
                        @for($i = 18; $i < 80;$i++ )
                            <option value="{{$i}}">{{$i}}</option>
                        @endfor
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-4"></div>
                <div class="col-md-6">
                    <button class=" form-control btn-primary" type="submit">Искать </button>
                </div>
            </div>
        </form>
    </div>
    <br>
    @if(isset($users))
        <div class="container">
            <table class="table table-bordered">
                <thead>
                    <tr>
                    <th scope="col">Имя</th>
                    <th scope="col">Birthday</th>
                    <th scope="col">psychotype_id</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->birthday}}</td>
                        <td>{{$user->psychotype_id}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
@endsection