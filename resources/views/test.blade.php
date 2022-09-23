<!-- DUPLICATE THIS TEMPLATE FOR NEW PAGES -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>ChromaHunt</title>
        @livewireStyles
    </head>
    <body class=" bg-slate-400">
        <!-- INSERT YOUR CODE HERE -->

        <section class="flex flex-col w-full h-screen bg-red-300 ">
            <div class="p-[200px] m-3 bg-[#e28743]">Section 1</div>
            <div class="p-6 m-3 bg-red-900">Section 9</div>
        </section>
        <section class="flex items-center justify-center w-full h-screen gap-20 bg-gray-700">
            <!-- MESSAGE -->
            <div class="flex flex-col items-start justify-start w-2/5 gap-2 p-12 bg-gray-500 h-fit">
                <div class="cursor-pointer text-8xl hover:text-green-700 hover:font-bold">Title</div>
                <div class="text-lg">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur ducimus perferendis, deserunt aspernatur quas odit totam, modi accusantium, cum quos adipisci vel? Nostrum dolores similique inventore, impedit distinctio perferendis cumque!</div>
                <div class="flex gap-3 ">
                    <button class="p-2 px-3 bg-green-700 border-2 border-black rounded-md shadow-md shadow-black">SAMPLE BUTTON</button>
                    <button class="p-2 px-3 bg-green-700 border-2 border-black rounded-md shadow-md shadow-black">SAMPLE BUTTON</button>
                </div>
            </div>
            <!-- LOGIN FORM -->
            <form class="flex flex-col w-1/3 h-1/2 bg-slate-700">
                <!-- TITLE -->
                <div class="py-5 text-4xl font-semibold text-center bg-gray-500">Title</div>
                <!-- BODY -->
                <div class="flex flex-col h-full gap-3 p-5 bg-gray-300">
                    <!-- INPUTS -->
                    <div class="flex flex-col w-full gap-2 bg-red-500">
                        <input class="px-3 py-2 border-2 border-black" type="email" placeholder="Email">
                        <input class="px-3 py-2 border-2 border-black " type="password" placeholder="Password">
                        <a class="">Forget Password?</a>
                    </div>
                    <!-- SUBMIT -->
                    <div class="flex flex-col w-full gap-2 bg-gray-100">
                        <input class="p-3 bg-blue-600 rounded-md shadow-sm cursor-pointer shadow-black" type="button" value="Login">
                        <div class="py-1 text-center bg-red-500">Not a member? <a href="">Signup now</a></div>
                    </div>
                </div>
           </form>
        </section>
        <section class="flex items-center justify-between w-full h-screen bg-green-800 gap-52 ">
            <div class="flex flex-wrap justify-center w-1/4 gap-2 p-4 bg-gray-400 h-fit">
                <div class="flex flex-col items-center justify-center p-2 bg-blue-700 w-52 h-52">
                    <div>Name</div>
                    <div>Email</div>
                    <div>Age</div>
                    <div>Gender</div>
                </div>
                <div class="flex flex-col items-center justify-center p-2 bg-blue-700 w-52 h-52">
                    <div>Name</div>
                    <div>Email</div>
                    <div>Age</div>
                    <div>Gender</div>
                </div>
                <div class="flex flex-col items-center justify-center p-2 bg-blue-700 w-52 h-52">
                    <div>Name</div>
                    <div>Email</div>
                    <div>Age</div>
                    <div>Gender</div>
                </div>
                <div class="flex flex-col items-center justify-center p-2 bg-blue-700 w-52 h-52">
                    <div>Name</div>
                    <div>Email</div>
                    <div>Age</div>
                    <div>Gender</div>
                </div>
                <div class="flex flex-col items-center justify-center p-2 bg-blue-700 w-52 h-52">
                    <div>Name</div>
                    <div>Email</div>
                    <div>Age</div>
                    <div>Gender</div>
                </div>
                <!-- <div class="flex flex-col items-center justify-center p-2 bg-blue-700 w-52 h-52">
                    <div>Name</div>
                    <div>Email</div>
                    <div>Age</div>
                    <div>Gender</div>
                </div>
                <div class="flex flex-col items-center justify-center p-2 bg-blue-700 w-52 h-52">
                    <div>Name</div>
                    <div>Email</div>
                    <div>Age</div>
                    <div>Gender</div>
                </div>
                <div class="flex flex-col items-center justify-center p-2 bg-blue-700 w-52 h-52">
                    <div>Name</div>
                    <div>Email</div>
                    <div>Age</div>
                    <div>Gender</div>
                </div>
                <div class="flex flex-col items-center justify-center p-2 bg-blue-700 w-52 h-52">
                    <div>Name</div>
                    <div>Email</div>
                    <div>Age</div>
                    <div>Gender</div>
                </div>
                <div class="flex flex-col items-center justify-center p-2 bg-blue-700 w-52 h-52">
                    <div>Name</div>
                    <div>Email</div>
                    <div>Age</div>
                    <div>Gender</div>
                </div>
                <div class="flex flex-col items-center justify-center p-2 bg-blue-700 w-52 h-52">
                    <div>Name</div>
                    <div>Email</div>
                    <div>Age</div>
                    <div>Gender</div>
                </div> -->
            </div>
            <div class="flex flex-wrap justify-center w-1/4 gap-2 p-4 bg-gray-400 h-fit">
                <div class="flex flex-col items-center justify-center p-2 bg-blue-700 w-52 h-52">
                    <div>Name</div>
                    <div>Email</div>
                    <div>Age</div>
                    <div>Gender</div>
                </div>
                <div class="flex flex-col items-center justify-center p-2 bg-blue-700 w-52 h-52">
                    <div>Name</div>
                    <div>Email</div>
                    <div>Age</div>
                    <div>Gender</div>
                </div>
                <div class="flex flex-col items-center justify-center p-2 bg-blue-700 w-52 h-52">
                    <div>Name</div>
                    <div>Email</div>
                    <div>Age</div>
                    <div>Gender</div>
                </div>
                <div class="flex flex-col items-center justify-center p-2 bg-blue-700 w-52 h-52">
                    <div>Name</div>
                    <div>Email</div>
                    <div>Age</div>
                    <div>Gender</div>
                </div>
                <div class="flex flex-col items-center justify-center p-2 bg-blue-700 w-52 h-52">
                    <div>Name</div>
                    <div>Email</div>
                    <div>Age</div>
                    <div>Gender</div>
                </div>
                <!-- <div class="flex flex-col items-center justify-center p-2 bg-blue-700 w-52 h-52">
                    <div>Name</div>
                    <div>Email</div>
                    <div>Age</div>
                    <div>Gender</div>
                </div>
                <div class="flex flex-col items-center justify-center p-2 bg-blue-700 w-52 h-52">
                    <div>Name</div>
                    <div>Email</div>
                    <div>Age</div>
                    <div>Gender</div>
                </div>
                <div class="flex flex-col items-center justify-center p-2 bg-blue-700 w-52 h-52">
                    <div>Name</div>
                    <div>Email</div>
                    <div>Age</div>
                    <div>Gender</div>
                </div>
                <div class="flex flex-col items-center justify-center p-2 bg-blue-700 w-52 h-52">
                    <div>Name</div>
                    <div>Email</div>
                    <div>Age</div>
                    <div>Gender</div>
                </div>
                <div class="flex flex-col items-center justify-center p-2 bg-blue-700 w-52 h-52">
                    <div>Name</div>
                    <div>Email</div>
                    <div>Age</div>
                    <div>Gender</div>
                </div>
                <div class="flex flex-col items-center justify-center p-2 bg-blue-700 w-52 h-52">
                    <div>Name</div>
                    <div>Email</div>
                    <div>Age</div>
                    <div>Gender</div>
                </div> -->
            </div>
        </section>

        <script>
        </script>
        @livewireScripts
    </body>
</html>
