@extends('layouts.app')

@section('titulo')
    Editar País
@endsection

@section('contenido')
    <div class="container w-[90%] mx-auto mt-8">
        <h2 class="text-3xl mb-4">Editar País</h2>
        <form action="{{ route('paises.update', ['pais' => $pais->pais_codi]) }}" method="POST" class="w-[90%] mx-auto">
            @method('put')
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-sm">País</label>
                <input type="text" required class="mt-1 p-2 w-full border rounded-md" id="name"
                    placeholder="Nombre del País..." name="name" value="{{ $pais->pais_nomb }}">
            </div>
            <div class="mb-4">
                <label for="capital" class="block text-sm">Código de Capital</label>
                <input type="text" required class="mt-1 p-2 w-full border rounded-md" id="capital"
                    placeholder="Ingrese el código de la capital..." name="capital" value="{{ $pais->pais_capi }}">
            </div>
            <div class="flex space-x-4">
                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md">Guardar</button>
                <a href="{{ route('paises.index') }}" class="bg-orange-500 text-white py-2 px-4 rounded-md">Cancelar</a>
            </div>
        </form>
    </div>
@endsection
