@extends('layouts.app')

@section('titulo')
    Crear Comuna
@endsection

@section('contenido')
    <div class="container mx-auto mt-8">
        <h2 class="text-3xl mb-4">Crear Comuna</h2>

        <form action="{{ route('guardarComuna') }}" method="POST" class="w-[90%] mx-auto">
            @csrf

            <div class="mb-4">
                <label for="name" class="block text-sm">Nombre de la Comuna</label>
                <input type="text" id="name" name="name" required placeholder="Ingresa la comuna..." class="mt-1 p-2 w-full border rounded">
            </div>

            <div class="mb-4">
                <label for="municipio" class="block text-sm">Municipio</label>
                <select id="municipio" name="municipio" required class="mt-1 p-2 w-full border rounded">
                    <option selected disabled value="">Escoge uno...</option>
                    @foreach ($municipios as $municipio)
                        <option value="{{ $municipio->muni_codi }}">{{ $municipio->muni_nomb }}</option>
                    @endforeach
                </select>
            </div>

            <div class="flex space-x-4">
                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">
                    Guardar
                </button>
                <a href="{{ route('comunascrud') }}" class="bg-orange-500 text-white py-2 px-4 rounded">
                    Cancelar
                </a>
            </div>
        </form>
    </div>
@endsection
