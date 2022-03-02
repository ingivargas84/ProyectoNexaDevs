<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>

        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>

        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">

            <form>
                <div class="bg-white px-4 pt-5 pb-a sm:p-6 sm:pb-4">
                    <div class="mb-4">
                        <label for="titulo" class="block text-gray-700 text-sm font-bold mb-2">Título</label>
                        <input type="text" class="shadow appearance-none border rounded w-full py-x px-3 text-gray-700 leading-tight focus:outile-none focus:shadow-outline" id="titulo" wire:model="titulo">
                    </div>
                    <div class="mb-4">
                        <label for="anio" class="block text-gray-700 text-sm font-bold mb-2">Año</label>
                        <input type="number" class="shadow appearance-none border rounded w-full py-x px-3 text-gray-700 leading-tight focus:outile-none focus:shadow-outline" id="anio" wire:model="anio">
                    </div>
                    <div class="mb-4">
                        <label for="Clasificacion" class="block text-gray-700 text-sm font-bold mb-2">Clasificacion</label>
                        <input type="text" class="shadow appearance-none border rounded w-full py-x px-3 text-gray-700 leading-tight focus:outile-none focus:shadow-outline" id="clasificacion" wire:model="clasificacion">
                    </div>
                    <div class="mb-4">
                        <label for="genero" class="block text-gray-700 text-sm font-bold mb-2">Género</label>
                        <input type="text" class="shadow appearance-none border rounded w-full py-x px-3 text-gray-700 leading-tight focus:outile-none focus:shadow-outline" id="genero" wire:model="genero">
                    </div>

                    <div class="bg-gray-50 px-4 py-3 sm:px-6 xm:flex sm:flex-row-reverse">
                        <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                            <button wire:click.prevent="buscar()" type="button" class="inline-flex justify-center w-full rounded-md border-transparent px-4 py-2 bg-purple-600 hover:bg-purple-800 focus:online-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">Buscar Película</button>
                        </span>

                        <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                            <button wire:click.prevent="guardar()" type="button" class="inline-flex justify-center w-full rounded-md border-transparent px-4 py-2 bg-purple-600 hover:bg-purple-800 focus:online-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">Guardar</button>
                        </span>

                        <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                            <button wire:click.prevent="cerrarModal()" type="button" class="inline-flex justify-center w-full rounded-md border-transparent px-4 py-2 bg-purple-600 hover:bg-purple-800 focus:online-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">Cerrar</button>
                        </span>
                    </div>
                </div>
            </form>

        </div>

    </div>
</div>

