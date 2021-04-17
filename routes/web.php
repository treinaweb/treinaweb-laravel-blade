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
    return view('index');
});

Route::get('/passagem/dados', function () {
    return view('exemplos.passagem_dados')->with([
        'nome' => 'TreinaWeb <script>alert("Executei")</script>',
        'descricao' => 'Escola de desenvolvimento'
    ]);
});

Route::get('/exibicao/json', function () {
    return view('exemplos.exibicao_json')->with([
        'posts' => [
            [
                "titulo" => "Novidades do Laravel",
                "conteudo" => "Nesta versão o Laravel ..."
            ],
            [
                "titulo" => "Novidades do Blade",
                "conteudo" => "Nesta versão o Blade ..."
            ],
        ],
    ]);
});
