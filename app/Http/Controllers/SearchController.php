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
        
        if($request->city_id == '0') //Если city_id равен 0 то тогда это значит юзер выбрал все
        {
            $city_id = '*';
        } else {
            $city_id = $request->city_id;
        }
   
        //Настраиваем дату для проверки возраста
        $year_now = date("Y");
        $birthday_year = intval($year_now) - $request->birthday;

        $format = 'Y-m-d';
        $max_date = $birthday_year.date('-m-d');
        if($request->birthday ==0)
        {
            $min_date = '0'.date('-m-d');
        } else {

            $min_date = ($birthday_year - 1).date('-m-d');
        }

        $max_date = \Carbon\Carbon::createFromFormat($format, $max_date);
        $min_date = \Carbon\Carbon::createFromFormat($format, $min_date);
        // Конец проверки


        if($request->search == 2)   //Проверяем search если 2 это значит что пользоваель выбрал соместимые  
        {
            $users = \App\User::whereIn('psychotype_id',[$psychotype->very_compatible_id,$psychotype->compatible_id])
                    ->where('id','!=',\Auth::user()->id)
                    ->where('gender',$request->gender)
                    ->where('city_id',$city_id)
                    ->get();
        } else {

            if($city_id == '*') //Проверка городов
            {
                $users = \App\User::where('gender',$request->gender)
                        ->where('id','!=',\Auth::user()->id)
                        ->whereDate('birthday','<',$max_date)
                        ->whereDate('birthday','>',$min_date)
                        ->get();
            } else {

                $users = \App\User::where('gender',$request->gender)
                        ->where('id','!=',\Auth::user()->id)
                        ->whereDate('birthday','<',$max_date)
                        ->whereDate('birthday','>',$min_date)
                        ->where('city_id',$city_id)
                        ->get();
            }
        }

        return view('user.search.index',[
            'users' =>  $users,
        ]);
    }
}
