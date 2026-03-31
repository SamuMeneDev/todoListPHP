<?php

namespace App\Http\Controllers;

use App\Models\Tarefa;
use App\Models\Usuario;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() {
    return view("login");
    }


    public function login(Request $request) {
        $usuarios = Usuario::all();

        $alvo = null;

        foreach($usuarios as $u) {
            if($u->email_usuario == $request->email && $u->senha_usuario == $request->senha) {
                $alvo = $u;
                break;
            }
        }
        if($alvo != null) {
            return redirect()->action([TarefaController::class, 'index'], ["usuario"=> $u]);
        } else {
            return view("login");
        }
    }
}
