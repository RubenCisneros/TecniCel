<x-shared.layout>
    <div class="container mx-auto pt-4">
        <h1 class="text-3xl text-center">Log In</h1>

        <form action="{{ route('authenticate') }}" method="post"
             class="mt-4 p-4 max-w-screen-sm mx-auto space-y-4">
            @csrf
            <x-inputs.input placeholder="correo@example.com" :msg="'Correo no válido'"
        type="email" :label="'Correo electrónico'" id="inEmail" name="email"
        {{-- :hasError="false" :isValid="true" --}}>
        </x-inputs.input>

        <x-inputs.input placeholder="contraseña" id="inPassword" :msg="'Las contraseñas no coindicen'"
            type="password" :label="'Contraseña'" name="password">

        </x-inputs.input>
        <x-inputs.input-checkbox label="Mantener sesión iniciada" id="cbxRememberMe"
            name="remember_token">

        </x-inputs.input-checkbox>
        <div class="flex justify-end gap-2">
            <x-buttons.basic color="primary" type="submit">
                Entrar
            </x-buttons.basic>
            <x-buttons.link color="secondary" href="{{ route('register')}}">
                Registrar me
            </x-buttons.link>
        </div>
    </form>


    </div>
</x-shared.layout>

