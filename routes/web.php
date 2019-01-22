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

Route::resource('alumno/index', 'AlumnoController');
Route::get('alumno/show/{id}', 'AlumnoController@show');
Route::resource('alumno/edit', 	'AlumnoController');
Route::resource('alumno/create','AlumnoController');

Route::resource('curriculum', 'CurriculumController');
Route::resource('curso', 'CursoController');

Route::resource('oferta/index', 'OfertaController');
Route::get('oferta/show/{id}', 'OfertaController@show');
Route::resource('oferta/edit', 'OfertaController');
Route::resource('oferta/create', 'OfertaController');

Route::resource('profesor/index', 'ProfesorController');
Route::resource('profesor/show', 'ProfesorController');
Route::resource('profesor/edit', 'ProfesorController');
Route::resource('profesor/create', 'ProfesorController');

