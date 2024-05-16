
<x-layouts.layout>

<div class="p-10 overflow-x-auto shadow-md sm:rounded-lg h-full">
    @if (session()->get("status"))
        <div role="alert" class="flex items-center bg-blue-500 text-white text-sm font-bold px-4 py-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
            <span>{{ session()->get("status") }}</span>
        </div>
    @endif  
    <h1 class="pb-4 text-4xl text-gray-500 text-center">Listado de alumnos</h1>

    
    <a href="{{ route("alumnos.create") }}" class=" py-2 px-2 ml-5 md:dark:hover:text-blue-500 bg-white rounded-lg" >Nuevo alumno</a>

    <table class="mt-10 w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400"> 
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400  ">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Nombre
                </th>
                <th scope="col" class="px-6 py-3">
                    DNI
                </th>
                <th scope="col" class="px-6 py-3">
                    Edad
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    
                </th>
                <th scope="col" class="px-6 py-3">
                    
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($alumnos as $alumno)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$alumno->nombre}}
                        </td>
                        <td class="px-6 py-4">
                            {{$alumno->DNI}}
                        </td>
                        <td class="px-6 py-4">
                            {{$alumno->edad}}
                        </td>
                        <td class="px-6 py-4">
                            {{$alumno->email}}
                        </td>
                        {{-- Editar --}}
                        <td class="py-4">
                            <a href="{{ route("alumnos.edit", $alumno->id) }}" >
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-blue-300">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                                </svg>
                            </a>
                        </td>
                        {{-- Borrar --}}
                        <td class="py-4">
                            <form action="{{ route("alumnos.destroy", $alumno->id) }}" method="POST">
                                @csrf
                                @method("DELETE")
                            <button type="submit" >
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-red-700">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                            </button>
                            </form>
                        </td>
                    </tr>
            @endforeach
        </tbody>
    </table>
</div>

</x-layouts.layout>