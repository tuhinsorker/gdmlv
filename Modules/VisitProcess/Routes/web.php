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

Route::middleware(['web'])->group(function () {
    Route::resource('visit-dashboard', VisitProcessController::class);
    Route::resource('schedule', ScheduleController::class);
    Route::resource('route-plane', RoutePlaneController::class);
    Route::resource('exception-visit', ExceptionController::class);
    Route::resource('images', ImagesController::class);
});
