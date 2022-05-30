<?php

use App\Http\Controllers\Api\OutletController;
use App\Http\Controllers\Auth\JwtAuthController;
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
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::apiResource('api_outlets',OutletController::class)->middleware('auth:jwt_auth');


Route::controller(JwtAuthController::class)->group(function () {

    Route::post('login', 'login');
    Route::post('register', 'register');

    Route::middleware('auth:jwt_auth')->group(function () {
        Route::post('logout', 'logout');
        Route::post('me', 'me');
    });
   
});


