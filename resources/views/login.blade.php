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
    <section class="flex flex-col items-center justify-center bg-white w-full h-screen">
        <div class="flex flex-col items-center justify-center rounded-lg pt-6 w-1/3 h-fit bg-gray-100">
            <div class="flex flex-col items-center justify-center p-2 gap-1 text-4xl tracking-tight">
            <div class="text-[30px] font-bold pt-1">
                Sign In
            </div>
            <!-- Login box -->
            <form action="loginuser" method="POST" class="flex flex-col w-full p-6 rounded-lg h-fit">
                @csrf
                @if (session('message'))
                    <div class="w-full p-2 text-sm text-center rounded-full bg-slate-300">
                    {{ session('message') }}
                    </div>
                @endif
                <!-- Email Input -->
                <div class="flex flex-col items-center text-[25px] ">
                    <div class="flex flex-row gap-3 p-3">
                        <input class="font-semibold rounded-sm p-2 placeholder:text-gray-700 placeholder:text-[18px] placeholder:p-2 bg-gray-200" name="email" type="email" placeholder="EMAIL" required/>
                    </div>
                <!-- Password Input -->
                    <div class="flex flex-row items-center gap-3 p-3">
                        <input class="font-semibold rounded-sm p-2 placeholder:text-gray-700 placeholder:text-[18px] placeholder:p-2 bg-gray-200" minlength={6} maxlength="16" name="password" type="password" placeholder="PASSWORD" required/>
                    </div>
                </div>
                <!-- Stay Signed In -->
                <div class="form-check flex flex-row items-center justify-start pb-3 pl-3">
                    <input class="form-check-input appearance-none h-5 w-5 border border-gray-300 rounded-sm bg-gray-200 checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label inline-block pt-1 text-[15px] text-gray-800" for="flexCheckDefault">
                        Stay Signed In
                    </label>
                </div>
                <!-- Log In Button -->
                <div class="flex flex-col pb-16 items-center">
                <button type="submit" class="flex flex-row justify-center w-1/2 pt-2 pb-2 text-[12px] font-bold tracking-wide text-gray-700 bg-gray-200 rounded-sm">
                LOG IN
                </button>
                </div>
                <!-- Register Anchor -->
                <div class="flex flex-col items-center justify-center pt-2 pb-6 text-[16px] leading-normal text-gray-700">
                    <span>CAN'T SIGN IN?</span>
                    <a href="register" class=""><strong>CREATE ACCOUNT</strong></a>
                </div>
            </form>
            </div>
        </div>
    </section>
        <script>
        </script>
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
        @livewireScripts
    </body>
</html>
