<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('page/welcome');
});

Route::get('/rules', function (){
   return view('page/rules');
});

Route::get('/about', function (){
   return view('page/about');
});

Route::get('/event', function (){
   return view('page/event');
});

Route::get('/broadcast', function (){
   return view('page/broadcast');
});

Route::get('/division', function (){
   return view('page/divi');
});

Route::get('/scout', function (){
   return view('page/scout');
});

Route::get('/tournament', function (){
   return view('page/tournament');
});

Route::get('/404', function (){
   return view('page/404');
});

Route::get('/auth', function (){
   return view('page/auth');
});

Route::get('/add-goal', function (){
   return view('page/add-goal');
});

Route::get('/change-team', function (){
   return view('page/change-team');
});

Route::get('/penalty', function (){
   return view('page/penalty');
});

Route::get('/scout/{page}', function(){
    return view('page/scout');
});

//Auth::routes();
//
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
