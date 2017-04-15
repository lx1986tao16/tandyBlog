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

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function(){
    Route::get('signin', 'SignController@index')->name('admin_signin');
    Route::post('signin', 'SignController@store')->name('admin_signin');
});

Route::group(['namespace' => 'Admin', 'middleware' => 'auth', 'prefix' => 'admin'], function () {
    Route::get('/', 'HomeController@index')->name('admin_home');
    Route::resource('article', 'ArticleController');
});

Route::get('/home', 'HomeController@index');
