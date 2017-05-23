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

Route::get('/home', 'HomeController@index');

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function(){
    Route::get('signin', 'SignController@index')->name('admin_signin');
    Route::post('signin', 'SignController@store')->name('admin_signin');
    Route::delete('signout', 'SignController@destroy')->name('admin_signout');
});

Auth::routes();

Route::group(['namespace' => 'Admin', 'middleware' => 'auth', 'prefix' => 'admin'], function () {
    Route::get('/', 'DashboardController@index')->name('admin_home');
    Route::get('get_tags', 'TagsController@getTags')->name('get_tags');
    Route::resource('category', 'CategoryController');
    Route::resource('tags', 'TagsController');
    Route::resource('article', 'ArticleController');
    Route::patch('update_publish/{id}', 'ArticleController@update_publish')->name('update_publish');
});
