<?php

Auth::routes();

// Página Inicial
Route::get('/ ','camisariaController@homeCamisaria');
// Página Logado
Route::get('/home', 'HomeController@index')->name('home');

// Cadastros & Login
Route::resource('/cadastros', 'UsuarioController');

// Criando acesso Crie sua camisa
// Route::group(['middleware' => ['auth', 'user']], function () {
//     Route::get('/crie_sua_camisa ','camisariaController@crieCamisaria');
// });

// Criando acesso ADMIN_CRUD usuarios
// Route::group(['middleware' => ['auth', 'admin']], function () {
//     Route::get('/usuarios','UsuarioController@index');
// });

// Montando Produto
Route::get('/crie_sua_camisa ','CamisariaController@crieCamisaria');

// Concluindo compra
Route::get('/checkout ','CamisariaController@checkoutCamisaria');

// Contato
Route::get('/contato ','CamisariaController@contatoCamisaria');

//Carrinho
Route::get('/carrinho ','CamisariaController@carrinhoCamisaria');
Route::post('/carrinho ','CamisariaController@carrinhoCamisaria');

// Route::get('/carrinho ','carrinhoController@index')->name('carrinho.index');

// Provider
//Direciona para o facebook
// Route::get('/auth/{provider}','Auth\LoginController@redirectToProvider');
//Receber a rota do facebook
// Route::get('/auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');
