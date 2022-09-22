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
        <a href="#home" id="btn_top" class="fixed z-50 p-[2px] rounded-full bg-gray-800 text-white bottom-3 right-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
            </svg>
        </a>
        <main id="home" class="flex flex-col w-full h-screen bg-red-900">
            <nav class="flex items-center justify-between w-full px-5 py-2 h-fit bg-slate-400">
                <a href="#home" class="text-4xl font-bold">ChromaHunt</a>
                <div class="flex gap-1">
                    <div class="dropdown hover:bg-slate-500">
                        <button class="px-3 py-2 border-b-4 border-transparent rounded-sm dropbtn hover:border-black hover:bg-slate-500">
                            Game Info
                        </button>
                        <div class="bg-gray-200 dropdown-content">
                            <a href="#section1" class="hover:bg-slate-300">Lore</a>
                            <a href="#section2" class="hover:bg-slate-300">Heroes</a>
                            <a href="#section3" class="hover:bg-slate-300">Gameplay</a>
                            <a href="#section4" class="hover:bg-slate-300">Modes & Levels</a>
                        </div>
                    </div>
                    <a href="" class="px-3 py-2 border-b-4 border-transparent rounded-sm hover:border-black hover:bg-slate-500"> White Paper </a>
                    <a href="" class="px-3 py-2 border-b-4 border-transparent rounded-sm hover:border-black hover:bg-slate-500"> Marketplace </a>
                    <a href="" class="px-3 py-2 border-b-4 border-transparent rounded-sm hover:border-black hover:bg-slate-500"> About Us </a>
                    <a href="" class="px-3 py-2 font-semibold text-white bg-gray-800 rounded-md"> SIGN IN </a>
                </div>
            </nav>
            <div class="flex items-center justify-center w-full h-full gap-4 bg-slate-300">
                <div class="flex flex-col w-[47%] p-5 bg-slate-400 gap-5">
                    <div class="font-semibold text-8xl">LET THE GAME BEGIN</div>
                    <div class="">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro voluptatibus nihil quas fugit nostrum voluptas sit laboriosam, alias quod eos recusandae, aspernatur necessitatibus assumenda laborum, sequi at.
                    </div>
                    <div class="flex flex-col items-start justify-start">
                        <button class="px-16 py-2 border-2 border-black hover:bg-black hover:text-white"> Play Now </button>
                    </div>
                </div>
                <div class="flex justify-center items-center w-[50%] h-[90%] ml-[-100px] p-5 gap-5 border-2 border-black">
                    Image here
                </div>
            </div>
        </main>
        <section id="section1" class="flex flex-col items-center justify-center w-full min-h-screen bg-slate-400">
            <div>Section 1</div>
        </section>
        <section id="section2" class="flex flex-col items-center justify-center w-full min-h-screen bg-slate-300">
            <div>Section 2</div>
        </section>
        <section id="section3" class="flex flex-col items-center justify-center w-full min-h-screen bg-slate-400">
            <div>Section 3</div>
        </section>
        <section id="section4" class="flex flex-col items-center justify-center w-full min-h-screen bg-slate-300">
            <div>Section 4</div>
        </section>
        <footer class="flex items-center justify-center w-full h-64 bg-slate-500">
            Footer
        </footer>

        <script>
            // Get the button:
            let btn_top = document.getElementById("btn_top");

            // When the user scrolls down 200px from the top of the document, show the button
            window.onscroll = function() {scrollFunction()};

            function scrollFunction() {
                if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
                    btn_top.style.display = "block";
                } else {
                    btn_top.style.display = "none";
                }
            }
        </script>
        @livewireScripts
    </body>
</html>
