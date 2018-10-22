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

Route::get('/', function () {
    return view('welcome');
});

Route::get('clientsCreate', "ClientController@create")->name("client.create");
Route::post('clientsStore', "ClientController@store")->name("client.store");
Route::get('clients', "ClientController@index")->name("client.index");
Route::get('test', "ClientController@tests")->name("client.tests");

$this->get('/test-conn', function () {
    // Insere um novo usuário ao banco de dados:
    $client = \App\Client::create([
        'nome'         => 'Carlos ',
        'email'     => 'carlos@especializati.com.br',
        'password'     => bcrypt('SenhaAqui'),
        'sobrenome'     => 'Ferreira',
        'aniversario'     => '1995-06-06'
    ]);
    // Se quiser exibir os dados do usuário: dd($user);
 
    // Listando os usuários
    $client = \App\Client::get();
 
    echo '<hr>';
    foreach ($clients as $client) {
        echo "{$client->name} <br>";
    }
    echo '<hr>';
});