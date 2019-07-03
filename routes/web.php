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
// Route::get('/carrinho ','camisariaController@carrinhoCamisaria');
Route::get('/carrinho ','carrinhoController@index')->name('carrinho.index'); //Rota /carrinho direciona para carrinhoController no método index

Route::get('/checkout ','camisariaController@checkoutCamisaria');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Direciona para o facebook
Route::get('/auth/{provider}','Auth\LoginController@redirectToProvider');
//Receber a rota do facebook
Route::get('/auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::resource('product','ProdutoController');

// Cadastro

Route::get('form', 'FormController@create')->name('form.create');
Route::post('form', 'FormController@store')->name('form.store');
