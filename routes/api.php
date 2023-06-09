<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AventureController;
use App\Http\Controllers\ChallengeController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\NivelController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
}); 


Route::group([
    'prefix' => 'auth'
], function () {
    Route::post('register', [AuthController::class,'signUp']);
    Route::post('login',[AuthController::class,'login']);

    Route::group([
      'middleware' => 'auth:api'
    ], function() {
        Route::get('logout', [AuthController::class,'logout']);
        Route::get('user', [AuthController::class,'user']);
        Route::post('joinAventure', [AventureController::class,'joinToAventure']);
        Route::get('aventure', [AventureController::class,'index']);
        Route::get('aventure/level/{id}', [LevelController::class,'showLevelsByAventure']);
        Route::get('aventure/level/challenge/{idLevel}', [ChallengeController::class,'getChallengesByLevel']);
    });
});