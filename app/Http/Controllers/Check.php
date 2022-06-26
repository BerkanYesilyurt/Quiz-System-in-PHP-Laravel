<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Check extends Controller
{
    public function bringThem(){

        if(request()->session()->has('time') && request()->session()->has('questions')){
            $questions = DB::table('quiz_questions')
                ->limit(request()->session()->get("questions"))
                ->simplePaginate(1);

            return view('welcome', [
                'questions' => $questions
            ]);
        }else{
        return view('welcome');
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'time' => 'required|numeric|min:15|max:120',
            'questions' => 'required|numeric|min:1|max:10',
        ]);


        session(['time' => $request->input('time'), 'questions' => $request->input('questions')]);

        return redirect('/');
    }
}
