<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Easytime') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h1>Contenido Productos</h1>
                <div class="overflow-x-auto">
                    {{-- Aquí agregamos el id="products" --}}
                    <table id="products" class="display min-w-full bg-white border border-gray-300 rounded-lg shadow" style="width:100%">
                        <thead class="bg-gray-100 border-b">
                            <tr>
                                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-600">ID</th>
                                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-600">Nombre</th>
                                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-600">Precio</th>
                                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-600">Stock</th>
                                <th class="px-6 py-3 text-center text-sm font-semibold text-black-600">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($productos as $prod)
                                <tr class="border-b hover:bg-gray-50">
                                    <td class="px-6 py-3">{{ $prod->ID_PRODUCTO }}</td>
                                    <td class="px-6 py-3">{{ $prod->NOM_PROD }}</td>
                                    <td class="px-6 py-3">{{ $prod->PRECIO_PROD }}</td>
                                    <td class="px-6 py-3">{{ $prod->CANTIDAD_PROD }}</td>
                                    <td class="px-6 py-3 text-center">
                                        <a href="{{ route('producto.edit', $prod->ID_PRODUCTO) }}" class="text-blue-600 hover:underline">Editar</a>
                                        <form action="{{ route('producto.destroy', $prod->ID_PRODUCTO) }}" method="POST" class="inline-block ml-2">
                                            @csrf
                                             @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:underline">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                {{-- jQuery + DataTables (CDN) --}}
                <link rel="stylesheet" href="https://cdn.datatables.net/1.13.8/css/jquery.dataTables.min.css">
                <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">
                <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
                <script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>
                <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
                <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
                <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>

                <script>
                $(function() {
                    $('#products').DataTable({
                        pageLength: 20,
                        dom: 'Bfrtip',
                        language: {
                            url: 'https://cdn.datatables.net/plug-ins/1.13.8/i18n/es-ES.json'
                        },
                        buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
                    });
                });
                </script>
            </div>
        </div>
    </div>
</x-app-layout>
