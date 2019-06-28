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

Route::get('/movies/detail/{id}', 'MoviesController@searchMovieById');


Route::get('/actors', 'ActorsController@index');


Route::get("/prueba", function () {
  return "Hola";
});

Route::get('/peliculas', 'MoviesController@index');
