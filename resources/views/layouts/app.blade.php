<!DOCTYPE html>
<html lang="es" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Proyectos</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
    body {
        min-height: 100vh;
        display: flex;
        flex-direction: column;
    }
    .container {
        flex: 1;
    }
</style>
</head>
<body>
    <!-- ENCABEZADO -->
    <nav class="navbar bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center gap-2" href="{{ route('proyectos.index') }}">
                <img src="{{ url('images/logo.png') }}" height="50" alt="Logo">
                <span class="text-white">Gobierno de El Salvador</span>
            </a>
        </div>
    </nav>

    <div class="container">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </div>

    <!-- PIE DE PÁGINA -->
    <footer class="bg-dark text-white text-center py-3 mt-5">
        <p class="mb-0">© Copyright 2025. Gobierno de El Salvador.</p>
    </footer>
</body>
</html>
