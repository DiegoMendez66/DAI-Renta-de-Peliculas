<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listado de usuarios') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
            <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-gray-800 text-white">
                        <th class="border px-4 py-3">ID</th>
                        <th class="border px-4 py-3">USUARIO</th>
                        <th class="border px-4 py-3">EMAIL</th>
                        <th class="border px-4 py-3">ROL</th>
                    </tr>  
                </thead>    
                <tbody>
                    @foreach ($usuarios as $row)
                    <tr align="center">
                        <td class="border px-4 py-3">{{$row->id}}</td>
                        <td class="border px-4 py-3">{{$row->name}}</td>
                        <td class="border px-4 py-3">{{$row->email}}</td>
                        <td class="border px-4 py-3">{{$row->role}}</td>               
                    </tr>
                    @endforeach   
                </tbody>  
                     
            </table>   
            </div>
        </div>
    </div>
</x-app-layout>