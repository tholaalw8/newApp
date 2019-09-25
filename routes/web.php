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



Route::get('/','PagesController@home');

Route::get('/ticket','TicketsController@index');
Route::get('/contact','TicketsController@create');
Route::get('/createMovie','MoviesController@create');


Route::get('/movie','MoviesController@index');

Route::get('/ticket/{slug?}','TicketsController@show');
Route::get('/movie/{slug?}','MoviesController@show');


Route::get('/ticket/{slug?}/edit','TicketsController@edit');
Route::get('/movie/{slug?}/edit','MoviesController@edit');


Route::post('/contact','TicketsController@store');
Route::post('/createMovie','MoviesController@store');
Route::post('/ticket/{slug?}/edit','TicketsController@update');
Route::post('/movie/{slug?}/edit','MoviesController@update');
Route::post('/ticket/{slug?}/delete','TicketsController@destroy');
Route::post('/movie/{slug?}/delete','MoviesController@destroy');

Route::post('/comment','CommentsController@newComment');

   













