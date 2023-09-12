<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
        <meta name="description" content="@yield('description')">

        <meta property="og:title" content="">
        <meta name="og:description" content="">  
        <meta property="og:url" content="">              
        <meta property="og:image" content="">

        @vite(['resources/scss/site.scss', 'resources/js/site.js'])
        @livewireStyles
    </head>
    <body>
        <main>
            @livewire('site.shared.header')
            {{ $slot }}
            @livewire('site.shared.footer')
        </main>
        @livewireScripts
        <!-- DESARROLLADO POR PIXENO | https://pixeno.ar -->
    </body>
</html>