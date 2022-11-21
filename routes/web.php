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

//Rotas Ingresso
Route::get('/ticket/list', 'App\Http\Controllers\TicketController@show');
Route::get('/ticket/new', 'App\Http\Controllers\TicketController@create');
Route::post('/ticket/new', 'App\Http\Controllers\TicketController@store');
Route::get('/ticket/del/{id}', 'App\Http\Controllers\TicketController@destroy')->name('excluir_ingresso');
Route::get('/ticket/edit/{id}', 'App\Http\Controllers\TicketController@edit')->name('editar_ingresso');
Route::post('/ticket/edit/{id}', 'App\Http\Controllers\TicketController@update')->name('atualizar_ingresso');

//Rotas Usuario
Route::get('/user/list', 'App\Http\Controllers\UserController@show');
Route::get('/user/new', 'App\Http\Controllers\UserController@create');
Route::post('/user/new', 'App\Http\Controllers\UserController@store');
Route::get('/user/del/{id}', 'App\Http\Controllers\UserController@destroy')->name('excluir_usuario');
Route::get('/user/edit/{id}', 'App\Http\Controllers\UserController@edit')->name('editar_usuario');
Route::post('/user/edit/{id}', 'App\Http\Controllers\UserController@update')->name('atualizar_usuario');