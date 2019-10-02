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





Route::group(array('prefix' => 'admin','namespace' => 'Admin','middleware' => 'manager'), function(){
    Route::get('users','UsersController@index');

});










Route::get('/','PagesController@home');

Route::get('/ticket','TicketsController@index');
Route::get('/contact','TicketsController@create')->middleware('auth');;
Route::get('/createMovie','MoviesController@create')->middleware('auth');;


Route::get('/movie','MoviesController@index');

Route::get('/ticket/{slug?}','TicketsController@show')->middleware('auth');;
Route::get('/movie/{slug?}','MoviesController@show')->middleware('auth');;


Route::get('/ticket/{slug?}/edit','TicketsController@edit')->middleware('auth');
Route::get('/movie/{slug?}/edit','MoviesController@edit')->middleware('auth');


Route::post('/contact','TicketsController@store');
Route::post('/createMovie','MoviesController@store');
Route::post('/ticket/{slug?}/edit','TicketsController@update');
Route::post('/movie/{slug?}/edit','MoviesController@update');
Route::post('/ticket/{slug?}/delete','TicketsController@destroy')->middleware('auth');;
Route::post('/movie/{slug?}/delete','MoviesController@destroy')->middleware('auth');;

Route::post('/comment','CommentsController@newComment')->middleware('auth');;







Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
