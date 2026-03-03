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
                <div class="flex justify-around">
                    <a href="" class="text-sky-500 font-light text-xl">Tarefas Pendentes</a>
                    <a href="" class="text-sky-500 font-light text-xl">Tarefas Concluídas</a>
                </div>
                    <!-- CONTAINER TAREFAS E ADD -->
                <div class="flex justify-between">
                    <div class="flex">
                        <span>Filtrar por:</span>
                        <select name="" id="">
                            <option value="">Teste</option>
                        </select>
                    </div>
                    <div class="flex flex-col items-center">
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