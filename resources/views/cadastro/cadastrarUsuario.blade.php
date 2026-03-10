<?php require('./php/components/navbar.php') ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/output.css">
</head>
<body>
<?php navbar() ?>
    <main>
        <div class="grid grid-cols-7 mt-10">
            <form action="/cadastroUsuario" method="post" class="col-start-3 col-span-3 p-2 border border-stone-200 rounded-lg p-5 flex flex-col gap-4">
            @csrf    
            <div class="flex flex-col items-center">
                    <h1 class="text-4xl font-light">Crie uma conta</h1>
                    <p class="text-sm text-stone-600">Crie seu cadastro e gerencie suas tarefas</p>
                </div>
                <div class="flex flex-col gap-2">
                    <input type="text" placeholder="Nome de usuário" name="nome" class="outline-none p-1 text-stone-700 border border-stone-300 bg-stone-100">
                    <input type="email" placeholder="E-mail" name="email" class="outline-none p-1 text-stone-700 border border-stone-300 bg-stone-100">
                    <input type="password" placeholder="Crie uma senha" name="senha" class="outline-none p-1 text-stone-700 border border-stone-300 bg-stone-100">
                    <div class="grid grid-cols-12 gap-2">
                        <button class="border p-1 border-teal-700 rounded-lg text-teal-700 cursor-pointer col-span-5" type="reset">Limpar</button>
                        <button class="border p-1 border-teal-800 bg-teal-700 rounded-lg text-white cursor-pointer col-span-7" type="submit">Criar conta</button>
                    </div>
                </div>
            </form>
        </div>
    </main>
</body>
</html>