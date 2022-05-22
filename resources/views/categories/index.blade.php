<x-shared.layout>
    <h1 class="text-3xl text-center mt-4">Categorias</h1>

    <div class="w-full mx-auto max-w-screen-lg p-4">
        @if (session('status'))
            <x-alert>
                {{ session('status') }}
            </x-alert>
        @endif
        <div>
            <x-buttons.link color="secondary" href="{{ route('categories.create') }}">
                Agregar
            </x-buttons.link>
        </div>
        <x-table>
            <x-table.t-head>
                <tr>
                    <th class="text-left">Nombre</th>
                    <th class="text-left">Marca</th>
                </tr>
            </x-table.t-head>
            <x-table.t-body>
                @foreach ($categories as $category)
                <x-table.tr>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->brand }}</td>
                    <td>
                        <x-links.link href="{{ route('categories.edit', ['category' => $category->id]) }}">
                            Editar
                        </x-links.link>
                    </td>
                </x-table.tr>
                @endforeach
            </x-table.t-body>
        </x-table>
    </div>
</x-shared.layout>
