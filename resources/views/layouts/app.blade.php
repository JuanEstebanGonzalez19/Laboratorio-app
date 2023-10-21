<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('titulo')</title>
    @stack('styles')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">
    <header class="bg-blue-900 text-white">
        <nav class="container mx-auto py-4">
            <div class="flex items-center justify-between">
                <div>
                    <a href="/" class="text-3xl font-bold">
                        CRUD GUÍA LARAVEL
                    </a>
                </div>

                <ul class="flex items-center space-x-4">
                    <li>
                        <a href="{{ route('comunascrud') }}">
                            Comunas
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('municipios.index') }}">
                            Municipios
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('departamentos.index') }}">
                            Departamentos
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('paises.index') }}">
                            País
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main class="container mx-auto mt-10">
        @yield('contenido')
    </main>
</body>

<script src="{{ asset('js/app.js') }}"></script>

</html>
