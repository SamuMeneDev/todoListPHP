<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use App\Models\Tarefa;
use Carbon\Carbon;

class TarefaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = Categoria::all();
        $tarefas = Tarefa::all();
        return view("home")->with("tarefas", $tarefas)->with("categorias", $categorias);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tarefa = new Tarefa();

        $tarefa->titulo_tarefa =$request->titulo;
        $tarefa->descricao_tarefa =$request->descricao;
        $tarefa->data_inicio_tarefa =$request->dataInicio;
        $tarefa->id_status_tarefa = 1;

        $tarefa->save();

        return redirect('/home');
        
    }

    public function save(Request $request) {
        $tarefa = new Tarefa();

        $tarefa->titulo_tarefa = $request->titulo;
        $tarefa->descricao_tarefa = $request->descricao;
        $tarefa->data_inicio_tarefa = $request->inicio;
        $tarefa->data_termino_tarefa = $request->termino;
        $tarefa->id_usuario = $request->idUsuario;
        $tarefa->id_categoria = $request->idCategoria;
        $tarefa->id_status_tarefa = $request->idStatusTarefa;
        $tarefa->created_at = date('Y-m-d H:i:s');
        $tarefa->updated_at = date('Y-m-d H:i:s');

        $tarefa->save();
        return response()->json(["message"=>"Tarefa criada com sucesso"],200);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    public function findAll() {
        $lista = Tarefa::all();
        return $lista;
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
