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
Route::get("usuario/findAll", [UsuarioController::class, "findAllApi"]);

Route::post("usuario/save", [UsuarioController::class, "saveApi"]);

Route::put("/usuario/edit/{id}", [UsuarioController::class, 'editApi']);

Route::delete("/usuario/delete/{id}", [UsuarioController::class, 'deleteApi']);

/* CATEGORIA */

Route::get("/categoria/findAll", [CategoriaController::class, "findAllApi"]);

Route::post("/categoria/save", [CategoriaController::class, "saveApi"]);

/* TAREFAS */

Route::get("/tarefa/findAll", [TarefaController::class, "findAllApi"]);
Route::post("/tarefa/save", [TarefaController::class, "saveApi"]);

Route::put("/tarefa/edit/{id}", [TarefaController::class, "editApi"]);
Route::delete("/tarefa/destroy/{id}", [TarefaController::class, "destroyApi"]);
/* STATUS TAREFA */

Route::get("/status/findAll", [StatusTarefaController::class, "findAllApi"]);
Route::post("/status/save", [StatusTarefaController::class, "saveApi"]);