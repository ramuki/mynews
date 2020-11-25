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

//PHP/Laravel 09 応用課題 3
Route::get('XXX', 'AAAController@bbb');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::get('news/create', 'Admin\NewsController@add');
    Route::post('news/create', 'Admin\NewsController@create');
//PHP/Laravel 09 応用課題 4
    Route::get('profile/create', 'Admin\ProfileController@add');
    Route::get('profile/edit', 'Admin\ProfileController@edit');
//PHP/Laravel 13 応用課題 3    
    Route::post('profile/create', 'Admin\profileController@create');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
