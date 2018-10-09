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

Route::get('/', 'Auth\LoginController@getLogin')->name("login");
Route::post('/login', 'Auth\LoginController@postLogin');
Route::post('/logout', 'Auth\LoginController@logout')->name("logout");

Route::group(['prefix'=>'member'], function (){
    Route::get('/', 'Backend\MemberController@index')->name('member');
    Route::get('/create', 'Backend\MemberController@create')->name('create');
    Route::post('/store', 'Backend\MemberController@store')->name("store");
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
