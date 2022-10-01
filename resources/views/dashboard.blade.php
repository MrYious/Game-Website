<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>ChromaHunt</title>
        @livewireStyles
    </head>
    <body>
        <!-- SCROLL TO TOP BUTTON -->
        <livewire:scroll-top />
        
        <!-- NAVBAR LOGOUT -->
        <livewire:navbarlogout />

        <div class="flex flex-col items-center justify-center w-full h-screen gap-5 p-8">
            <div class="text-3x1">Welcome</div>
            <div class="text-3xl"></div>
        </div>
        <!-- FOOTER -->
        <livewire:footer />

        <script>
        </script>
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
        @livewireScripts
    </body>
</html>