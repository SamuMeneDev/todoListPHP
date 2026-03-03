<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/output.css">
</head>
<body>
    <header>
        <div class="flex bg-sky-500 p-2 justify-between">
            <div class="flex items-center text-white text-2xl gap-2 font-semibold">
                <i class="bi bi-list-task"></i>
                <h2>Todo List</h2>
            </div>
            <div class="flex text-xl gap-5 items-center">
                <a href="" class="text-white font-normal">Entrar</a>
                <a href="" class="p-1.5 border text-sky-500 bg-white font-normal rounded-lg">Criar Conta</a>
            </div>
        </div>
    </header>
    <main>
        <div class="flex justify-center items-center h-[90dvh]">
            <div class="border border-stone-300 rounded-lg flex flex-col p-2 min-w-3xl">
                <div class="grid grid-cols-12">
                    <div class="flex col-span-4 justify-center">
                        <a href="" class="text-sky-500 font-light text-xl">Tarefas Pendentes</a>
                    </div>
                    <div class="flex col-end-13 col-span-4 justify-center">
                        <a href="" class="text-sky-500 font-light text-xl">Tarefas Concluídas</a>
                    </div>
                </div>
                    <!-- CONTAINER TAREFAS E ADD -->
                <div class="grid grid-cols-12">
                    <div class="flex col-span-8 border-t border-r border-stone-300 ">
                        <div class="flex flex-col gap-3 w-full">
                            <div class="flex items-center">
                                <span>Filtrar por:</span>
                                <select name="" id="" class="border border-stone-400 rounded-xl">
                                    <option value="">Teste</option>
                                </select>
                            </div>
                            <!-- CONTAINER DE TAREFAS-->
                            <div class="flex flex-col items-center">
                                <!-- TAREFAS -->
                                @foreach($tarefas as $t)
                                <div class="grid grid-cols-12 border w-[90%] border-stone-400 p-1 rounded-xl bg-stone-200">
                                    <div class="flex col-span-9">
                                        <div class="flex gap-3">
                                            <button><i class="bi bi-check"></i></button>
                                            <span class="font-light">{{$t->titulo_tarefa}}</span>
                                        </div>
                                        
                                    </div>
                                    <div class="flex col-span-3">
                                        <div class="flex">
                                            <button><i class="bi bi-pencil-square"></i></button>
                                            <button class="bg-red-700 rounded-md w-7 h-7"><i class="text-white bi bi-trash3"></i></button>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col col-span-4 items-center">
                        <h2>Adicione uma Tarefa</h2>
                        <!-- INPUT NOME TAREFA -->
                        <div class="flex border border-stone-300 gap-1 p-1 rounded-xl">
                            <i class="bi bi-bullseye"></i>
                            <input placeholder="Nome da Tarefa" type="text" class="w-full outline-none">
                        </div>
                        <textarea name="" id="" class="w-full">

                        </textarea>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>