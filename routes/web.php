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
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/auth/google', 'SocialAuthController@redirectToProvider');
Route::get('/auth/google/callback', 'SocialAuthController@handleProviderCallback');
Auth::routes();
Route::group(['middleware' => ['socialauth']], function () {
    Route::resource('tickets', 'TicketsController', ['except' => ['edit', 'destroy']]);
});
