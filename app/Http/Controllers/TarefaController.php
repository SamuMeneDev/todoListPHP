<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use App\Models\Tarefa;

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

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
