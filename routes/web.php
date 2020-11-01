<?php

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

Route::get('/', function () {
    return view('top');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/hinmeiadd', 'MasterController@index')->name('hinmeiadd');
Route::get('/tokuisakiadd', 'tokuisakiMasterController@index')->name('tokuisakiadd');
Route::get('/seisanshaAdd', 'seisanshaMasterController@index')->name('seisanshaAdd');
Route::get('/jushoAdd', 'jushoMasterController@index')->name('jushoAdd');
Route::get('/taniAdd', 'taniMasterController@index')->name('taniAdd');
