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

// Route::prefix('role')->group(function() {
// });

Route::middleware(['web'])->group(function () {
    Route::resource('roles', RoleController::class);
    Route::get('/user-assign-role','RoleController@getUserAssign')->name('user.assign.role');
    Route::post('/user-assign-role/store','RoleController@getUserAssignRoleStore')->name('user.assign.role.store');
    Route::get('/get-user-role','DefaultController@getUserRole')->name('get-user-role');
});
