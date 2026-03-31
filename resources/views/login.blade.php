@extends('layout.main')

@section('title', 'Login')

@section('content')
<main>
    <div class="flex justify-center items-center h-[90dvh]">
        <div class="border border-stone-300 rounded-lg flex flex-col gap-3 p-5">
            <h2 class="text-3xl text-stone-500 font-semibold">Entre com sua conta</h2>
            <form action="/login" method="post" class="flex flex-col gap-2">
                @csrf
                <input class="p-1 outline-none border border-stone-300 rounded-lg bg-stone-100" type="email" name="email" placeholder="E-mail">
                <input  class="p-1 outline-none border border-stone-300 rounded-lg bg-stone-100" type="password" name="senha" placeholder="Senha">
                <div class="flex justify-center">
                    <button type="submit" class="rounded-lg border border-teal-500 cursor-pointer bg-teal-400 p-1 text-white w-[85%]">Enviar</button>
                </div>
                
            </form>
        </div>
    </div>
</main>
@endsection