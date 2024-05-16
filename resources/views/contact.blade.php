<x-layouts.layout>
  <main class="container mx-auto p-6 bg-white rounded shadow-md  overflow-x-auto   h-full">
    <h2 class="text-2xl font-semibold mb-6">Contacto</h2>
    
    <!-- Información de Contacto -->
    <section class="mb-10">
        <h3 class="text-xl font-semibold mb-4">Información de Contacto</h3>
        <p><strong>Dirección:</strong> Calle Falsa 123, Ciudad, País</p>
        <p><strong>Teléfono:</strong> +123 456 789</p>
        <p><strong>Email:</strong> contacto@institutoxyz.edu</p>
    </section>
    
    <!-- Formulario de Contacto -->
    <section class="mb-10">
        <h3 class="text-xl font-semibold mb-4">Formulario de Contacto</h3>
        <form class="space-y-6">
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Nombre</label>
                <input type="text" id="name" name="name" class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div>
                <label for="message" class="block text-sm font-medium text-gray-700">Mensaje</label>
                <textarea id="message" name="message" rows="4" class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"></textarea>
            </div>
            <div>
                <button type="submit" class="w-full py-2 px-4 bg-blue-600 text-white font-semibold rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Enviar</button>
            </div>
        </form>
    </section>
    
    <!-- Mapa de Ubicación -->
    <section>
        <h3 class="text-xl font-semibold mb-4">Ubicación</h3>
        <div class="aspect-w-16 aspect-h-9">
            <iframe class="w-full h-full border-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.156536420672!2d-122.41941528467613!3d37.77492917975907!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085808c9edc1a1b%3A0x78d5a1a2e2b2e7af!2sInstituto+XYZ!5e0!3m2!1ses!2sus!4v1621518585874!5m2!1ses!2sus" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </section>
</main>
</x-layouts.layout>