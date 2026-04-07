<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="/css/output.css">
</head>
<body>
<header>
        <div class="flex bg-sky-500 p-2 justify-between">
            <div class="flex items-center text-white text-2xl gap-2 font-semibold">
                <i class="bi bi-list-task"></i>
                <h2>Todo List</h2>
            </div>
            <div class="flex items-center text-white font-normal gap-5">
                <div class="flex gap-5 items-center">
                @inject("auth", 'Illuminate\Support\Facades\Auth')    
                <span class="">{{Auth::user()->nome}}</span>
                </div>
                <form class="gap-5 items-center" action="{{ route('logout') }}" method="post">
                    @csrf
                    <button class="cursor-pointer bg-red-500 px-1 rounded-md border border-red-800">
                        Sair
                    </button >
                </form>
            </div>
        </div>
    </header>
<main>
<div class="flex justify-center items-center h-[90dvh]">
        <div class="border border-stone-300 rounded-lg flex flex-col p-5 min-w-3xl">
            <!-- ACTIONS -->
            <div class="grid grid-cols-12 border-b border-stone-300 mb-7">
                <div class="flex col-span-4 justify-center">
                    <a href="/home" class="text-sky-500 font-light text-xl">Tarefas Pendentes</a>
                </div>
                <div class="flex col-end-13 col-span-4 justify-center">
                    <a href="/home/concluido" class="text-sky-500 font-bold text-xl">Tarefas Concluídas</a>
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
                    @if($t->id_status_tarefa != $status::where("status_tarefa", "Pendente")->first()->id_status_tarefa)
                        <div class="flex flex-col w-[85%]">
                            <span>{{explode(" ", $t->data_inicio_tarefa)[0]}}</span>
                            <div class="grid grid-cols-12 border border-stone-400 p-1 rounded-xl bg-stone-200">
                                <div class="flex col-span-10">
                                    <div class="flex gap-3 items-center">
                                
                                        <form  action="{{route('tarefa.toggleTarefa', $t->id_tarefa)}}" method="post">
                                            @csrf
                                            @method("PUT")    
                                            <button type="submit"><i class="cursor-pointer bi bi-check"></i></button>
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
</body>
</html>

