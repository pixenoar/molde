<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
        <meta name="description" content="@yield('description')">
        @vite(['resources/scss/auth.scss', 'resources/js/auth.js'])
        @livewireStyles
    </head>
    <body>
        <main>
            {{ $slot }}
        </main>
        @livewireScripts
    </body>
</html>