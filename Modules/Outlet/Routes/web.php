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


Route::prefix('outlet')->middleware('auth')->group(function() {

    Route::get('/', 'OutletController@index');
    Route::get('/create', 'OutletController@create')->name('create');
    Route::post('/store', 'OutletController@store')->name('store');

    Route::get('/outlet_edit/{id}', 'OutletController@edit')->name('outlet_edit');
    Route::post('/update_outlet', 'OutletController@update')->name('update_outlet');
    Route::post('/delete_outlet/{id}', 'OutletController@destroy')->name('delete_outlet');

    Route::get('/type', 'OutletTypeController@index');
    Route::get('/create_type', 'OutletTypeController@index');
    Route::post('/outlet_type_store', 'OutletTypeController@store')->name('outlet_type_store');
    Route::post('/type_edit/{id}', 'OutletTypeController@edit')->name('type_edit');
    Route::post('/update_type', 'OutletTypeController@update')->name('update_type');
    Route::post('/delete_type/{id}', 'OutletTypeController@destroy')->name('delete_type');

    Route::get('/channel', 'ChannelController@index');
    Route::get('/create_channel', 'ChannelController@index');
    Route::post('/outlet_channel_store', 'ChannelController@store')->name('outlet_channel_store');
    Route::post('/channel_edit/{id}', 'ChannelController@edit')->name('channel_edit');
    Route::post('/update_channel', 'ChannelController@update')->name('update_channel');
    Route::post('/delete_channel/{id}', 'ChannelController@destroy')->name('delete_channel');


});
