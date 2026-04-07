<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

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
        $usuario = new User();
        $usuario->nome = $request->nome;
        $usuario->email = $request->email;
        $usuario->senha = Hash::make($request->senha);
        
        $usuario->save();
        return redirect("/login");
    }
    public function save(Request $request) {
        $usuario = new User();
        $usuario->nome = $request->nome;
        $usuario->email = $request->email;
        $usuario->senha = Hash::make($request->senha);
        $usuario->created_at = date('Y-m-d H:i:s');
        $usuario-> updated_at = date('Y-m-d H:i:s');

        $usuario->save();
        return response()->json(
            ['message'=>"Usuario cadastrado com sucesso"], 200
        );
    }

    public function findAll() {
        $lista = User::all();
        return $lista;
    }

    public function editApi(Request $request, string $id) {
        $usuario = User::findOrFail($id);
        $usuario->nome = $request->nome;
        
        $usuario->save();

        return response()->json(
            ['message'=>"Usuario editado com sucesso"], 200
        );
    }

    public function deleteApi(string $id) {
        User::find($id, "id")->delete();
        return response()->json(
            ['message'=>"Usuario excluido com sucesso"], 200
        );
    }
}
