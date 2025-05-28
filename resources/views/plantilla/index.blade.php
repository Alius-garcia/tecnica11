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

    <!-- Sección: Historia del colegio -->
    <section class="max-w-6xl mx-auto px-6 py-12 grid md:grid-cols-2 gap-10 items-center">
        <div>
            <h2 class="text-3xl font-semibold mb-4">Nuestra Historia</h2>
            <p class="text-lg text-gray-700">El Colegio Ejemplo fue fundado en el año 1985 con el objetivo de brindar una educación técnica de calidad. A lo largo de los años ha formado a cientos de profesionales en diferentes ramas de la tecnología, destacándose por su compromiso con la innovación y la excelencia educativa.</p>
        </div>
        <img src="imagenes/entrada.jpg" alt="Historia del colegio" class="rounded-xl shadow-lg">
    </section>

    <!-- Sección: Fotos del colegio -->
    <section id="fotos" class="bg-white py-12">
        <div class="max-w-6xl mx-auto px-6">
            <h2 class="text-3xl font-semibold mb-8 text-center">Fotos del Colegio</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <img src="/images/foto1.jpg" class="rounded-lg shadow-md" alt="Foto 1">
                <img src="/images/foto2.jpg" class="rounded-lg shadow-md" alt="Foto 2">
                <img src="/images/foto3.jpg" class="rounded-lg shadow-md" alt="Foto 3">
            </div>
        </div>
    </section>


    @yield("especialidades")

    @yield("novedades")

    <!-- Pie de página -->
    <footer class="bg-gray-800 text-white text-center py-6">
        <p>&copy; 2025 Colegio Ejemplo. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
