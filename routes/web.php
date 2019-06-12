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
Route::post('/borrarperro/{perro_id}','PerroController@borrar')->name('borrar.perro');
Route::get('/admin', 'UserController@admin');
Route::get('/control' ,'UserController@control')->name('control');
Route::post('/publicar/{perro_id}', 'PerroController@publicar')->name('publicar');
Route::post('/imagenperro', "ImagenController@store")->name('imagenes.perro');
Route::get('/adopcion', 'HomeController@adopcion')->name('adopcion');
Route::get('/profile/{perro_id}', 'PerroController@profile')->name('profile.perro');
