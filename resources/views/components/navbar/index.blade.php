@props([
    'title' => 'TecniCel'
])
<div class="sticky top-0 w-full border-b-2 border-slate-300 dark:border-slate-700 p-4 bg-slate-50 dark:bg-slate-900">
    <div class="container max-w-screen-lg m-auto flex justify-between items-center">
        <h1 class="text-xl text-slate-900 dark:text-slate-100">{{$title}}</h1>
        <nav class="space-x-4 flex items-center">

            <x-navbar.link class="hidden sm:inline-block">
                Inicio
            </x-navbar.link>
            <x-navbar.link class="hidden sm:inline-block">
                Acerca de
            </x-navbar.link>

            <x-navbar.link id="btnMenu">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                  </svg>
            </x-navbar.link>

            <x-dropdown class="right-0">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:stroke-sky-500 " fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                  </svg>

                  <x-slot name="items">
                    <x-dropdown.item id="btnLightTheme">Claro</x-dropdown.item>
                    <x-dropdown.item id="btnDarkTheme">Obscuro</x-dropdown.item>
                    <x-dropdown.item id="btnSystemTheme">Sistema</x-dropdown.item>
                  </x-slot>
            </x-dropdown>
        </nav>
    </div>

    <x-side-bar></x-side-bar>
</div>

