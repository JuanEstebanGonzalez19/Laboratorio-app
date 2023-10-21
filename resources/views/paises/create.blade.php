@extends('layouts.app')

@section('titulo')
    Crear País
@endsection

@section('contenido')
    <div class="container mx-auto mt-8">
        <h2 class="text-3xl mb-4">Crear País</h2>

        <form action="{{ route('paises.store') }}" method="POST" class="w-[90%] mx-auto">
            @csrf

            <div class="mb-4">
                <label for="codigo" class="block text-sm">Código de País</label>
                <input type="text" id="codigo" name="codigo" required placeholder="Ingrese un código para el país..." class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-4">
                <label for="name" class="block text-sm">Nombre del País</label>
                <input type="text" id="name" name="name" required placeholder="Ingresa el país..." class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-4">
                <label for="capital" class="block text-sm">Código de Capital</label>
                <input type="text" id="capital" name="capital" required placeholder="Ingrese la capital (En número)..." class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="flex space-x-4">
                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Guardar</button>
                <a href="{{ route('paises.index') }}" class="bg-orange-500 text-white py-2 px-4 rounded">Cancelar</a>
            </div>
        </form>
    </div>
@endsection

