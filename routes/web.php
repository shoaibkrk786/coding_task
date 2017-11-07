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

Route::get('/','TestController@index');
Route::get('/registration','TestController@reg')->name('registration');
Route::get('/login','TestController@log')->name('login');
Route::get('/questionairs','TestController@result')->name('questionairs');
Route::get('/questionairs/data','TestController@questionair')->name('data');
Route::get('/questionairs/create/{id}','TestController@question');


Route::post('user/registration','TestController@userstore')->name('userstore');
Route::post('user/login','TestController@login_user')->name('userlogin');
Route::get('/logout','TestController@logout')->name('logout');

Route::post('/questionairs/store','TestController@storequestionair')->name('store_q');
Route::post('/question/store','TestController@storequestion')->name('store');
Route::get('/questionairs/delete/{id}','TestController@delete');
