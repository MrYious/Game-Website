<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>ChromaHunt Register</title>
        @livewireStyles
    </head>
    <body>
        <livewire:navbar />
    <section class="flex flex-col items-center justify-center bg-white w-full h-screen">
        <div class="flex flex-col items-center justify-center rounded-lg pt-6 w-1/3 h-fit bg-gray-100">
            <div class="flex flex-col items-center justify-center p-2 gap-1 text-4xl tracking-tight">
            <div class="text-[30px] font-bold pt-1">
                Register
            </div>
            <!-- Register box -->
            <form action="registeruser" method="POST"class="flex flex-col w-full rounded-lg h-fit">
                @csrf
                @if (session('message'))
                    <div class="w-full p-2 text-sm text-center rounded-full bg-slate-300">
                    {{ session('message') }}
                    </div>
                @endif
                <div class="flex flex-col items-start text-[25px] ">
                    <!-- Name -->
                    <div class="flex flex-row gap-3 p-3">
                        <input class="font-semibold rounded-sm p-2 placeholder:text-gray-700 placeholder:text-[18px] placeholder:p-2 bg-gray-200" maxlength="30" name="name" type="text" placeholder="NAME" required/>
                    </div>
                    <!-- Email -->
                    <div class="flex flex-row items-center gap-3 p-3">
                        <input class="font-semibold rounded-sm p-2 placeholder:text-gray-700 placeholder:text-[18px] placeholder:p-2 bg-gray-200" name="email" type="email" placeholder="EMAIL" required/>
                    </div>
                    <!-- Password -->
                    <div class="flex flex-row gap-3 p-3">
                        <input class="font-semibold rounded-sm p-2 placeholder:text-gray-700 placeholder:text-[18px] placeholder:p-2 bg-gray-200" minlength={6} maxlength="16" name="password" type="password" placeholder="PASSWORD" required/>
                    </div>
                    <!-- Confirm Password -->
                    <div class="flex flex-row items-center gap-3 p-3">
                        <input class="font-semibold rounded-sm p-2 placeholder:text-gray-700 placeholder:text-[18px] placeholder:p-2 bg-gray-200" minlength={6} maxlength="16" name="confirmPassword" type="password" placeholder="CONFIRM PASSWORD" required/>
                    </div>
                </div>
                <!-- Register Button -->
                <div class="flex flex-col pt-2 pb-2 items-center">
                <button type="submit" class="flex flex-row justify-center w-1/2 pt-2 pb-2 text-[12px] font-bold tracking-wide text-gray-700 bg-gray-200 rounded-sm">
                REGISTER
                </button>
                </div>
                <!-- Register Anchor -->
                <div class="flex flex-col items-center justify-center pt-2 pb-6 text-[16px] leading-normal text-gray-700">
                    <span>ALREADY HAVE AN ACCOUNT?</span>
                    <a href="login" class=""><strong>LOGIN HERE</strong></a>
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
