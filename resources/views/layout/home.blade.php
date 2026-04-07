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
            <div class="flex items-center text-white font-normal gap-5">
                <div class="flex gap-5 items-center">
                    <span class="">@yield('username')</span>
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
    @yield('content')
</body>
</html>