<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        @livewireStyles
    </head>
    <body>
        <div class="flex flex-col items-center justify-center text-3xl w-full h-screen gap-3 bg-slate-300">
            <div>SAMPLE CENTER CONTENT</div>
            <livewire:counter />
        </div>

        @livewireScripts
    </body>
</html>
