<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            <div class="border border-stone-300 rounded-lg flex flex-col p-2">
                <h2 class="text-3xl text-stone-500 font-semibold">Entre com sua conta</h2>

                <div class="flex flex-col">
                    <input type="email" name="email" placeholder="E-mail">
                    <input type="password" placeholder="Senha">
                </div>
            </div>
        </div>
    </main>
</body>
</html>