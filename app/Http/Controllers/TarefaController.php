<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use App\Models\Tarefa;
use App\Models\User;
use App\Models\Usuario;
use Carbon\Carbon;

class TarefaController extends Controller
{
    public function index(User $usuario)
    {
        return view("home");
    }
     public function create() {
        return view("tarefa.cadastrarTarefa");
     }
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


    public function findAll() {
        $lista = Tarefa::all();
        return $lista;
    }

}
