<?php

Auth::routes();

// Página Inicial
Route::get('/ ','camisariaController@homeCamisaria');
// Página Logado
Route::get('/home', 'HomeController@index')->name('home');

// Cadastro & Login
Route::resource('/cadastros', 'UsuarioController');

// Criandoo acesso Admin
Route::group(array('namespace' => 'Admin', 'prefix' => 'admin'), function() {
  Route::resource('ideas', 'AdminIdeaController');
});

Route::get('/admin', 'AdminController@admin')
    ->middleware('is_admin')
    ->name('admin');

// Montando Produto
Route::get('/crie_sua_camisa ','camisariaController@crieCamisaria');

// Concluindo compra
Route::get('/checkout ','camisariaController@checkoutCamisaria');

// Contato
Route::get('/contato ','camisariaController@contatoCamisaria');



// Provider
//Direciona para o facebook
// Route::get('/auth/{provider}','Auth\LoginController@redirectToProvider');
//Receber a rota do facebook
// Route::get('/auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');
