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
    return view('login');
});

Auth::routes();

Route::get('/Login', 'Inicio@index')->name('login');
Route::get('/Inicio', 'Inicio@index')->name('inicio');
Route::get('/Trabajador', 'TrabajadorController@index')->name('inicio');
Route::get('/Dia', 'DiaController@index')->name('inicio');
Route::get('/Grupo', 'GrupoController@index')->name('inicio');
Route::get('/Alumno', 'AlumnoController@index')->name('inicio');
