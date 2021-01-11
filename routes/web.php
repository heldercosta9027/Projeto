<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/atores', 'App\Http\Controllers\AtoresController@index')
    ->name('atores.index');

Route::get('/atores/{id_atores}/show', 'App\Http\Controllers\AtoresController@show')
    ->name('atores.show');

Route::get('/atores/create','App\Http\Controllers\AtoresController@create')
    ->name('atores.create');

Route::post('/atores/','App\Http\Controllers\AtoresController@store')
    ->name('atores.store');

Route::get('/atores/{ida}/edit','App\Http\Controllers\AtoresController@edit')
    ->name('atores.edit');

Route::patch('/atores/{ida}/update','App\Http\Controllers\AtoresController@update')
    ->name('atores.update');

Route::get('/atores/{ida}/delete','App\Http\Controllers\AtoresController@delete')
    ->name('atores.delete');

Route::post('/atores/','App\Http\Controllers\AtoresController@destroy')
    ->name('atores.destroy');

Route::get('/filmes', 'App\Http\Controllers\FilmesController@index')
    ->name('filmes.index');

Route::get('/filmes/{id_filmes}/show', 'App\Http\Controllers\FilmesController@show')
    ->name('filmes.show');

Route::get('/generos', 'App\Http\Controllers\GenerosController@index')
    ->name('generos.index');

Route::get('/generos/{id_generos}/show', 'App\Http\Controllers\GenerosController@show')
    ->name('generos.show');
?>

