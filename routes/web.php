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
