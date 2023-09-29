<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PropostaController;
use App\Http\Controllers\PdfController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
	return view('auth.login');
});
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
	Route::get('table-list', function () {
		return view('pages.table_list');
	})->name('table');

	Route::get('typography', function () {
		return view('pages.typography');
	})->name('typography');

	Route::get('icons', function () {
		return view('pages.icons');
	})->name('icons');

	Route::get('map', function () {
		return view('pages.map');
	})->name('map');

	Route::get('notifications', function () {
		return view('pages.notifications');
	})->name('notifications');

	Route::get('rtl-support', function () {
		return view('pages.language');
	})->name('language');

	Route::get('upgrade', function () {
		return view('pages.upgrade');
	})->name('upgrade');
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('perfil/editar', ['as' => 'perfil.editar', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('perfil/atualizar', ['as' => 'perfil.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('perfil/password', ['as' => 'perfil.senha', 'uses' => 'App\Http\Controllers\ProfileController@password']);


	/* FIM ROTAS DE CLIENTES */
	Route::get('clientes', [ClienteController::class, 'index'])->name('clientes.listar');
	Route::get('clientes/cadastrar', [ClienteController::class, 'create'])->name('clientes.cadastrar');
	Route::post('clientes/cadastrar', [ClienteController::class, 'store'])->name('clientes.store');
	Route::get('clientes/{id}/editar', [ClienteController::class, 'edit'])->name('clientes.editar');
	Route::put('clientes/{id}/editar', [ClienteController::class, 'update'])->name('clientes.editar');
	Route::delete('clientes/{id}/deletar', [ClienteController::class, 'destroy'])->name('clientes.deletar');
	/* FIM ROTAS DE CLIENTES */


	Route::resource('produtos', 'App\Http\Controllers\ProdutoController');

	Route::resource('controle-de-producao', 'App\Http\Controllers\ProducaoController');
	Route::get('controle-de-producao', 'App\Http\Controllers\ProducaoController@index')->name('producao');
	
	Route::get('esteira', 'App\Http\Controllers\EsteiraController@index')->name('esteira.producao');

	/* INICIO ROTAS DE PROPOSTAS */
	Route::get('propostas', [PropostaController::class, 'index'])->name('propostas.listar');
	Route::get('propostas/cadastrar', [PropostaController::class, 'create'])->name('propostas.cadastrar');
	Route::post('propostas/cadastrar', [PropostaController::class, 'store'])->name('propostas.store');
	Route::get('propostas/{id}/editar', [PropostaController::class, 'edit'])->name('propostas.editar');
	Route::put('propostas/{id}/editar', [PropostaController::class, 'update'])->name('propostas.editar');
	Route::delete('propostas/{id}/deletar', [PropostaController::class, 'destroy'])->name('propostas.deletar');
	Route::get('consulta-cpf', [PropostaController::class, 'consultaCpf'])->name('propostas.consulta-cpf');
	/* FIM ROTAS DE PROPOSTAS */

	Route::resource('carteiras', 'App\Http\Controllers\CarteiraController');
	Route::get('carteira-de-clientes', 'App\Http\Controllers\ClienteController@carteira')->name('carteira.clientes');

/* 	Route::get('/perfil/editar',  'App\Http\Controllers\PerfilController@edit')->name('editar.perfil');
	Route::put('/perfil/atualizar',  'App\Http\Controllers\PerfilController@update')->name('atualizar.perfil'); */

	Route::resource('comissoes', 'App\Http\Controllers\ComissaoController');
	Route::get('metas',  'App\Http\Controllers\ComissaoController@metas')->name('comissoes.metas');
	Route::get('regras-de-comissao',  'App\Http\Controllers\ComissaoController@regras')->name('comissoes.regras');
	Route::get('tabela-de-comissao',  'App\Http\Controllers\ComissaoController@tabelas')->name('comissoes.tabelas');

	/* FIM ROTAS DE PDF'S */
	Route::get('pdf/{id}/cliente', [PdfController::class, 'geraPdfCliente'])->name('cliente.pdf');
	Route::get('pdf/{id}/proposta', [PdfController::class, 'geraPdfProposta'])->name('proposta.pdf');
	/* FIM ROTAS DE PDF'S */

});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
