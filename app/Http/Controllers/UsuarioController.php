<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Tarefa;
use Illuminate\Http\Request;

use App\Models\Usuario;
class UsuarioController extends Controller
{
    public function create()
    {
        return view("cadastrarUsuario");
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
        return redirect("/login");
    }
    public function save(Request $request) {
        $usuario = new Usuario();
        $usuario->nome_usuario = $request->nome;
        $usuario->email_usuario = $request->email;
        $usuario->senha_usuario = $request->senha;
        $usuario->created_at = date('Y-m-d H:i:s');
        $usuario-> updated_at = date('Y-m-d H:i:s');

        $usuario->save();
        return response()->json(
            ['message'=>"Usuario cadastrado com sucesso"], 200
        );
    }

    public function findAll() {
        $lista = Usuario::all();
        return $lista;
    }
}
