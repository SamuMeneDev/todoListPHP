<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Tarefa;
use Illuminate\Http\Request;

use App\Models\Usuario;
class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tarefas = Usuario::all("tarefa");
        return view('home')->with('home', $tarefas);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("cadastro.cadastrarUsuario");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $usuario = new Usuario();
        $usuario->nome_usuario = $request->nome;
        $usuario->email_usuario = $request->email;
        $usuario->senha_usuario = $request->senha;
        
        $usuario->save();
        $categorias = Categoria::all();
        $tarefas = Tarefa::all();
        return redirect("/home");
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
