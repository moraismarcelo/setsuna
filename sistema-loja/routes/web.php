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

//Route::get('/', function () {
//    return view('welcome');
//});


Auth::routes();
Route::view('/','home');
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/produtos', 'ProdutosController')->middleware('auth');
Route::resource('/atendimentos', 'AtendimentosController')->middleware('auth');
Route::resource('/clientes', 'ClientesController')->middleware('auth');
Route::resource('/vendas', 'VendasController')->middleware('auth');
