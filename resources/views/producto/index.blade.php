<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Productos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <!-- Botón para agregar producto -->
                <div class="flex justify-end mb-4">
                    <a href="{{ route('producto.create') }}"
                       class="px-4 py-2 bg-green-600 text-black rounded hover:bg-green-700">
                        Agregar Producto
                    </a>
                </div>

                @if ($productos->isEmpty())
                    <p class="p-4">No hay productos disponibles.</p>
                @else
                    <div class="overflow-x-auto">
                        <table id="productos" class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium uppercase text-gray-500">Nombre</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium uppercase text-gray-500">Descripción</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium uppercase text-gray-500">Precio</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium uppercase text-gray-500">Cantidad</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium uppercase text-gray-500">Acciones</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($productos as $producto)
                                    <tr>
                                        <td class="px-6 py-4">{{ $producto->NOM_PROD }}</td>
                                        <td class="px-6 py-4">{{ $producto->DESCRIPCION_PROD }}</td>
                                        <td class="px-6 py-4">{{ $producto->PRECIO_PROD }}</td>
                                        <td class="px-6 py-4">{{ $producto->CANTIDAD_PROD }}</td>

                                        <td class="px-6 py-4 flex space-x-2">
                                            <a href="{{ route('producto.edit', $producto->ID_PRODUCTO) }}"
                                               class="px-3 py-1 bg-blue-500 text-white rounded hover:bg-blue-600">
                                                Editar
                                            </a>

                                            <form action="{{ route('producto.destroy', $producto->ID_PRODUCTO) }}" method="POST"
                                                  onsubmit="return confirm('¿Estás seguro de que deseas eliminar este producto?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                        class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600">
                                                    Eliminar
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif

            </div>
        </div>
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
        $(document).ready(function() {
            $('#productos').DataTable({
                pageLength: 20,
                dom: '<"flex justify-between items-center mb-4"Bf>rtip',
                buttons: [
                    {
                        extend: 'copy',
                        text: 'Copiar',
                        className: 'dt-btn'
                    },
                    {
                        extend: 'csv',
                        text: 'CSV',
                        className: 'dt-btn'
                    },
                    {
                        extend: 'excel',
                        text: 'Excel',
                        className: 'dt-btn'
                    },
                    {
                        extend: 'pdf',
                        text: 'PDF',
                        className: 'dt-btn'
                    },
                    {
                        extend: 'print',
                        text: 'Imprimir',
                        className: 'dt-btn'
                    }
                ],
                language: {
                    url: 'https://cdn.datatables.net/plug-ins/1.13.8/i18n/es-ES.json'
                }
            });
        });
    </script>

    <style>
        /* Forzar los botones en fila horizontal */
        .dt-buttons {
            display: flex !important;
            gap: 8px !important;
            align-items: center !important;
        }

        /* Estilo Tailwind-like para los botones */
        .dt-btn {
            background-color: #2563eb !important; /* azul */
            color: #fff !important;
            font-weight: 500;
            border-radius: 0.375rem;
            padding: 6px 12px;
            transition: background 0.2s;
        }
        .dt-btn:hover {
            background-color: #1e40af !important;
        }
    </style>
</x-app-layout>
