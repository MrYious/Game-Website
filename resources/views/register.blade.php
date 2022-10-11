<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>Register | ChromaHunt </title>
        @livewireStyles
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700;800;900&family=Karla:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Metamorphous&display=swap" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    </head>
    <body class="bg-[#1B3131]">
        <livewire:navbar />
    <section class="flex flex-row items-center justify-center w-full h-screen">
        <div class="pt-60 pr-20 flex flex-wrap  items-justify-center">
            <img class="w-[150px] h-[150px]" src="/images/sprite1.png" alt="Ezra">
            <img class="w-[150px] h-[150px]" src="/images/sprite2.png" alt="Signe">
        </div>
        <div class="flex flex-col items-center justify-center w-1/3 pt-6 bg-[#091010] rounded-lg h-fit">
            <div class="flex flex-col items-center justify-center gap-1 p-2 text-4xl tracking-tight">
            <div class="text-[30px] text-white font-title font-bold pt-1">
                Register
            </div>
            <!-- Register box -->
            <form action="registeruser" method="POST"class="flex flex-col w-full rounded-lg h-fit">
                @csrf
                @if (session('message'))
                    <div class="w-full p-2 text-sm text-center rounded-full bg-red-300">
                    {{ session('message') }}
                    </div>
                @endif
                <div class="flex flex-col items-start text-[25px] ">
                    <!-- Name -->
                    <div class="flex flex-row gap-3 p-3">
                        <input class="font-body rounded-sm p-2 placeholder:text-gray-700 placeholder:text-[18px] placeholder:p-2 bg-gray-200" maxlength="30" name="name" type="text" placeholder="NAME" required/>
                    </div>
                    <!-- Email -->
                    <div class="flex flex-row items-center gap-3 p-3">
                        <input class="font-body rounded-sm p-2 placeholder:text-gray-700 placeholder:text-[18px] placeholder:p-2 bg-gray-200" name="email" type="email" placeholder="EMAIL" required/>
                    </div>
                    <!-- Password -->
                    <div class="flex flex-row gap-3 p-3">
                        <input class="font-body rounded-sm p-2 placeholder:text-gray-700 placeholder:text-[18px] placeholder:p-2 bg-gray-200" minlength={6} maxlength="16" name="password" type="password" placeholder="PASSWORD" required/>
                    </div>
                    <!-- Confirm Password -->
                    <div class="flex flex-row items-center gap-3 p-3">
                        <input class="font-body rounded-sm p-2 placeholder:text-gray-700 placeholder:text-[18px] placeholder:p-2 bg-gray-200" minlength={6} maxlength="16" name="confirmPassword" type="password" placeholder="CONFIRM PASSWORD" required/>
                    </div>
                </div>
                <!-- Register Button -->
                <div class="flex flex-col items-center pt-2 pb-2">
                <button type="submit" class="flex flex-row justify-center w-1/2 pt-2 pb-2 text-[12px] font-title font-bold tracking-wide text-white bg-[#3F7373] rounded-sm">
                REGISTER
                </button>
                </div>
                <!-- Register Anchor -->
                <div class="flex flex-col items-center justify-center pt-2 pb-6 text-[16px] leading-normal text-white font-header">
                    <span>ALREADY HAVE AN ACCOUNT?</span>
                    <a href="login" class=""><strong>LOGIN HERE</strong></a>
                </div>
            </form>
            </div>
        </div>
        <div class="pt-60 pl-20 flex flex-wrap  items-justify-center">
            <img class="w-[150px] h-[150px]" src="/images/sprite3.png" alt="Lancet">
            <img class="w-[150px] h-[150px]" src="/images/sprite4.png" alt="Giannis">
        </div>
    </section>
        <script>
        </script>
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
        @livewireScripts
    </body>
</html>
