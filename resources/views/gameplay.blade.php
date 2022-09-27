<!-- DUPLICATE THIS TEMPLATE FOR NEW PAGES -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>ChromaHunt Gameplay</title>
        @livewireStyles
    </head>
    <body class="overflow-x-hidden ">
        <!-- SCROLL TO TOP BUTTON -->
        <a href="#home" id="btn_top" class="fixed z-50 p-[2px] rounded-full bg-gray-800 text-white bottom-3 right-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
            </svg>
        </a>

        <!-- HOME -->
        <main id="home" class="flex flex-col w-full min-h-screen bg-red-900">
            <!-- NAVIGATION BAR -->
            <nav class="flex items-center justify-between w-full px-5 py-2 h-[10vh] bg-slate-400">
                <a href="/" class="text-4xl font-bold">ChromaHunt</a>
                <div class="flex items-center gap-2 ">
                    <div class="border-transparent rounded-sm dropdown hover:bg-slate-300 border-y-4 hover:border-b-black ">
                        <button class="px-3 py-2 dropbtn hover:bg-slate-300">
                            Game Info
                        </button>
                        <div class="bg-gray-200 dropdown-content">
                            <a href="/#lore" class="hover:bg-slate-300">Lore</a>
                            <a href="/#heroes" class="hover:bg-slate-300">Heroes</a>
                            <a href="/#gameplay" class="hover:bg-slate-300">Gameplay</a>
                            <a href="/#modesLevels" class="hover:bg-slate-300">Modes & Levels</a>
                        </div>
                    </div>
                    <a href="" class="px-3 py-2 border-transparent rounded-sm border-y-4 hover:border-b-black hover:bg-slate-300"> Whitepaper </a>
                    <a href="" class="px-3 py-2 border-transparent rounded-sm border-y-4 hover:border-b-black hover:bg-slate-300"> Marketplace </a>
                    <a href="" class="px-3 py-2 border-transparent rounded-sm border-y-4 hover:border-b-black hover:bg-slate-300"> About us </a>
                    <a href="login" class="px-3 py-2 font-semibold text-white bg-gray-700 rounded-md"> SIGN IN </a>
                </div>
            </nav>

            <!-- GAMEPLAY -->
            <div class="flex items-center justify-between min-h-[90vh] w-full gap-4 bg-slate-300">
                <!-- CONTENT -->
                <div class="flex flex-col ml-20 w-[47%] p-5 gap-5">
                    <div class="font-semibold text-4xl">BEGINNER'S GUIDE</div>
                    <div class="">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro voluptatibus nihil quas fugit nostrum voluptas sit laboriosam, alias quod eos recusandae, aspernatur necessitatibus assumenda laborum, sequi at.
                    </div>
                </div>
                <!-- IMAGE -->
                <div class="flex mr-20 justify-center items-center w-[45%] h-[500px] ml-[100px] border-2 border-black ">
                    IMAGE HERE
                </div>
            </div>
        </main>

        <!-- CONTROLS -->
        <section id="controls" class="flex items-center justify-between w-full min-h-screen bg-slate-400">
        <div class="flex items-center justify-between min-h-[100vh] w-full gap-4 bg-slate-300">
                <!-- IMAGE -->
                <div class="flex mr-20 justify-center items-center w-[45%] h-[500px] ml-[100px] border-2 border-black ">
                    IMAGE HERE
                </div>
                <!-- CONTENT -->
                <div class="flex flex-col ml-20 w-[47%] p-5 gap-5">
                    <div class="font-semibold text-4xl text-right mr-20">CONTROLS</div>
                    <div class="text-right mr-20">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro voluptatibus nihil quas fugit nostrum voluptas sit laboriosam, alias quod eos recusandae, aspernatur necessitatibus assumenda laborum, sequi at.
                    </div>
                </div>
            </div>
        </section>

        <!-- SKILLS -->
        <section id="skills" class="flex items-center justify-between w-full min-h-screen bg-slate-400">
        <div class="flex items-center justify-between min-h-[100vh] w-full gap-4 bg-slate-300">
                <!-- CONTENT -->
                <div class="flex flex-col ml-20 w-[47%] p-5 gap-5">
                    <div class="font-semibold text-4xl">SKILLS</div>
                    <div class="">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro voluptatibus nihil quas fugit nostrum voluptas sit laboriosam, alias quod eos recusandae, aspernatur necessitatibus assumenda laborum, sequi at.
                    </div>
                <!-- IMAGE -->
                </div><div class="flex mr-20 justify-center items-center w-[45%] h-[500px] ml-[100px] border-2 border-black ">
                    IMAGE HERE
                </div>
            </div>
        </section>


        <script>
        </script>
        @livewireScripts
    </body>
</html>
