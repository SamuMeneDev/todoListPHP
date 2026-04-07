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
use App\Http\Middleware\Authenticate;

Route::get('/', [LoginController::class, 'index']);
Route::get('/login', [LoginController::class, 'index'])->name("login");
Route::post("/logar", [LoginController::class, "login"]);
Route::post("/logout", [LoginController::class, 'logout'])->name("logout");


Route::middleware(['auth'])->group(function() {
    Route::get("/home", [TarefaController::class, 'index']);
    Route::get("/cadastrarTarefa", [TarefaController::class, 'create']);
    Route::post("/cadastrarTarefa", [TarefaController::class, 'store']);

});
Route::delete("/tarefa/{id}", [TarefaController::class, 'destroy'])->name("tarefa.destroy");

Route::put("/tarefa/{id}", [TarefaController::class, "toggleTarefa"])->name("tarefa.toggleTarefa");

Route::get('/cadastroUsuario', [UsuarioController::class, 'create']);

Route::post("/cadastroUsuario", [UsuarioController::class, 'store']);

