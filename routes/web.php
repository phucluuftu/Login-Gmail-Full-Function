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
    Route::resource('tickets', 'TicketsController', ['except' => ['destroy']]);
    Route::post('tickets/{ticket}/comments', 'CommentController@store')->name('comments.store');
    Route::post('tickets/{ticket}/test_cases', 'TestCaseController@store')->name('test_cases.store');
    Route::patch('tickets/{ticket}/test_cases', 'TestCaseController@update')->name('test_cases.update');
    Route::post('tickets/{ticket}/rating', 'RatingController@store')->name('rating.store');
});
