@extends("plantilla.index")

@section("inicio")

 <!-- Sección: Historia del colegio -->
    <section class="max-w-6xl mx-auto px-6 py-12 grid md:grid-cols-2 gap-10 items-center">
        <div>
            <h2 class="text-3xl font-semibold mb-4 text-blue-900">Nuestra Historia</h2>
            <p class="text-lg text-gray-700 mb-4">
                La <strong>Escuela de Educación Secundaria Técnica N.º 11 "Islas Malvinas"</strong> fue fundada el <strong>11 de mayo de 1964</strong> en Ciudad Evita, partido de La Matanza, provincia de Buenos Aires. Desde sus comienzos se ha dedicado a la formación técnica de jóvenes, fomentando la educación como motor del desarrollo personal y profesional.
            </p>
            <p class="text-lg text-gray-700 mb-4">
                Con una fuerte vocación educativa, la escuela ha logrado consolidar su prestigio a través de los años. Hoy en día ofrece especialidades en <strong>Informática</strong> y <strong>Electromecánica</strong>, preparando a los estudiantes para afrontar los desafíos tecnológicos del presente y del futuro.
            </p>
            <p class="text-sm text-gray-600">
                Fuente: <a href="https://cdadevita.com.ar/secciones/Historias/Malvinas/Historias_MALVINAS.htm" target="_blank" class="text-blue-700 underline">Historias Malvinas - Ciudad Evita</a>
            </p>
        </div>
        <img src="imagenes/entrada.jpg" alt="Entrada del colegio" class="rounded-xl shadow-lg">
    </section>

    <!-- Sección: Información del colegio -->
    <section class="bg-white py-10">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h2 class="text-2xl font-semibold text-blue-900 mb-4">Información de la Escuela</h2>
            <p class="text-gray-700 mb-2"><strong>Dirección:</strong> El Espinillo 49, Ciudad Evita, Buenos Aires</p>
            <p class="text-gray-700 mb-2"><strong>Teléfono:</strong> (011) 4657-6937</p>
            <p class="text-gray-700 mb-2"><strong>Tipo:</strong> Escuela Técnica Pública</p>
            <p class="text-gray-700"><strong>Mapa y más info:</strong> <a href="https://ciudadevita.info/item/escuela-tecnica-n-11-islas-malvinas/" target="_blank" class="text-blue-700 underline">Ciudad Evita Info</a></p>
        </div>
    </section>

    <!-- Sección: Fotos del colegio -->
    <section id="fotos" class="bg-gray-50 py-12">
        <div class="max-w-6xl mx-auto px-6">
            <h2 class="text-3xl font-semibold mb-8 text-center text-blue-900">Fotos del Colegio</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <img src="/images/foto1.jpg" class="rounded-lg shadow-md" alt="Foto 1">
                <img src="/images/foto2.jpg" class="rounded-lg shadow-md" alt="Foto 2">
                <img src="/images/foto3.jpg" class="rounded-lg shadow-md" alt="Foto 3">
            </div>
        </div>
    </section>

@endsection("inicio")
