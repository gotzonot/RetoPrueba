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

Route::get('/perfil', function(){
	return view ('perfil');
});


Route::resource('alumno/index', 'AlumnoController');
Route::get('alumno/show/{id}', 'AlumnoController@show');
Route::get('alumno/edit/{id}', 	'AlumnoController@edit');
Route::get('alumno/create','AlumnoController@create');
Route::put('alumno/edit/{id}','AlumnoController@update');
Route::get('alumno/insertar', 'AlumnoController@store');
Route::get('alumno/eliminar/{id}', 'AlumnoController@destroy');
Route::get('alumno/desactivar/{id}', 'AlumnoController@desactivar');

Route::resource('profesor/index', 'ProfesorController');
Route::get('profesor/show/{id}', 'ProfesorController@show');
Route::get('profesor/edit/{id}', 'ProfesorController@edit');
Route::get('profesor/create', 'ProfesorController@create');
Route::put('profesor/edit/{id}','ProfesorController@update');
Route::get('profesor/insertar', 'ProfesorController@store');
Route::get('profesor/eliminar/{id}', 'ProfesorController@destroy');
Route::get('profesor/desactivar/{id}', 'ProfesorController@desactivar');

Route::resource('oferta/index', 'OfertaController');
Route::get('oferta/show/{id}', 'OfertaController@show');
Route::get('oferta/edit/{id}', 'OfertaController@edit');
Route::put('oferta/edit/{id}','OfertaController@update');
Route::get('oferta/create', 'OfertaController@create');
Route::get('oferta/eliminar/{id}', 'OfertaController@destroy');
Route::get('oferta/insertar', 'OfertaController@store');
Route::get('oferta/apuntados/{id}', 'OfertaController@apuntar');
Route::get('oferta/quitarlista/{id}', 'OfertaController@quitarlista');


Route::resource('curriculum', 'CurriculumController');
Route::resource('curso', 'CursoController');





