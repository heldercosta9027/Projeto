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

Route::get('/atores/{id_atores}/create','App\Http\Controllers\AtoresController@create')
    ->name('atores.create');

Route::post('/atores/','App\Http\Controllers\AtoresController@store')
    ->name('atores.store');

Route::get('/atores/{id_atores}/edit','App\Http\Controllers\AtoresController@edit')
    ->name('atores.edit');

Route::patch('/atores/{id_atores}/update','App\Http\Controllers\AtoresController@update')
    ->name('atores.update');

Route::get('/atores/{id_atores}/delete','App\Http\Controllers\AtoresController@delete')
    ->name('atores.delete');

Route::post('/atores/','App\Http\Controllers\AtoresController@destroy')
    ->name('atores.destroy');

Route::get('/filmes', 'App\Http\Controllers\FilmesController@index')
    ->name('filmes.index');

Route::get('/filmes/{id_filme}/show', 'App\Http\Controllers\FilmesController@show')
    ->name('filmes.show');

Route::get('/filmes/{id_filme}/create','App\Http\Controllers\FilmesController@create')
    ->name('filmes.create');

Route::post('/filmes/','App\Http\Controllers\FilmesController@store')
    ->name('filmes.store');

Route::get('/filmes/{id_filme}/edit','App\Http\Controllers\FilmesController@edit')
    ->name('filmes.edit');

Route::patch('/filmes/{id_filme}/update','App\Http\Controllers\FilmesController@update')
    ->name('filmes.update');

Route::get('/filmes/{id_filme}/delete','App\Http\Controllers\FilmesController@delete')
    ->name('filmes.delete');

Route::post('/filmes/','App\Http\Controllers\FilmesController@destroy')
    ->name('filmes.destroy');

Route::get('/generos', 'App\Http\Controllers\GenerosController@index')
    ->name('generos.index');

Route::get('/generos/{id_genero}/show', 'App\Http\Controllers\GenerosController@show')
    ->name('generos.show');

Route::get('/generos/{id_genero}/create','App\Http\Controllers\GenerosController@create')->name('generos.create');

Route::post('/generos/','App\Http\Controllers\GenerosController@store')
    ->name('generos.store');

Route::get('/generos/{id_genero}/edit','App\Http\Controllers\GenerosController@edit')
    ->name('generos.edit');

Route::patch('/generos/{id_genero}/update','App\Http\Controllers\GenerosController@update')->name('generos.update');

Route::get('/generos/{id_genero}/delete','App\Http\Controllers\GenerosController@delete')->name('generos.delete');

Route::post('/generos/','App\Http\Controllers\GenerosController@destroy')
    ->name('generos.destroy');
?>

