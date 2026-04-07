<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\StatusTarefa;
use Illuminate\Http\Request;
use App\Models\Tarefa;
use App\Models\User;
use App\Models\Usuario;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

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
        $tarefa->id_usuario = Auth::id();
        $tarefa->titulo_tarefa =$request->titulo;
        $tarefa->id_categoria = $request->categoria;
        $tarefa->descricao_tarefa =$request->descricao;
        if(isset($request->dataInicio)) {
            $tarefa->data_inicio_tarefa =$request->dataInicio;
        } else {
            $tarefa->data_inicio = now()->toDateTimeString();
        }
        $tarefa->data_termino_tarefa = $request->dataTermino;
        $status = StatusTarefa::all(["id_status_tarefa", "status_tarefa"]);
        
        $id_pendente = 1;
        foreach($status as $s) {
            if($s->status_tarefa == "Pendente") {
                $id_pendente = $s->id_status_tarefa;
                break;
            }
        }

        $tarefa->id_status_tarefa = $id_pendente;

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

    public function destroy(string $id) {
        $tarefa = Tarefa::find($id, "id_tarefa")->delete();
        return redirect('/home');
    }

    public function toggleTarefa(string $id) {
        $tarefa = Tarefa::find($id, "id_tarefa");

        if(StatusTarefa::find($tarefa->id_status_tarefa, "id_status_tarefa") == "Pendente") {
            $tarefa->id_status_tarefa = StatusTarefa::find("Ativa", "status_tarefa")->id_status_tarefa;
        } else {
            $tarefa->id_status_tarefa = StatusTarefa::find("Pendente", "status_tarefa")->id_status_tarefa;
        }
        $tarefa->save();

        return redirect('/home');
    }
    public function findAll() {
        $lista = Tarefa::all();
        return $lista;
    }



}
