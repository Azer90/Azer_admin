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
Route::post('alipay_notify', 'BuyController@alipay_notify')->name('alipay_notify');

Route::group(['prefix' => 'surpport'], function () {

    Route::get('/', 'SurpportController@index')->name('surpport');
    Route::get('help', 'SurpportController@help')->name('help');
    Route::get('problems', 'SurpportController@problems')->name('problems');
    Route::get('library', 'SurpportController@library')->name('library');
    Route::get('/{id}', 'SurpportController@detail')->where('id', '[0-9]+')->name('detail');
});


Route::get('about', 'AboutController@index')->name('about');

Route::get('loading', 'BuyController@load')->name('loading'); //加载页
Route::post('pay', 'BuyController@pay')->name('pay'); //支付

Route::get('tag/{id}', 'TagController@index')->where('id', '[0-9]+')->name('tag'); //标签页