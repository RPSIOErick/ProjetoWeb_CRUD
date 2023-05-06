<?php

use App\Models\Servico;
use App\Http\Controllers\ServicoController;
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

//ROTA DA PÁGINA INICIAL
Route::get('/', [ServicoController::class, 'create']);

//ROTA DE CONSULTA
Route::get('/consulta', [ServicoController::class, 'consulta']);

//ROTA PARA O FORMULÁRIO PARA EDIÇÃO
Route::get('/editar/{id}', [ServicoController::class, 'edit']);

//ROTA PARA ATIVAR A FUNCTION QUE SOBE OS DADOS PARA O BANCO
Route::post('/store', [ServicoController::class, 'store']);

//ROTA PARA ATIVAR A FUNCTION QUE ATUALIZA OS DADOS NO BANCO
Route::put('/atualizar/{id}', [ServicoController::class, 'update']);

//ROTA PARA EXCLUIR DADOS DE UM ID EM ESPECÍFICO
Route::delete('/excluir/{id}', [ServicoController::class, 'destroy']);
