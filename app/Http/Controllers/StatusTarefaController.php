<?php

namespace App\Http\Controllers;

use App\Models\StatusTarefa;
use Illuminate\Http\Request;

class StatusTarefaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        //
    }
    public function save(Request $request) {
        $status = new StatusTarefa();

        $status->status_tarefa = $request->nome;
        $status->created_at = date('Y-m-d H:i:s');
        $status->updated_at = date('Y-m-d H:i:s');

        $status->save();

        return response()->json(["message"=>"Status Criado com sucesso"], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    public function findAll() {
        $lista = StatusTarefa::all();
        return $lista;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editApi(Request $request, string $id)
    {
        
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
