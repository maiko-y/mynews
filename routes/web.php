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
    return view('welcome');
});
//追記
Route::group(['prefix' => 'admin'],
function() {
    Route::get('news/create',
    'Admin\NewsController@add')->middleware('auth');
});
//課題３
Route::group(['prefix' => 'XXX'],
function() {
    Route::get('AAAController@bbb');
});
Auth::routes();//認証関係のルーティングを定義

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
     Route::get('news/create', 'Admin\NewsController@add');//ブラウザから URLを入力して Webページを開くときには、GETメソッド
     Route::post('news/create', 'Admin\NewsController@create');
     Route::get('news', 'Admin\NewsController@index');
     Route::get('news/edit', 'Admin\NewsController@edit'); // 追記
     Route::post('news/edit', 'Admin\NewsController@update'); // 追記# 追記//URLに対して情報を要求するだけでなく、クライアントからさまざまなデータを送信することが出来る
     Route::get('news/delete', 'Admin\NewsController@delete');
     
     Route::get('profile/create','Admin\ProfileController@add');
     Route::get('profile/edit','Admin\ProfileController@edit');
     Route::post('profile/create', 'Admin\ProfileController@create'); 
     Route::post('profile/edit', 'Admin\ProfileController@update'); 
});
