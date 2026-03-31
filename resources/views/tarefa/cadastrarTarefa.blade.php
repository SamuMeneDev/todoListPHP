@extends('layout.home')
@section('title', 'Cadastrar Tarefa')
@section('username', 'teste')

@section('content')
<form action="/cadastrarTarefa" method="post" class="flex flex-col col-span-6 gap-2 p-5">
    @csrf    
    <h2>Adicione uma Tarefa</h2>
    <!-- INPUT NOME TAREFA -->
    <div class="flex border border-stone-300 gap-1 p-1 rounded-xl">
        <i class="bi bi-bullseye"></i>
        <input required placeholder="Nome da Tarefa" name="titulo" type="text" class="w-full outline-none">
    </div>
    <textarea placeholder="Descrição da tarefa" name="descricao" class="min-h-32 border p-1 outline-none border-stone-300 rounded-xl"></textarea>
    <div class="flex justify-around">
        <div class="flex flex-col">
            <span>Data de início</span>
            <input required name="dataInicio" class="bg-stone-200 border-stone-400 border rounded-md" type="date">
        </div>
        {{-- 
            <div class="flex flex-col">
            <div class="flex">
                <input type="checkbox" name="" id="">
                <span>Data de término</span>
            </div>
            <input name="dataTermino" class="bg-stone-200 border-stone-400 border rounded-md" type="date">
        </div>    
        --}}
        <div class="flex flex-col gap-2 items-center justify-center">
            <div class="flex gap-1">
                <span>Categoria</span>
            </div>
            <select name="categoria" class="border p-1 rounded-md border-stone-400 bg-stone-200">
                @inject('categorias', 'App\Models\Categoria')
                @foreach($categorias::all() as $cat)
                    <option value={{$cat->id_categoria}}>{{$cat->nome_categoria}}</option>
                @endforeach
            </select>
        </div>
        
    </div>
    <div class="flex flex-col">
        
    </div>
    <div class="flex-col flex items-center">
    <button type="submit" class="cursor-pointer p-1 w-[30%] bg-sky-500 border border-sky-800 rounded-md text-white">Criar Tarefa</button>
    </div>
</form>
@endsection