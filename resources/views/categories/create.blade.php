<x-shared.layout>
    <h1 class="text-center text-3xl mt-4">Agregar nueva categoría</h1>
    <div class="px-4 max-w-screen-lg mx-auto mt-4">
        @if (session('status'))
            <x-alert>
                {{ session('status') }}
            </x-alert>
        @endif
        <form action="{{ route('categories.store') }}" method="post" class="">
                @csrf
                <div class="grid gap-2 grid-cols-1 lg:grid-cols-2">
                    <x-inputs.input id="inName" placeholder="Nombre de la categoría"
                        label="Nombre de la categoría" name="name"
                        ></x-inputs.input>

                    <x-inputs.input id="inBrand" placeholder="Marca de la categoría"
                        label="Marca de la categoría" name="brand"></x-inputs.input>
                </div>
                <div class="mt-4 flex gap-2 justify-end">
                    <x-buttons.link color="secondary" href="{{ route('categories.index') }}">
                        Regresar
                    </x-buttons.link>
                    <x-buttons.basic type="submit" color="primary">
                        Guardar
                    </x-buttons.basic>
                </div>
            </form>
    </div>

</x-shared.layout>
