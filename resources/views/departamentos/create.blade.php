@extends('layouts.app')

@section('titulo')
    Crear Departamento
@endsection

@section('contenido')
    <div class="container mx-auto mt-8">
        <h2 class="text-3xl mb-4">Crear Departamento</h2>

        <form action="{{ route('departamentos.store') }}" method="POST" class="w-[90%] mx-auto">
            @csrf

            <div class="mb-4">
                <label for="name" class="block text-sm">Nombre del Departamento</label>
                <input type="text" id="name" name="name" required placeholder="Ingresa el departamento..." class="mt-1 p-2 w-full border rounded">
            </div>

            <div class="mb-4">
                <label for="pais" class="block text-sm">País</label>
                <select id="pais" name="pais" required class="mt-1 p-2 w-full border rounded">
                    <option selected disabled value="">Escoge uno...</option>
                    @foreach ($pais as $p)
                        <option value="{{ $p->pais_codi }}">{{ $p->pais_nomb }}</option>
                    @endforeach
                </select>
            </div>

            <div class="flex space-x-4">
                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">
                    Guardar
                </button>
                <a href="{{ route('departamentos.index') }}" class="bg-orange-500 text-white py-2 px-4 rounded">
                    Cancelar
                </a>
            </div>
        </form>
    </div>
@endsection
