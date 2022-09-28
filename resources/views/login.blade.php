<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>ChromaHunt Login</title>
        @livewireStyles
    </head>
    <body>
        <livewire:navbar />
        <div class="flex flex-col items-center justify-center w-full h-screen bg-slate-300">
            <div class="flex flex-col items-center justify-center gap-3 text-4xl font-bold tracking-tight">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-20 h-20 p-1 border-4 border-black rounded-full" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                </svg>
            <div>
                Login
            </div>
            <!-- Login box -->
            <form class="flex flex-col w-full p-6 h-fit bg-slate-500 rounded-lg">
                <div class="flex flex-col items-start text-[28px] ">
                    <div class="flex flex-row gap-3 p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                        </svg>
                        <input class="font-semibold" name="email" type="email" placeholder="Email*" required/>
                    </div>
                    <div class="flex flex-row gap-3 p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"></path>
                        </svg>
                        <input class="font-semibold" minlength={6} maxlength="16" name="password" type="password" placeholder="Password*" required/>
                    </div>
                </div>
                <button type="submit" class="flex justify-center w-full p-2 text-xl font-bold tracking-wide text-gray-200 bg-green-900 rounded-sm shadow-md shadow-black">
                LOGIN
                </button>
                <div class="flex text-[20px] pt-3 gap-1 justify-center">
                    <span>No account yet? </span>
                    <a href="register" class="text-red-500 font"> Register here. </a>
                </div>
            </form>
            </div>
        </div>

        <script>
        </script>
        @livewireScripts
    </body>
</html>
