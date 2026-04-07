@extends('layout.home')
<?php

use Illuminate\Support\Facades\Auth;


?>
@section('username', Auth::user()->nome)
@section('title', 'Home')

@section('content')
<main>
    <div class="flex justify-center items-center h-[90dvh]">
        <div class="border border-stone-300 rounded-lg flex flex-col p-5 min-w-3xl">
            <!-- ACTIONS -->
            <div class="grid grid-cols-12 border-b border-stone-300 mb-7">
                <div class="flex col-span-4 justify-center">
                    <a href="" class="text-sky-500 font-light text-xl">Tarefas Pendentes</a>
                </div>
                <div class="flex col-end-13 col-span-4 justify-center">
                    <a href="" class="text-sky-500 font-light text-xl">Tarefas Concluídas</a>
                </div>
            </div>
                <!-- CONTAINER TAREFAS -->
            <!-- CONTAINER DE TAREFAS-->
            <div class="flex flex-col items-center gap-10">
                <!-- TAREFAS -->
                
                @inject('tarefas', 'App\Models\Tarefa')
                @inject('status', 'App\Models\StatusTarefa')
                @if(count($tarefas::all()) > 0)
                @foreach($tarefas::all() as $t)
                    @if($t->id_status_tarefa == $status::where("status_tarefa", "Pendente")->first())
                        <div class="flex flex-col w-[85%]">
                            <span>{{explode(" ", $t->data_inicio_tarefa)[0]}}</span>
                            <div class="grid grid-cols-12 border border-stone-400 p-1 rounded-xl bg-stone-200">
                                <div class="flex col-span-10">
                                    <div class="flex gap-3 items-center">
                                
                                        <form  action="{{route('tarefa.toggleTarefa', $t->id_tarefa)}}" method="post">
                                            @csrf
                                            @method("PUT")    
                                            <button type="submit"><i class="bi bi-check"></i></button>
                                        </form>
                                        <span class="font-light">{{$t->titulo_tarefa}}</span>
                                        @if($t->descricao_tarefa)
                                            <p>{{$t->descricao_tarefa}}</p>
                                        @endif
                                    </div>
                                    
                                </div>
                                <div class="flex col-span-2">
                                    
                                    <form class="flex justify-center items-center gap-5" method="post" action="{{route('tarefa.destroy', $t->id_tarefa)}}">
                                        @csrf
                                        @method("DELETE")

                                        <button type="submit" class="cursor-pointer bg-red-700 rounded-md flex items-center justify-center w-7 h-7"><i class="text-white bi bi-trash3"></i></button>
                                    </form>
                                
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
                @else
                <span>Nenhuma tarefa adicionada</span>
                @endif

                <a href="/cadastrarTarefa" class="text-green-600 font-medium border border-green-400 rounded-lg p-2">Adicione uma tarefa</a>
            </div>
        </div>
    </div>
</main>

@endsection