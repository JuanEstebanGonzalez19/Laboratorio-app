@extends('layouts.app')

@section('titulo')
    Crear Municipio
@endsection

@section('contenido')
    <div class="container mx-auto mt-8">
        <h2 class="text-3xl mb-4">Crear Municipio</h2>

        <form action="{{ route('municipios.store') }}" method="POST" class="w-[90%] mx-auto">
            @csrf

            <div class="mb-4">
                <label for="name" class="block text-sm">Nombre del Municipio</label>
                <input type="text" id="name" name="name" required placeholder="Ingresa el municipio..." class="mt-1 p-2 w-full border rounded">
            </div>

            <div class="mb-4">
                <label for="departamento" class="block text-sm">Departamento</label>
                <select id="departamento" name="departamento" required class="mt-1 p-2 w-full border rounded">
                    <option selected disabled value="">Escoge uno...</option>
                    @foreach ($departamentos as $departamento)
                        <option value="{{ $departamento->depa_codi }}">{{ $departamento->depa_nomb }}</option>
                    @endforeach
                </select>
            </div>

            <div class="flex space-x-4">
                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">
                    Guardar
                </button>
                <a href="{{ route('municipios.index') }}" class="bg-orange-500 text-white py-2 px-4 rounded">
                    Cancelar
                </a>
            </div>
        </form>
    </div>
@endsection
