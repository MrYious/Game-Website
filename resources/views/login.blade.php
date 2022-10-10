<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>Login | ChromaHunt </title>
        @livewireStyles
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700;800;900&family=Karla:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Metamorphous&display=swap" rel="stylesheet">
    </head>
    <body class="bg-[#1B3131]">
        <livewire:navbar />
    <section class="flex flex-col items-center justify-center w-full h-screen">
        <div class="flex flex-col items-center justify-center w-1/3 pt-6 bg-[#091010] rounded-lg h-fit">
            <div class="flex flex-col items-center justify-center gap-1 p-2 text-4xl tracking-tight">
            <div class="text-[30px] text-white font-title font-bold pt-1">
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
                        <input class="font-body rounded-sm p-2 placeholder:text-gray-700 placeholder:text-[18px] placeholder:p-2 bg-gray-200 placeholder:font-body" name="email" type="email" placeholder="EMAIL" required/>
                    </div>
                <!-- Password Input -->
                    <div class="flex flex-row items-center gap-3 p-3">
                        <input class="font-body rounded-sm p-2 placeholder:text-gray-700 placeholder:text-[18px] placeholder:p-2 bg-gray-200 placeholder:font-body" minlength={6} maxlength="16" name="password" type="password" placeholder="PASSWORD" required/>
                    </div>
                </div>
                <!-- Stay Signed In -->
                <div class="flex flex-row items-center justify-start pb-3 pl-3 form-check">
                    <input class="float-left w-5 h-5 mt-1 mr-2 align-top transition duration-200 bg-gray-200 bg-center bg-no-repeat bg-contain border border-gray-300 rounded-sm appearance-none cursor-pointer form-check-input checked:bg-blue-600 checked:border-blue-600 focus:outline-none" type="checkbox" value="" id="flexCheckDefault">
                    <label class="font-body form-check-label inline-block pt-1 text-[15px] text-white" for="flexCheckDefault">
                        Stay Signed In
                    </label>
                </div>
                <!-- Log In Button -->
                <div class="flex flex-col items-center pb-16">
                <button type="submit" class="flex flex-row justify-center w-1/2 pt-2 pb-2 text-[12px] font-title font-bold tracking-wide text-white bg-[#3F7373] rounded-sm">
                LOG IN
                </button>
                </div>
                <!-- Register Anchor -->
                <div class="flex flex-col items-center justify-center pt-2 pb-6 text-[16px] leading-normal text-white font-header">
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
