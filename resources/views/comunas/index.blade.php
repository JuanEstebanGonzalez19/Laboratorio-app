@extends('layouts.app')

@section('titulo')
    Lista de Comunas
@endsection

@section('contenido')
    <div class="container mx-auto mt-8">
        <div class="flex flex-col items-center">
            <h1 class="text-4xl mb-4">Comunas</h1>

            <a href="{{ route('crearComuna') }}" class="bg-blue-600 text-white px-4 py-2 rounded mb-4">Crear Comuna</a>

            <table class="w-full bg-gray-100 border">
                <thead class="bg-black text-white">
                    <tr>
                        <th class="py-2 px-4">Código</th>
                        <th class="py-2 px-4">Comuna</th>
                        <th class="py-2 px-4">Municipio</th>
                        <th class="py-2 px-4">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comunas as $comuna)
                        <tr>
                            <td>{{ $comuna->comu_codi }}</td>
                            <td class="text-center">{{ $comuna->comu_nomb }}</td>
                            <td class="text-center">{{ $comuna->muni_codi }}</td>
                            <td class="flex items-center justify-center">
                                <a href="{{ route('comunas.edit', ['comuna' => $comuna->comu_codi]) }}"
                                    class="bg-yellow-500 text-white px-4 py-2 rounded mr-2">Editar</a>
                                <form action="{{ route('comunas.destroy', ['comuna' => $comuna->comu_codi]) }}" method="POST">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
