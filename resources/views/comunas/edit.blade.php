@extends('layouts.app')

@section('titulo')
    Editar Comuna
@endsection

@section('contenido')
    <div class="container mx-auto mt-8">
        <h2 class="text-3xl mb-4">Editar Comuna</h2>

        <form action="{{ route('comunas.update', ['comuna' => $comuna->comu_codi]) }}" method="POST" class="w-[90%] mx-auto">
            @method('put')
            @csrf

            <div class="mb-4">
                <label for="codigo" class="block text-sm">ID de Comuna</label>
                <input type="text" id="codigo" name="codigo" disabled value="{{ $comuna->comu_codi }}" class="mt-1 p-2 w-full border rounded">
            </div>

            <div class="mb-4">
                <label for="name" class="block text-sm">Nombre de la Comuna</label>
                <input type="text" id="name" name="name" required placeholder="Nombre de la comuna..." value="{{ $comuna->comu_nomb }}" class="mt-1 p-2 w-full border rounded">
            </div>

            <div class="mb-4">
                <label for="municipio" class="block text-sm">Municipio</label>
                <select id="municipio" name="municipio" required class="mt-1 p-2 w-full border rounded">
                    <option selected disabled value="">Escoge uno...</option>
                    @foreach ($municipios as $municipio)
                        <option value="{{ $municipio->muni_codi }}" {{ $municipio->muni_codi == $comuna->muni_codi ? 'selected' : '' }}>
                            {{ $municipio->muni_nomb }}
                        </option>
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
