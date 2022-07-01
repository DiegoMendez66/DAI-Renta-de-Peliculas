<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Datos de membresia') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
            <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-gray-800 text-white">
                        <th class="border px-4 py-3">ID MEMBRESIA</th>
                        <th class="border px-4 py-3">NOMBRE</th>
                        <th class="border px-4 py-3">FECHA DE EXPEDICIÓN</th>
                        <th class="border px-4 py-3">FECHA DE EXPIRACIÓN</th>
                    </tr>  
                </thead>    
                <tbody>
                    @foreach ($membresia as $row)
                    <tr align="center">
                        <td class="border px-4 py-3">{{$row->idmembresia}}</td>
                        <td class="border px-4 py-3">{{$row->nombrecli}}</td>
                        <td class="border px-4 py-3">{{$row->fecha_expedicion}}</td>
                        <td class="border px-4 py-3">{{$row->fecha_expiracion}}</td>              
                    </tr>
                    @endforeach   
                </tbody>  
                     
            </table>   
            </div>
        </div>
    </div>
        <h2 class="font-bold text-xl text-yellow-800 leading-tight" align="center">
            {{ __('Membresia activa') }}
        </h2><br><br>
        <div class="lg:flex items-center justify-center">
            <div>
                <img src="https://cdn.discordapp.com/attachments/990027599776481292/992217092109635774/unknown.png" class="max-w-xl h-80" alt="sitting room" />
            </div>
            </div>
        </div>
        
</x-app-layout>
