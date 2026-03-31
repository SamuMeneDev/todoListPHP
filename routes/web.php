<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
use App\Http\Controllers\TarefaController;
use App\Http\Controllers\UsuarioController;

Route::get('/', [LoginController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);
Route::post("/login", [LoginController::class, "login"]);


Route::get("/home", [TarefaController::class, 'index']);

Route::get('/cadastro', [UsuarioController::class, 'create']);

Route::post("/cadastroUsuario", [UsuarioController::class, 'store']);

Route::post("/cadastroTarefa", [TarefaController::class, 'store']);