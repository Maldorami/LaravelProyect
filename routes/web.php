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

Route::get('saludo/{name?}', 'SaludoControlador@index');

Route::get('/pelicula/{id}', 'PeliculasController@buscarPeliculaId');
Route::get('/pelicula/buscar/{nombre}', 'PeliculasController@buscarPeliculaNombre');
Route::get('/peliculas', 'PeliculasController@getPeliculas');

Route::get('/actores', 'ActorController@directory');
Route::get('/actor/{id}', 'ActorController@show');


