<div class="flex flex-col items-center">
    <div class="flex flex-wrap justify-center mt-4">
        <a href="{{ route('admin', ['section' => 'usuarios']) }}"
            class="card bg-white shadow-md rounded-lg m-4 text-center p-6 w-48 h-36 flex flex-col items-center justify-center text-gray-700">
            <h3 class="text-xl font-semibold">Usuarios</h3>
            <p class="text-gray-500">Gestión de usuarios</p>
        </a>
        <a href="{{ route('admin', ['section' => 'elementos']) }}"
            class="card bg-white shadow-md rounded-lg m-4 text-center p-6 w-48 h-36 flex flex-col items-center justify-center text-gray-700">
            <h3 class="text-xl font-semibold">Elementos</h3>
            <p class="text-gray-500">Gestión de los elementos de los profesores</p>
        </a>
        <a href="{{ route('admin', ['section' => 'anuncios']) }}"
            class="card bg-white shadow-md rounded-lg m-4 text-center p-6 w-48 h-36 flex flex-col items-center justify-center text-gray-700">
            <h3 class="text-xl font-semibold">Anuncios</h3>
            <p class="text-gray-500">Gestión de anuncios</p>
        </a>
        <a href="{{ route('admin', ['section' => 'profesores']) }}"
            class="card bg-white shadow-md rounded-lg m-4 text-center p-6 w-48 h-36 flex flex-col items-center justify-center text-gray-700">
            <h3 class="text-xl font-semibold">Profesores</h3>
            <p class="text-gray-500">Gestión de profesores</p>
        </a>
        <a href="{{ route('admin', ['section' => 'materias']) }}"
            class="card bg-white shadow-md rounded-lg m-4 text-center p-6 w-48 h-36 flex flex-col items-center justify-center text-gray-700">
            <h3 class="text-xl font-semibold">Materias</h3>
            <p class="text-gray-500">Gestion de materias</p>
        </a>
        <a href="{{ route('admin', ['section' => 'estrategias']) }}"
            class="card bg-white shadow-md rounded-lg m-4 text-center p-6 w-48 h-36 flex flex-col items-center justify-center text-gray-700">
            <h3 class="text-xl font-semibold">Estrategias</h3>
            <p class="text-gray-500">Gestion de estrategias</p>
        </a>
        <a href="{{ route('admin', ['section' => 'reportes']) }}"
            class="card bg-white shadow-md rounded-lg m-4 text-center p-6 w-48 h-36 flex flex-col items-center justify-center text-gray-700">
            <h3 class="text-xl font-semibold">Reportes</h3>
            <p class="text-gray-500">Revisa los reportes</p>
        </a>
    </div>
</div>
