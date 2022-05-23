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

Route::prefix('client')->group(function() {
    Route::get('/', 'ClientController@index');
    Route::post('/client_store', 'ClientController@store')->name('client_store');
    Route::get('/client_edit/{id}', 'ClientController@edit')->name('client_edit');
    Route::post('/update_client', 'ClientController@update')->name('update_client');
    Route::get('/delete_client/{id}', 'ClientController@destroy')->name('delete_client');
});
