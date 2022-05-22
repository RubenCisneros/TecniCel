<aside class="fixed left-0 top-16 w-52
h-screen bg-slate-50 dark:bg-slate-900 border-r-2 border-slate-300
 dark:border-slate-700 flex flex-col items-start gap-2 pt-4 pl-4
  -translate-x-full transition-transform"
  id="sidebar">

 <x-navbar.link href="{{ route('home')}}">
     Inicio
 </x-navbar.link>
 <x-navbar.link href="{{ route('about') }}">
    Acerca De
 </x-navbar.link>
 <x-navbar.link href="{{ route('categories.index')}}">
     Categorias
 </x-navbar.link>

@auth
    <x-navbar.link href="/logout">
        Cerrar sesión
    </x-navbar.link>
@else
    <x-navbar.link href="{{ route('login') }}">
        Iniciar sesión
    </x-navbar.link>
    <x-navbar.link href="{{ route('register') }}">
        Crear cuenta
    </x-navbar.link>
@endauth

</aside>
