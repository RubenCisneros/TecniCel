<x-shared.layout>
    <div class="container mx-auto pt-4">
        <h1 class="text-3xl text-center">Crear cuenta</h1>

        <form action="{{ route('register') }}" class="max-w-screen-lg mx-auto p-4 space-y-4"
            method="post">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <x-inputs.input id="inName" placeholder="Nombre" label="Nombre" name="name"/>
                <x-inputs.input id="inFirstSurname" placeholder="Apellido paterno"
                 label="Apellido paterno" name="first_surname"/>
                <x-inputs.input id="inSecondSurname" placeholder="Segundo apellido"
                    label="Apellido materno" name="second_surname"/>
                <x-inputs.input id="inEmail" placeholder="correo@example.com"
                 label="Correo electrónico" name="email"/>
                <x-inputs.input id="inPassword" placeholder="Contraseña"
                    label="Contraseña" type="password" name="password"/>
                <x-inputs.input id="inPassworConfirm" placeholder="Confirmar contrasena"
                    label="Confirmar contraseña" type="password" name="password_confirmation"/>
            </div>
            <x-inputs.input-checkbox id="cbxRememberMe" label="Mantener sesión iniciada"
                name="remember_token"></x-inputs.input-checkbox>
            <div class="flex justify-end gap-2">
                <x-buttons.basic color="primary" type="submit">
                    Crear cuenta
                </x-buttons.basic>
                <x-buttons.link color="secondary" href="{{ route('login') }}">
                    Ya tengo una cuenta
                </x-buttons.link>
            </div>
        </form>
    </div>
</x-shared.layout>
