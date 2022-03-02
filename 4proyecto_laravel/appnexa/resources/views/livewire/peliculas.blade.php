<x-slot name="header">
    <h1 class="text-gray-900">CRUD de Peliculas</h1>
    <h4 class="text-gray-900">Laravel 8, Jetstream y Livewire</h4>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">

        @if(session()->has('message'))
        <div class="bg-teal-100 rounded-b text-teal-900 px-4 py-4 shadow-md my-3" role="alert">
            <div class="flex">
                <div>
                    <h4>{{session('message')}}</h4>
                </div>
            </div>
        </div>
        @endif


        <button wire:click="crear()" class="bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-2 px-4 my-3">Nuevo</button>
        @if($modal)
            @include('livewire.crear')
        @endif

            <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-indigo-600 text-white">
                        <th class="px-4 py-2">Id</th>
                        <th class="px-4 py-2">Título</th>
                        <th class="px-4 py-2">Año</th>
                        <th class="px-4 py-2">Genero</th>
                        <th class="px-4 py-2">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($peliculas as $pel)
                    <tr>
                        <td class="border px-4 py-2">{{$pel->id}}</td>
                        <td class="border px-4 py-2">{{$pel->titulo}}</td>
                        <td class="border px-4 py-2">{{$pel->anio}}</td>
                        <td class="border px-4 py-2">{{$pel->genero}}</td>
                        <td class="border px-4 py-2 text-center">
                            <button wire:click="editar({{$pel->id}})" class="bg-blue-500 hover:bg-blue-600 text-black font-bold py-2 px-4">Ver/Editar</button>
                            <button wire:click="borrar({{$pel->id}})" class="bg-red-500 hover:bg-red-600 text-black font-bold py-2 px-4">Borrar</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

   

