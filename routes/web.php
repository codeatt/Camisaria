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

// Página Inicial
Route::get('/ ','camisariaController@homeCamisaria');

Route::get('/home', 'HomeController@index')->name('home');

// Montando Produto
Route::get('/crie_sua_camisa ','camisariaController@crieCamisaria');

// Cadastro 2 (funcional, mas apenas para visualizar, será substituído pelo definitivo)
Route::get('cadastro', 'CadastroController@create')->name('cadastro.create');
Route::post('cadastro', 'CadastroController@store')->name('cadastro.store');

// Cadastro teste funcionou
Route::get('form', 'FormController@create')->name('form.create');
Route::post('form', 'FormController@store')->name('form.store');

// Login teste
Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');

// Comprando Controler 1
Route::get('/carrinho ','camisariaController@carrinhoCamisaria');

// Comprando Controler 2
Route::get('/carrinho ','carrinhoController@index')->name('carrinho.index');

// Concluindo compra
Route::get('/checkout ','camisariaController@checkoutCamisaria');

// Contato
Route::get('/contato ','camisariaController@contatoCamisaria');

// Provider
//Direciona para o facebook
Route::get('/auth/{provider}','Auth\LoginController@redirectToProvider');
//Receber a rota do facebook
Route::get('/auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

Auth::routes();
