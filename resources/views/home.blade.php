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
                    <div class="flex col-span-6 border-t border-r border-stone-300 ">
                        <div class="flex flex-col gap-3 w-full">
                            <div class="flex items-center gap-3">
                                <span>Filtrar por:</span>
                                <select name="" id="" class="border p-1 border-stone-400 rounded-md">
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
                                        <div class="flex justify-center gap-5">
                                            <button><i class="text-2xl bi bi-pencil-square"></i></button>
                                            <button class="bg-red-700 rounded-md w-7 h-7"><i class="text-white bi bi-trash3"></i></button>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col col-span-6 gap-2 p-5">
                        <h2>Adicione uma Tarefa</h2>
                        <!-- INPUT NOME TAREFA -->
                        <div class="flex border border-stone-300 gap-1 p-1 rounded-xl">
                            <i class="bi bi-bullseye"></i>
                            <input placeholder="Nome da Tarefa" type="text" class="w-full outline-none">
                        </div>
                        <textarea placeholder="Descrição da tarefa" class="min-h-32 border p-1 outline-none border-stone-300 rounded-xl">
                        </textarea>
                        <div class="flex justify-between">
                            <div class="flex flex-col">
                                <span>Data de início</span>
                                <input class="bg-stone-200 border-stone-400 border rounded-md" type="date">
                            </div>
                            <div class="flex flex-col">
                                <div class="flex">
                                    <input type="checkbox" name="" id="">
                                    <span>Data de término</span>
                                </div>
                                <input class="bg-stone-200 border-stone-400 border rounded-md" type="date">
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <div class="flex flex-col gap-2 items-center justify-center">
                                <div class="flex gap-1">
                                    <span>Categoria</span>
                                    <input type="checkbox" name="" id="">
                                </div>
                                <select class="border p-1 rounded-md border-stone-400 bg-stone-200">
                                    @foreach($categorias as $cat)
                                        <option>{{$cat->nome_categoria}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <button class="cursor-pointerointer p-1 bg-sky-500 border border-sky-800 rounded-md text-white">Criar Tarefa</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>