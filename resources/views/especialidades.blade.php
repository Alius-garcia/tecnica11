@extends("plantilla/index")

@section("especialidades")
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Especialidades | Colegio Ejemplo</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50 text-gray-900">
    <!-- Barra de navegación simple -->


    <!-- Sección de Especialidades -->
    <section class="max-w-6xl mx-auto px-6 py-12">
        <h2 class="text-3xl font-semibold text-blue-900 mb-10 text-center">Nuestras Especialidades</h2>

        <!-- Informática -->
        <div class="grid md:grid-cols-2 gap-8 items-center mb-16">
            <div>
                <h3 class="text-2xl font-semibold text-blue-800 mb-3">Informática</h3>
                <p class="text-gray-700 text-lg">La especialidad en informática forma estudiantes con capacidades técnicas en programación, redes, soporte técnico y desarrollo web. Nuestros alumnos egresan con habilidades sólidas para insertarse en el mundo laboral o continuar estudios superiores en tecnología.</p>
            </div>
            <img src="/images/informatica.jpg" alt="Informática" class="rounded-xl shadow-md">
        </div>

        <!-- Electromecánica -->
        <div class="grid md:grid-cols-2 gap-8 items-center flex-row-reverse">
            <div>
                <h3 class="text-2xl font-semibold text-blue-800 mb-3">Electromecánica</h3>
                <p class="text-gray-700 text-lg">La especialidad en electromecánica combina conocimientos de electricidad, mecánica y automatización industrial. Preparamos técnicos capaces de diagnosticar, mantener y reparar sistemas electromecánicos con un fuerte enfoque en la industria moderna.</p>
            </div>
            <img src="/images/electromecanica.jpg" alt="Electromecánica" class="rounded-xl shadow-md">
        </div>
    </section>

</body>
</html>
@endsection("especialidades")
