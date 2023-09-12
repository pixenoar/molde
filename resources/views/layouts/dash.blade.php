<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
        <meta name="description" content="@yield('description')">
        @vite(['resources/scss/dash.scss', 'resources/js/dash.js'])
        @livewireStyles
    </head>
    <body>
        <main>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-2 p-0">
                        @livewire('dash.shared.column')
                    </div>
                    <div class="col-lg-10 p-0">
                        @livewire('dash.shared.header')
                        <div class="p-4 p-lg-5">
                            {{ $slot }}
                        </div>
                    </div>
                </div>        
            </div>
        </main>
        @livewireScripts
    </body>
</html>