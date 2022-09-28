<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>ChromaHunt</title>
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
            <livewire:navbar />
            <!-- HERO SECTION -->
            <div class="flex items-center justify-center min-h-[90vh] w-full gap-4 bg-slate-300">
                <div class="flex flex-col  w-[47%] p-5 bg-slate-400 gap-5 z-10">
                    <div class="font-semibold text-8xl">LET THE GAME BEGIN</div>
                    <div class="">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro voluptatibus nihil quas fugit nostrum voluptas sit laboriosam, alias quod eos recusandae, aspernatur necessitatibus assumenda laborum, sequi at.
                    </div>
                    <div class="flex flex-col items-start justify-start">
                        <button class="px-16 py-2 font-semibold border-2 border-gray-800 hover:bg-gray-800 hover:text-white"> Play Now </button>
                    </div>
                </div>
                <div class="flex justify-center items-center w-[45%] h-[500px] ml-[-100px] border-2 border-black ">
                    IMAGE HERE
                </div>
            </div>
        </main>

        <!-- LORE -->
        <section id="lore" class="flex items-center justify-between w-full min-h-screen gap-5 bg-slate-400">
            <!-- LEFT IMAGE -->
            <div class="flex justify-end items-center px-10 w-[35%] h-[500px] border-2 border-black -ml-28 ">
                IMAGE HERE (PROTAGONISTs)
            </div>
            <!-- CENTER CONTENT -->
            <div class="flex flex-col items-center justify-center w-[40%] p-2 gap-3 text-center bg-slate-300">
                <!-- TITLE -->
                <div class="px-4 py-1 text-4xl font-bold border-b-4 border-black ">THE LORE</div>
                <!-- DESCRIPTION -->
                <div class="flex flex-col w-full gap-1 ">
                    <div class="text-sm font-semibold">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla, culpa suscipit! Omnis, eaque mollitia laborum nam saepe distinctio atque pariatur molestiae ullam ad voluptas, quam quia architecto fugit aperiam culpa veritatis maxime! Soluta, porro rem.</div>
                    <div class="text-xs ">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla, culpa suscipit! Omnis, eaque mollitia laborum nam saepe distinctio atque pariatur molestiae ullam ad voluptas, quam quia architecto fugit aperiam culpa veritatis maxime! Soluta, porro rem.</div>
                </div>
                <!-- ACTION -->
                <a href="/lore" class="px-6 py-1 font-semibold border-2 border-gray-800 hover:bg-gray-800 hover:text-white">Read More</a>
            </div>
            <!-- RIGHT IMAGE -->
            <div class="flex justify-start items-center px-10 w-[35%] h-[500px] border-2 border-black -mr-28 ">
                IMAGE HERE (ANTAGONISTs)
            </div>
        </section>

        <!-- HEROES -->
        <section id="heroes" class="flex items-center justify-center w-full min-h-screen gap-10 bg-slate-300">
            <!-- IMAGE GROUPS -->
            <div class="flex justify-start w-[60%] h-[550px] border-2 border-black ">
                <div class="flex items-start w-1/4 ">
                    <div class="flex items-center justify-center w-[120%] -m-5  h-4/5 border-[1px] border-black">Hero Image 1</div>
                </div>
                <div class="flex items-end w-1/4 ">
                    <div class="flex items-center justify-center w-[120%] -m-5  h-4/5 border-[1px] border-black">Hero Image 2</div>
                </div>
                <div class="flex items-start w-1/4 ">
                    <div class="flex items-center justify-center w-[120%] -m-5  h-4/5 border-[1px] border-black">Hero Image 3</div>
                </div>
                <div class="flex items-end w-1/4 ">
                    <div class="flex items-center justify-center w-[120%] -m-5  h-4/5 border-[1px] border-black">Hero Image 4</div>
                </div>
            </div>
            <!-- CONTENT -->
            <div class="flex flex-col items-end justify-center w-[32%] gap-3 text-right bg-slate-400 p-2">
                <!-- TITLE -->
                <div class="px-4 py-1 text-4xl font-bold border-b-4 border-black ">THE HEROES</div>
                <!-- DESCRIPTION -->
                <div class="text-sm font-semibold">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo architecto, reprehenderit officia cum fuga sit ipsam quidem, ab animi minima consequuntur hic dignissimos obcaecati quis.
                </div>
                <!-- ACTION -->
                <a href="" class="px-6 py-1 font-semibold border-2 border-gray-800 hover:bg-gray-800 hover:text-white">Read More</a>
            </div>
        </section>

        <!-- GAMEPLAY -->
        <section id="gameplay" class="flex items-center justify-center w-full min-h-screen gap-10 bg-slate-400">
            <!-- CONTENT -->
            <div class="flex flex-col items-start justify-start w-[32%] gap-3 text-left bg-slate-300 p-2">
                <!-- TITLE -->
                <div class="px-4 py-1 text-4xl font-bold border-b-4 border-black">THE GAMEPLAY</div>
                <!-- DESCRIPTION -->
                <div class="text-sm font-semibold">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo architecto, reprehenderit officia cum fuga sit ipsam quidem, ab animi minima consequuntur hic dignissimos obcaecati quis.
                </div>
                <!-- ACTION -->
                <a href="/gameplay" class="px-6 py-1 font-semibold border-2 border-gray-800 hover:bg-gray-800 hover:text-white">Read More</a>
            </div>
            <!-- VIDEO SAMPLE -->
            <div class="flex items-center justify-center w-[60%] h-[550px] border-2 border-black ">
                <div class="flex items-center justify-center">Gameplay sample</div>
            </div>
        </section>

        <!-- MODES/LEVELS -->
        <section id="modesLevels" class="flex flex-col items-start justify-start w-full min-h-screen ">
            <!-- MAPS -->
            <div class="flex items-center w-full justify-between gap-[30px] bg-slate-300 px-[100px] h-[50vh]">
                <!-- MAP IMAGES -->
                <div class="flex items-center justify-center gap-3 ">
                    <div class="flex items-start justify-center px-20 py-20 border-2 border-black">
                        <div class="flex items-center justify-center">Mode1</div>
                    </div>
                    <div class="flex items-start justify-center px-20 py-20 border-2 border-black">
                        <div class="flex items-center justify-center">Mode2</div>
                    </div>
                </div>
                <!-- CONTENT -->
                <div class="flex flex-col items-end justify-end w-[32%] gap-3 text-right bg-slate-400 p-2">
                    <!-- TITLE -->
                    <div class="px-4 py-1 text-4xl font-bold border-b-4 border-black">THE GAMEMODES</div>
                    <!-- DESCRIPTION -->
                    <div class="text-sm font-semibold">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo architecto, reprehenderit officia cum fuga sit ipsam quidem, ab animi minima consequuntur hic dignissimos obcaecati quis.
                    </div>
                    <!-- ACTION -->
                    <a href="" class="px-6 py-1 font-semibold border-2 border-gray-800 hover:bg-gray-800 hover:text-white">Read More</a>
                </div>
            </div>
            <!-- LEVELS -->
            <div class="flex items-center w-full px-[100px] justify-between gap-[30px] bg-slate-400 h-[50vh]">
                <!-- CONTENT -->
                <div class="flex flex-col items-start justify-end w-[32%] gap-3 text-left bg-slate-300 p-2">
                    <!-- TITLE -->
                    <div class="px-4 py-1 text-4xl font-bold border-b-4 border-black">THE LEVELS</div>
                    <!-- DESCRIPTION -->
                    <div class="text-sm font-semibold">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo architecto, reprehenderit officia cum fuga sit ipsam quidem, ab animi minima consequuntur hic dignissimos obcaecati quis.
                    </div>
                    <!-- ACTION -->
                    <a href="" class="px-6 py-1 font-semibold border-2 border-gray-800 hover:bg-gray-800 hover:text-white">Read More</a>
                </div>
                <!-- MAP IMAGES -->
                <div class="flex items-center justify-center gap-3">
                    <div class="flex items-start justify-center px-20 py-20 border-2 border-black">
                        <div class="flex items-center justify-center">Level1</div>
                    </div>
                    <div class="flex items-start justify-center px-20 py-20 border-2 border-black">
                        <div class="flex items-center justify-center">Level2</div>
                    </div>
                    <div class="flex items-start justify-center px-20 py-20 border-2 border-black">
                        <div class="flex items-center justify-center">Level3</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FOOTER -->
        <livewire:footer />

        <script>
            // Get the button:
            let btn_top = document.getElementById("btn_top");

            // When the user scrolls down 500px from the top of the document, show the button
            window.onscroll = function() {scrollFunction()};

            function scrollFunction() {
                if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
                    btn_top.style.display = "block";
                } else {
                    btn_top.style.display = "none";
                }
            }
        </script>
        @livewireScripts
    </body>
</html>
