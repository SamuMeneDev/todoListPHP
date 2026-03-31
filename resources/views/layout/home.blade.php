<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
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
                <span class="text-white font-normal">@yield('username')</span>
               
            </div>
        </div>
    </header>
    @yield('content')
</body>
</html>