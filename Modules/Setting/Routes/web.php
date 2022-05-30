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

Route::prefix('setting')->group(function() {
    Route::get('/app_setting', 'SettingController@index')->name('app_setting');
    Route::post('/appinfo_update', 'SettingController@update')->name('appinfo_update');


    Route::get('lang','LanguageController@index')->name('lang.index');
    Route::post('lang-store','LanguageController@store')->name('lang.store');
    Route::get('lang-edit/{slug}','LanguageController@edit')->name('lang.edit');
    Route::post('lang-update/{slug}','LanguageController@update')->name('lang.update');
});
