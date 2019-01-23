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

Route::get('/', function(){
	return view ('index');
});

Route::resource('alumno/index', 'AlumnoController');
Route::get('alumno/show/{id}', 'AlumnoController@show');
Route::resource('alumno/edit', 	'AlumnoController');
Route::get('alumno/create','AlumnoController@create');
Route::get('alumno/insertar', 'AlumnoController@store');

Route::resource('profesor/index', 'ProfesorController');
Route::get('profesor/show/{id}', 'ProfesorController@show');
Route::resource('profesor/edit', 'ProfesorController');
Route::get('profesor/create', 'ProfesorController@create');
Route::get('profesor/insertar', 'ProfesorController@store');

Route::resource('oferta/index', 'OfertaController');
Route::get('oferta/show/{id}', 'OfertaController@show');
Route::resource('oferta/edit', 'OfertaController');
Route::get('oferta/create', 'OfertaController@create');
Route::get('oferta/insertar', 'OfertaController@store');

Route::resource('curriculum', 'CurriculumController');
Route::resource('curso', 'CursoController');





