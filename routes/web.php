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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'IndexController@index')->name('/');
Route::get('software', 'SoftwareController@index')->name('software');
Route::get('download', 'DownloadController@index')->name('download');
Route::get('buy', 'BuyController@index')->name('buy');