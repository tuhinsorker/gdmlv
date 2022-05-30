<?php
use Illuminate\Support\Facades\Route;
use Modules\User\Http\Controllers\DeviceRequestController;

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
    Route::resource('user', UserController::class);

    Route::get('user-profile', 'UserController@profile')->name('user-profile');

    Route::get('device-request', 'DeviceRequestController@index')->name('device-request');

    Route::get('login-logout-log', 'DeviceRequestController@loginLogoutLog')->name('login-logout-log');
    Route::get('login-logout-count', 'DeviceRequestController@loginLogoutCount')->name('login-logout-count');

});

// Route::prefix('user')->group(function() {
//     Route::get('/', 'UserController@index');
// });
