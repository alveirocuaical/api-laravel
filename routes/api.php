<?php

use App\Http\Controllers\Api\V1\PostoController;
use App\Http\Controllers\Api\V2\PostController;
use App\Http\Controllers\Api\LoginController;
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

// si se tiene el mismo nombre de archivos es necesario usar un alias en use 

//v1
Route::apiResource('v1/posts', PostoController::class)
        ->only(['show','index','destroy'])
        ->middleware('auth:sanctum');

//v2
Route::apiResource('v2/posts', PostController::class)
        ->only(['show','index','destroy'])
        ->middleware('auth:sanctum');

//Login

Route::post('login',[LoginController::class,'login'])
        ;