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

 Route::get('/', 'HomeController@index')->name('welcome');
Auth::routes();
 Route::get('register/business', function () {
     return view('auth.profile.business');
 });
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('profile', 'LoginsController');

Route::post('/select', 'SelectController@select');
Route::post('profile/select', 'SelectController@select');
Auth::routes();
Route::post('search','SelectController@search')->name('search');
