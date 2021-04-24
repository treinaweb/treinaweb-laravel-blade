<?php

use App\Http\Controllers\SiteHerancaController;
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

Route::get('/site/heranca', [SiteHerancaController::class, 'home']);
Route::get('/site/heranca/portfolio', [SiteHerancaController::class, 'portfolio']);
Route::get('/site/heranca/sobre', [SiteHerancaController::class, 'sobre']);
Route::get('/site/heranca/contato', [SiteHerancaController::class, 'contato']);


Route::get('/', function () {
    return view('index', [
        'projetos' => [
            [
                'ativo' => true,
                'imagem' => 'cabin.png'
            ],
            [
                'ativo' => true,
                'imagem' => 'cake.png'
            ],
            [
                'ativo' => true,
                'imagem' => 'circus.png'
            ],
            [
                'ativo' => false,
                'imagem' => 'game.png'
            ],
            [
                'ativo' => true,
                'imagem' => 'safe.png'
            ],            
            [
                'ativo' => true,
                'imagem' => 'submarine.png'
            ],
        ]
    ]);
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

Route::get('/frameworks/js', function () {
    return view('exemplos.frameworks_js');
});

Route::get('/php/comentarios', function () {
    return view('exemplos.php_comentarios');
});

Route::get('/condicional/if', function () {
    return view('exemplos.condicional_if', [
        'comentarios' => 3
    ]);
});

Route::get('/condicional/switch', function () {
    return view('exemplos.condicional_switch', [
        'mes' => ''
    ]);
});