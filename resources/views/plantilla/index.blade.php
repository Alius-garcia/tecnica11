<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio | Colegio Ejemplo</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900">
    <!-- Barra de navegación -->
    <nav class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 py-3 flex justify-between items-center">
            <div class="flex items-center gap-4">
                <img src="imagenes/escudo.png" alt="Logo Colegio" class="h-12">
                <span class="text-xl font-bold">Colegio Ejemplo</span>
            </div>
            <ul class="hidden md:flex gap-6 text-gray-700 font-medium">
                <li><a href="/especialidades" class="hover:text-blue-600">Especialidades</a></li>
                <li><a href="/novedades" class="hover:text-blue-600">Novedades</a></li>
                <li><a href="#fotos" class="hover:text-blue-600">Fotos del Colegio</a></li>
                <li><a href="#directivos" class="hover:text-blue-600">Directivos</a></li>
            </ul>
            <a href="/login" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Login</a>
        </div>
    </nav>

    @yield(".inicio")

    @yield(".especialidades")

    @yield(".novedades")

    <!-- Pie de página -->
    <footer class="bg-gray-800 text-white text-center py-6">
        <p>&copy; 2025 Colegio Ejemplo. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
