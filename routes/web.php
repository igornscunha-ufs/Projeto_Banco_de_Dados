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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/movies/list', 'App\Http\Controllers\MovieController@show');
Route::get('/movie/new', 'App\Http\Controllers\MovieController@create');
Route::post('/movie/new', 'App\Http\Controllers\MovieController@store');
Route::get('/movie/del/{id}', 'App\Http\Controllers\MovieController@destroy')->name('excluir_filme');
Route::get('/movie/edit/{id}', 'App\Http\Controllers\MovieController@edit')->name('editar_filme');
Route::post('/movie/edit/{id}', 'App\Http\Controllers\MovieController@update')->name('atualizar_filme');