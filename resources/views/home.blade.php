@extends('layout.home')

@section('username', 'Teste')
@section('title', 'Home')

@section('content')
<main>
    <div class="flex justify-center items-center h-[90dvh]">
        <div class="border border-stone-300 rounded-lg flex flex-col p-2 min-w-3xl">
            <!-- ACTIONS -->
            <div class="grid grid-cols-12 border-b border-stone-300">
                <div class="flex col-span-4 justify-center">
                    <a href="" class="text-sky-500 font-light text-xl">Tarefas Pendentes</a>
                </div>
                <div class="flex col-end-13 col-span-4 justify-center">
                    <a href="" class="text-sky-500 font-light text-xl">Tarefas Concluídas</a>
                </div>
            </div>
                <!-- CONTAINER TAREFAS -->
            <!-- CONTAINER DE TAREFAS-->
            <div class="flex flex-col items-center">
                <!-- TAREFAS -->
                
                @inject('tarefas', 'App\Models\Tarefa')
                @if(count($tarefas::all()) > 0)
                @foreach($tarefas as $t)
                    <div class="grid grid-cols-12 border w-[90%] border-stone-400 p-1 rounded-xl bg-stone-200">
                        <div class="flex col-span-9">
                            <div class="flex gap-3">
                        
                            <button><i class="bi bi-check"></i></button>
                                <span class="font-light">{{$t->titulo_tarefa}}</span>
                            </div>
                            
                        </div>
                        <div class="flex col-span-3">
                            <div class="flex justify-center gap-5">
                                <button><i class="text-2xl bi bi-pencil-square"></i></button>
                                <button class="bg-red-700 rounded-md w-7 h-7"><i class="text-white bi bi-trash3"></i></button>
                            </div>
                        </div>
                    </div>
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