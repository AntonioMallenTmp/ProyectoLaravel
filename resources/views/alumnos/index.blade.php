<x-layouts.layout>
 
<h1 class="pt-4 text-4xl text-gray-500 text-center">Listado de alumnos</h1>

<div class="p-10 overflow-x-auto shadow-md sm:rounded-lg h-full">
    <table class=" w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400"> 
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
                    <span class="sr-only">Edit</span>
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
                        <td class="px-6 py-4 text-right">
                            <a href="#" class="btn font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        </td>
                    </tr>
            @endforeach
        </tbody>
    </table>
</div>

</x-layouts.layout>