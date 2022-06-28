<?php

use App\Http\Controllers\Finish;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Check;
use Illuminate\Support\Facades\Session;


/*
 * Quiz-System-in-PHP-Laravel
 * Author: Berkan Yeşilyurt (https://github.com/BerkanYesilyurt)
 * Repository: https://github.com/BerkanYesilyurt/Quiz-System-in-PHP-Laravel
*/

Route::get('/', [Check::class, 'bringThem']);

Route::post('check-first', [Check::class, 'store']);
Route::view('/quiz', 'quiz')->name("quiz.start");
Route::get('finish', [Finish::class, 'index'])->name('finish');

Route::get('/logout', function() {
    Session::flush();
    return redirect('/')->with('Success', 'Successfully logged out.');
})->name('logout');
