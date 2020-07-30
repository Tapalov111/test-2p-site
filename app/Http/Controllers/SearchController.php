<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {
        if(\Auth::user() && \Auth::user()->psychotype_id == 0)
        {
            return redirect()->route('user_test');
        }

        return view('user/search/index');
    }

    public function search(Request $request)
    {        
        if(\Auth::user() && \Auth::user()->psychotype_id == 0) //Проверяем прошёл ли пользователь через тест
        {
            return redirect()->route('user_test');
        }

        $psychotype = \App\psychotype::where('id',\Auth::user()->psychotype_id)->first(); //Просто находим псизотип пользоваетеля для дольнейшей проверки
        
        if($request->city_id == 0) //Если city_id равен 0 то тогда это значит юзер выбрал все
        {
            $city_id = '*';
        } else {
            $city_id = $request->city_id;
        }

        if($request->birthday == 0)
        {
            $birthday = "*";
        } else {
            $birthday = $request->birthday;
        }


        if($request->search == 2)   //Проверяем search если 2 это значит что пользоваель выбрал соместимые  
        {
            $users = \App\User::whereIn('psychotype_id',[$psychotype->very_compatible_id,$psychotype->compatible_id])
                    ->where('id','!=',\Auth::user()->id)
                    ->where('gender',$request->gender)
                    ->where('birthday',$birthday)
                    ->where('city_id',$city_id)
                    ->get();
        } else {
                $users = \App\User::where('gender',$request->gender)
                        ->where('id','!=',\Auth::user()->id)
                        ->where('city_id',$city_id)
                        ->where('birthday',$birthday)
                        ->get();
        }

        return view('user.search.index',[
            'users' =>  $users,
        ]);
    }
}
