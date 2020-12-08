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




Route::get('/home', 'HomeController@index')->name('home');

/*Rotas de produtos*/
Route::get('/produto', 'ProdutoController@index')->name('produto.index');
Route::get('/produto/editar/{id}','ProdutoController@editar')->name('produto.editar');
Route::POST('/produto/salvar','ProdutoController@salvar')->name('produto.salvar');
Route::get('/produto/adicionar', 'ProdutoController@adicionar')->name('produto.addproduto');
Route::get('/produto/editar/{id}', 'ProdutoController@editar')->name('produto.editar');
Route::PUT('/produto/atualizar/{id}','ProdutoController@atualizar')->name('produto.atualizar');
Route::get('/produto/deletar/{id}', 'ProdutoController@deletar')->name('produto.deletar');
Route::get('/produto/buscar','ProdutoController@buscar')->name('produto.buscar');

/*Rotas de Serviços*/

Route::get('/servico', 'ServicoController@index')->name('servico.index');
Route::get('/servico/adicionar', 'ServicoController@adicionar')->name('servico.addservico');
Route::get('/servico/editar/{id}', 'ServicoController@editar')->name('servico.editar');
Route::POST('/servico/salvar','ServicoController@salvar')->name('servico.salvar');
Route::PUT('/servico/atualizar/{id}','ServicoController@atualizar')->name('servico.atualizar');
Route::get('/servico/deletar/{id}', 'ServicoController@deletar')->name('servico.deletar');
Route::get('/servico/buscar','ServicoController@buscar')->name('servico.buscar');


/*Rotas de clientes*/
Route::get('dropdownlist','ClienteController@index')->name('pessoas.cliente');
Route::get('get-state-list','ClienteController@getStateList')->name('pessoas.cliente');
Route::get('get-city-list','ClienteController@getCityList')->name('pessoas.cliente');
Route::get('/pessoas', 'ClienteController@index')->name('pessoas.cliente');
Route::get('/pessoas/editar/{id}','ClienteController@editar')->name('pessoas.editar');
Route::get('/pessoas/adicionar', 'ClienteController@adicionar')->name('pessoas.addcliente');
Route::get('/pessoas/deletar/{id}', 'ClienteController@deletar')->name('pessoas.deletar');
Route::POST('/pessoas/salvar','ClienteController@salvar')->name('pessoas.salvar');


/*Rotas de fornecedor*/
Route::get('dropdownlist','FornecedorController@index')->name('pessoas.fornecedor');
Route::get('get-state-list','FornecedorController@getStateList')->name('pessoas.fornecedor');
Route::get('get-city-list','FornecedorController@getCityList')->name('pessoas.fornecedor');
Route::get('/fornecedor', 'FornecedorController@index')->name('pessoas.fornecedor');
Route::get('/fornecedor/editar/{id}','FornecedorController@editar')->name('fornecedor.editar');
Route::get('/fornecedor/adicionar', 'FornecedorController@adicionar')->name('pessoas.addfornecedor');
Route::POST('/fornecedor/salvar','FornecedorController@salvar')->name('fornecedor.salvar');
Route::get('/fornecedor/deletar/{id}', 'FornecedorController@deletar')->name('fornecedor.deletar');

/*Rotas frente de caixa*/
Route::get('/frentecaixa', 'PedidoController@index')->name('frentecaixa.index');
Route::get('/frentecaixa/editar/{id}','PedidoController@editar')->name('frentecaixa.editar');
Route::POST('/frentecaixa/salvar','PedidoController@salvar')->name('frentecaixa.salvar');
Route::get('/frentecaixa/adicionar', 'PedidoController@adicionar')->name('frentecaixa.addfrentecaixa');
Route::get('/frentecaixa/editar/{id}', 'PedidoController@editar')->name('frentecaixa.editar');
Route::PUT('/frentecaixa/atualizar/{id}','PedidoController@atualizar')->name('frentecaixa.atualizar');
Route::get('/frentecaixa/deletar/{id}', 'PedidoController@deletar')->name('frentecaixa.deletar');
Route::get('/frentecaixa/buscar','PedidoController@buscar')->name('frentecaixa.buscar');
Route::POST('/frentecaixa/addprd','PedidoController@addprd')->name('frentecaixa.addprd');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
