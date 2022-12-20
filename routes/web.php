<?php

use App\Http\Controllers\ContatoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\FornecedorController;


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


// ------ Rota com Expressões regulares ------
// Route::get(
//     '/contato/{nome}/{categoria_id}', [ContatoController::class, 'texto']
// )->where('categoria_id', '[0-9]+')->where('nome', '[A-Za-z]+');

Route::get('/', [PrincipalController::class, 'principal'])->name('site.index');
Route::get('/sobre-nos',[SobreNosController::class, 'sobreNos'])->name('site.sobrenos');
Route::get('/contato', [ContatoController::class, 'contato'])->name('site.contato');
Route::post('/contato', [ContatoController::class, 'contato'])->name('site.contato');
Route::get('/login', [ContatoController::class, 'login'])->name('site.login');


Route::prefix('/app')->group(function() {
    Route::get('/clientes', [ContatoController::class, 'clientes'])->name('app.clientes');
    Route::get('/fornecedores', [FornecedorController::class, 'index'])->name('app.fornecedores');
    Route::get('/produtos', [ContatoController::class, 'produtos'])->name('app.produtos');
});
    



