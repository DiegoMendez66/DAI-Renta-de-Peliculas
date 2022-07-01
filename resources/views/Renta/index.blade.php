<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Historial de peliculas rentadas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
            <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-gray-800 text-white">
                        <th class="border px-4 py-3">NOMBRE</th>
                        <th class="border px-4 py-3">APELLIDO PATERNO</th>
                        <th class="border px-4 py-3">APELLIDO MATERNO</th>
                        <th class="border px-4 py-3">PELICULA</th>
                        <th class="border px-4 py-3">FECHA DE RENTA</th>
                        <th class="border px-4 py-3">FECHA DEVOLUCIÓN</th>
                    </tr>  
                </thead>    
                <tbody>
                    @foreach ($rentas as $row)
                    <tr align="center">
                        <td class="border px-4 py-3">{{$row->nombrecli}}</td>
                        <td class="border px-4 py-3">{{$row->apellido_paterno}}</td>
                        <td class="border px-4 py-3">{{$row->apellido_materno}}</td>
                        <td class="border px-4 py-3">{{$row->nombre}}</td>
                        <td class="border px-4 py-3">{{$row->fecha_registro}}</td>
                        <td class="border px-4 py-3">{{$row->fecha_devolucion}}</td>               
                    </tr>
                    @endforeach   
                </tbody>  
                     
            </table>   
            </div>
        </div>
    </div>
</x-app-layout>
