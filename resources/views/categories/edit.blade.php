<x-shared.layout>
    <h1 class="text-2xl text-center mt-4">{{ $category->name }} - {{ $category->brand }}</h1>
    <form action="{{ route('categories.update', ['category' => $category->id]) }}" class="p-4 max-w-screen-lg mx-auto"
        method="post">
        @csrf
        @method('put')
        <div class="grid gap-2 grid-cols-1 lg:grid-cols-2">
            <x-inputs.input id="inName" placeholder="Nombre de la categoría"
            value="{{ old('name', $category->name) }}"
            label="Nombre"
            name="name"></x-inputs.input>

            <x-inputs.input id="inBrand" placeholder="Marca"
            value="{{ old('brand', $category->brand) }}"
            label="Marca"
            name="brand"></x-inputs.input>
        </div>
        <div class="mt-4 space-x-2 flex justify-end">
            <x-buttons.link color="secondary" href="{{ route('categories.index') }}">
                Regresar
            </x-buttons.link>
            <x-buttons.basic type="submit" color="primary">
                Guardar
            </x-buttons.basic>
        </div>
    </form>
</x-shared.layout>
