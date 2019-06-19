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

Route::get('/ ','camisariaController@homeCamisaria');

Route::get('/crie_sua_camisa ','camisariaController@crieCamisaria');

Route::get('/cadastro ','camisariaController@cadastroCamisaria');

Route::get('/contato ','camisariaController@contatoCamisaria');

Route::get('/carrinho ','camisariaController@carrinhoCamisaria');

Route::get('/checkout ','camisariaController@checkoutCamisaria');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Direciona para o facebook
Route::get('/auth/{provider}','Auth\LoginController@redirectToProvider');
//Receber a rota do facebook
Route::get('/auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');
