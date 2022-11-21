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
//Rotas Filme
Route::get('/movie/list', 'App\Http\Controllers\MovieController@show');
Route::get('/movie/new', 'App\Http\Controllers\MovieController@create');
Route::post('/movie/new', 'App\Http\Controllers\MovieController@store');
Route::get('/movie/del/{id}', 'App\Http\Controllers\MovieController@destroy')->name('excluir_filme');
Route::get('/movie/edit/{id}', 'App\Http\Controllers\MovieController@edit')->name('editar_filme');
Route::post('/movie/edit/{id}', 'App\Http\Controllers\MovieController@update')->name('atualizar_filme');

//Rotas Sessão
Route::get('/session/list', 'App\Http\Controllers\SessionController@show');
Route::get('/session/new', 'App\Http\Controllers\SessionController@create');
Route::post('/session/new', 'App\Http\Controllers\SessionController@store');
Route::get('/session/del/{id}', 'App\Http\Controllers\SessionController@destroy')->name('excluir_sessao');
Route::get('/session/edit/{id}', 'App\Http\Controllers\SessionController@edit')->name('editar_sessao');
Route::post('/session/edit/{id}', 'App\Http\Controllers\SessionController@update')->name('atualizar_sessao');

//Rotas Usuario
Route::get('/user/list', 'App\Http\Controllers\UserController@show');
Route::get('/user/new', 'App\Http\Controllers\UserController@create');
Route::post('/user/new', 'App\Http\Controllers\UserController@store');
Route::get('/user/del/{id}', 'App\Http\Controllers\UserController@destroy')->name('excluir_usuario');
Route::get('/user/edit/{id}', 'App\Http\Controllers\UserController@edit')->name('editar_usuario');
Route::post('/user/edit/{id}', 'App\Http\Controllers\UserController@update')->name('atualizar_');