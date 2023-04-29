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

Route::get('/', [ServicoController::class, 'create']);

Route::post('/store', [ServicoController::class, 'store']);

Route::get('/consulta', [ServicoController::class, 'consulta']);