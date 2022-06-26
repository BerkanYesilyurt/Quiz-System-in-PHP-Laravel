<?php

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Check;
use Illuminate\Support\Facades\Session;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [Check::class, 'bringThem']);

Route::post('check-first', [Check::class, 'store']);
Route::view('/quiz', 'quiz')->name("quiz.start");


Route::get('/logout', function() {
    Session::flush();
    return redirect('/')->with('Success', 'Successfully logged out.');
})->name('logout');
