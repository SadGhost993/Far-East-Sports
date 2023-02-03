<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\TeamController;
use \App\Http\Controllers\TournamentController;
use \App\Http\Controllers\TournamentEventController;
use \App\Http\Controllers\KindOfSportController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::apiResource('kind_of_sport', KindOfSportController::class)->except(['show']);
Route::apiResource('team', TeamController::class)->except(['show', 'update']);
Route::apiResource('tournament', TournamentController::class)->except(['show']);
Route::apiResource('TournamentEvent', TournamentEventController::class)->except(['show']);
