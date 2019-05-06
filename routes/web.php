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


Route::get('/favoritemovie', function () {
    return view('select');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/home','HomeController');

Route::get('/favorites', 'FavoritesController@index');

Route::post('/favorites/show', 'FavoritesController@show');

Route::resource('/movies', 'moviesController');










