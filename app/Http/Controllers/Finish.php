<?php
/**
 * Quiz-System-in-PHP-Laravel
 * Author: Berkan Yeşilyurt (https://github.com/BerkanYesilyurt)
 * Repository: https://github.com/BerkanYesilyurt/Quiz-System-in-PHP-Laravel
 */
namespace App\Http\Controllers;


use Illuminate\Http\Request;

class Finish extends Controller
{
    public function index(Request $request){

    if(request()->session()->has('time') && request()->session()->has('questions')){
    session(['finished' => true]);
    return view('finish', ['last' => request()->session()->get("questions"), 'request' => $request]);
    }else{
    return redirect('/');
    }

    }

}
