<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\StatusTarefaController;
use App\Http\Controllers\TarefaController;
use App\Http\Controllers\UsuarioController;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


/* USUARIO */
Route::get("usuario/findAll", [UsuarioController::class, "findAll"]);

Route::post("usuario/save", [UsuarioController::class, "save"]);

/* CATEGORIA */

Route::get("/categoria/findAll", [CategoriaController::class, "findAll"]);

Route::post("/categoria/save", [CategoriaController::class, "save"]);

/* TAREFAS */

Route::get("/tarefa/findAll", [TarefaController::class, "findAll"]);
Route::post("/tarefa/save", [TarefaController::class, "save"]);

/* STATUS TAREFA */

Route::get("/status/findAll", [StatusTarefaController::class, "findAll"]);
Route::post("/status/save", [StatusTarefaController::class, "save"]);