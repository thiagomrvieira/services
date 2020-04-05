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

App::bind('LogExemplo', function($app){
    return 'Log registrado';
});

// $exemplo = App::make('LogExemplo');
// dd($exemplo);

Route::get('/teste', 'testeController@index');


// Registrando um serviço à partir de uma instancia

class Pessoa {

}

$pessoa = new Pessoa;

// App::instance('Pessoa', new Pessoa());
App::instance('Pessoa', $pessoa);

// dd(App::make('Pessoa'));


// Retornando uma unica instancia de um serviço
App::singleton('Conexao', function($app){
    return 'Conectado!';
});

// dd(App::make('Conexao'));

// Rota para o controler que aponta para o service
Route::get('/itens', 'testeController@itens');

