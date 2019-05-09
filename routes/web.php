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


Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
Route::post('/crearperro', 'PerroController@store')->name('crear.perro');
Route::post('/buscarperro', 'PerroController@buscar')->name('buscar.perro');
Route::get('/borrarperro/{perro_id}','PerroController@borrar')->name('borrar.perro');
Route::get('/profile/{user_id}', 'UserController@index')->name('profile.user');
Route::post('/editbio' , 'UserController@bio')->name('edit.bio');
