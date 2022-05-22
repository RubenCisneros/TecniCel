<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TecniCel</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/theme.js') }}"></script>
</head>
<body class="bg-slate-50 dark:bg-slate-900 text-slate-800 dark:text-slate-300 box-border">
    <x-navbar></x-navbar>
    {{ $slot }}
    <script src="{{ asset('js/components.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
