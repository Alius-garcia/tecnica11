@extends("plantilla/index")

@section("novedades")
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novedades | Colegio Ejemplo</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50 text-gray-900">

    <!-- Publicación de novedades -->
    <section class="max-w-4xl mx-auto px-6 py-12">
        <h2 class="text-3xl font-semibold text-blue-900 mb-8 text-center">Publicar Nueva Novedad</h2>
        <form class="bg-white shadow-md rounded-lg p-6 space-y-6" enctype="multipart/form-data">
            <div>
                <label for="fecha" class="block text-sm font-medium text-gray-700">Fecha</label>
                <input type="date" id="fecha" name="fecha" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div>
                <label for="titulo" class="block text-sm font-medium text-gray-700">Título</label>
                <input type="text" id="titulo" name="titulo" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div>
                <label for="texto" class="block text-sm font-medium text-gray-700">Texto</label>
                <textarea id="texto" name="texto" rows="4" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"></textarea>
            </div>
            <div>
                <label for="media" class="block text-sm font-medium text-gray-700">Subir Imagen o Video</label>
                <input type="file" id="media" name="media" accept="image/*,video/*" class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-100 file:text-blue-700 hover:file:bg-blue-200">
            </div>
            <div class="text-center">
                <button type="submit" class="bg-blue-700 text-white px-6 py-2 rounded-md hover:bg-blue-800">Publicar</button>
            </div>
        </form>
    </section>
</body>
</html>

@endsection("novedades")
