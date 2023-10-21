@extends('layouts.app')

@section('titulo')
    Municipios
@endsection

@section('contenido')
    <div class="container mx-auto mt-8">
        <h2 class="text-3xl mb-4">Lista de Municipios</h2>

        <a href="{{ route('municipios.create') }}" class="bg-blue-800 text-white px-4 py-2 rounded mb-4">Crear</a>

        <table class="w-full bg-gray-100 border">
            <thead class="bg-black text-white">
                <tr>
                    <th class="py-2 px-4">Código</th>
                    <th class="py-2 px-4">Municipio</th>
                    <th class="py-2 px-4">Departamento</th>
                    <th class="py-2 px-4">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($municipios as $municipio)
                    <tr>
                        <td>{{ $municipio->muni_codi }}</td>
                        <td class="text-center py-2 px-4">{{ $municipio->muni_nomb }}</td>
                        <td class="text-center py-2 px-4">{{ $municipio->depa_codi }}</td>
                        <td class="flex items-center justify-center py-2 px-4">
                            <a href="{{ route('municipios.edit', ['municipio' => $municipio->muni_codi]) }}" class="bg-yellow-500 text-white px-4 py-2 rounded mr-2">Editar</a>
                            <form action="{{ route('municipios.destroy', ['municipio' => $municipio->muni_codi]) }}" method="POST">
                                @method('delete')
                                @csrf
                                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded mr-2">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
