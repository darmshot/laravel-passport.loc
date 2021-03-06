<?php

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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::middleware('auth:api')->post('/users',[\App\Http\Controllers\Api\UserController::class,'index']);
Route::middleware('auth:api')->post('/user',[\App\Http\Controllers\Api\AuthController::class,'user']);

Route::post('login', [\App\Http\Controllers\Api\AuthController::class, 'login']);

Route::post('logout', [\App\Http\Controllers\Api\AuthController::class, 'logout']);
