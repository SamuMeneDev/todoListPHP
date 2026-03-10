<?php require('./php/components/navbar.php') ?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/output.css">
</head>
<body>
    <?php navbar() ?>
    <main>
        <div class="flex justify-center items-center h-[90dvh]">
            <div class="border border-stone-300 rounded-lg flex flex-col gap-3 p-5">
                <h2 class="text-3xl text-stone-500 font-semibold">Entre com sua conta</h2>

                <div class="flex flex-col gap-2">
                    <input class="p-1 outline-none border border-stone-300 rounded-lg bg-stone-100" type="email" name="email" placeholder="E-mail">
                    <input  class="p-1 outline-none border border-stone-300 rounded-lg bg-stone-100" type="password" placeholder="Senha">
                    <div class="flex justify-center">
                        <button class="rounded-lg border border-teal-500 cursor-pointer bg-teal-400 p-1 text-white w-[85%]">Enviar</button>
                    </div>
                 
                </div>
            </div>
        </div>
    </main>
</body>
</html>