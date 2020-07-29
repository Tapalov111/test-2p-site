<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }

    public function test (Request $request)
    {
        $E = $I = $S = $N = $T = $F = $J = $P = 0;
        
        $psychotype = '';

        for($i = 1;$i < 71; $i++)
        {
            $value      =   "q$i";
            switch ($request->$value) {
                case "E":
                    $E++;
                    break;
                case "I":
                    $I++;
                    break;
                case "S":
                    $S++;
                    break;
                case "N":
                    $N++;
                    break;
                case "T":
                    $T++;
                    break;
                case "F":
                    $F++;
                    break;                      
                case "J":
                    $J++;
                    break;                      
                case "P":
                    $P++;
                    break;
            }
        }

        if($E > $I)
        {
            $psychotype .= "E";
        } else {
            $psychotype .= 'I';
        }

        if($S > $N)
        {
            $psychotype .= 'S';
        } else {
            $psychotype .= 'N';
        }

        if($T > $F)
        {
            $psychotype .= 'T';
        } else {
            $psychotype .= 'F';
        }

        if($J > $P)
        {
            $psychotype .= 'J';
        } else {
            $psychotype .= 'P';
        }
        
        $psychotype_id = \App\psychotype::where('code',$psychotype)->first()->id;
        \Auth::user()->update([
            'psychotype_id' =>  $psychotype_id,
        ]);
        header('Location:/main');
    }
}
