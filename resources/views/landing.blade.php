<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>ChromaHunt</title>
        @livewireStyles
    </head>
    <body class="overflow-x-hidden">
        <!-- SCROLL TO TOP BUTTON -->
        <livewire:scroll-top />

        <!-- HOME -->
        <main id="home" class="flex flex-col w-full min-h-screen bg-gradient-to-r from-main-200 to-main-300">
            <!-- NAVIGATION BAR -->
            <livewire:navbar />
            <!-- HERO SECTION -->
            <div class="flex items-center justify-center min-h-[89vh] w-full md:min-h-[90vh] ">
                <div class="flex flex-col p-5 w-5/6 gap-2 z-[1] text-center md:w-3/6 lg:gap-5 lg:w-3/6 -mb-[30%] md:m-0 md:-ml-[30%]">
                    <div class="w-full text-4xl italic font-semibold leading-none tracking-widest lg:text-6xl xl:text-8xl font-title">
                        FIGHT<br/>FOR THE<br/>LIGHT
                    </div>
                    <div class="flex flex-col items-center justify-start">
                        <button class="px-4 py-2 text-sm font-semibold border-2 md:text-base md:px-12 border-main-500 bg-main-400 text-main-100 "> Play Now </button>
                    </div>
                </div>
            </div>
        </main>

        <!-- LORE -->
        <section id="lore" class="flex flex-col items-center justify-start w-full gap-8 py-8 h-fit lg:min-h-screen bg-gradient-to-r from-main-200 to-main-300">
            <!-- CENTER CONTENT -->
            <div class="flex flex-col items-center justify-center w-full gap-3 p-2 text-center">
                <!-- TITLE -->
                <div class="px-4 py-1 text-2xl font-bold border-b-4 border-black lg:text-4xl ">The Lore</div>
            </div>
            <!-- RIGHT IMAGE -->
            <div class="flex justify-center items-center w-[90%] md:w-[75%] lg:w-[60%] h-[300px] lg:h-[500px] border-2 border-black">
                IMAGE HERE
            </div>
        </section>

        <!-- HEROES -->
        <section id="heroes" class="flex flex-col items-center justify-start w-full gap-8 py-8 h-fit lg:min-h-screen bg-gradient-to-r from-main-200 to-main-300">
            <!-- CENTER CONTENT -->
            <div class="flex flex-col items-center justify-center w-full gap-3 p-2 text-center">
                <!-- TITLE -->
                <div class="px-4 py-1 text-2xl font-bold border-b-4 border-black lg:text-4xl ">The Heroes</div>
            </div>
            <!-- IMAGES -->
            <div class="flex flex-wrap justify-center items-center lg:flex-nowrap w-[90%] lg:w-[80%] h-[600px] lg:h-[500px] border-2 border-black p-0 gap-0 lg:p-5 lg:gap-5">
                <div class="flex items-center w-1/2 h-1/2 lg:h-full lg:w-1/4">
                    <div class="flex cursor-pointer items-center justify-center w-[100%] h-full  border-[1px] border-black">Hero Image 1</div>
                </div>
                <div class="flex items-center w-1/2 h-1/2 lg:h-full lg:w-1/4">
                    <div class="flex cursor-pointer items-center justify-center w-[100%] h-full border-[1px] border-black">Hero Image 2</div>
                </div>
                <div class="flex items-center w-1/2 h-1/2 lg:h-full lg:w-1/4 ">
                    <div class="flex cursor-pointer items-center justify-center w-[100%] h-full border-[1px] border-black">Hero Image 3</div>
                </div>
                <div class="flex items-center w-1/2 h-1/2 lg:h-full lg:w-1/4 ">
                    <div class="flex cursor-pointer items-center justify-center w-[100%] h-full border-[1px] border-black">Hero Image 4</div>
                </div>
            </div>
        </section>

        <!-- GAMEPLAY -->
        <section id="gameplay" class="flex flex-col items-center justify-center w-full min-h-screen gap-10 lg:flex-row bg-slate-400">
            <!-- CONTENT -->
            <div class="flex flex-col items-center justify-center lg:items-start lg:justify-start w-[80%] md:w-[60%] lg:w-[32%] gap-3 text-left bg-slate-300 p-2">
                <!-- TITLE -->
                <div class="px-4 py-1 text-2xl font-bold border-b-4 border-black lg:text-4xl">THE GAMEPLAY</div>
                <!-- DESCRIPTION -->
                <div class="text-sm font-semibold text-center lg:text-left">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo architecto, reprehenderit officia cum fuga sit ipsam quidem, ab animi minima consequuntur hic dignissimos obcaecati quis.
                </div>
                <!-- ACTION -->
                <a href="/gameplay" class="px-6 py-1 text-sm font-semibold border-2 border-gray-800 lg:text-base hover:bg-gray-800 hover:text-white">Read More</a>
            </div>
            <!-- VIDEO SAMPLE -->
            <div class="flex items-center justify-center w-full lg:w-[60%] h-[300px] lg:h-[550px] border-2 border-black ">
                <div class="flex items-center justify-center">Gameplay sample</div>
            </div>
        </section>

        <!-- MODES/LEVELS -->
        <section id="modesLevels" class="flex flex-col items-start justify-start w-full min-h-screen">
            <!-- MODES -->
            <div class="flex flex-col-reverse lg:flex-row justify-center items-center w-full bg-slate-300 min-h-[50vh] gap-10 py-10 ">
                <!-- MODES IMAGES -->
                <div class="flex items-center justify-center gap-3 w-full lg:w-[50%] flex-wrap">
                    <div class="flex items-start justify-center px-20 py-20 border-2 border-black">
                        <div class="flex items-center justify-center">Mode1</div>
                    </div>
                    <div class="flex items-start justify-center px-20 py-20 border-2 border-black">
                        <div class="flex items-center justify-center">Mode2</div>
                    </div>
                </div>
                <!-- CONTENT -->
                <div class="flex flex-col items-center justify-center lg:items-end lg:justify-end w-[80%]  md:w-[60%] lg:w-[32%] gap-3 text-right bg-slate-400 p-2">
                    <!-- TITLE -->
                    <div class="px-4 py-1 text-2xl font-bold border-b-4 border-black lg:text-4xl">THE GAMEMODES</div>
                    <!-- DESCRIPTION -->
                    <div class="text-sm font-semibold text-center lg:text-right">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo architecto, reprehenderit officia cum fuga sit ipsam quidem, ab animi minima consequuntur hic dignissimos obcaecati quis.
                    </div>
                    <!-- ACTION -->
                    <a href="/gamemode" class="px-6 py-1 font-semibold border-2 border-gray-800 hover:bg-gray-800 hover:text-white">Read More</a>
                </div>
            </div>
            <!-- LEVELS -->
            <div class="flex flex-col lg:flex-row items-center w-full justify-center bg-slate-400 min-h-[50vh] gap-10 py-10">
                <!-- CONTENT -->
                <div class="flex flex-col items-center justify-center lg:items-start lg:justify-end w-[80%] md:w-[60%] lg:w-[32%] gap-3 text-left bg-slate-300 p-2">
                    <!-- TITLE -->
                    <div class="px-4 py-1 text-2xl font-bold border-b-4 border-black lg:text-4xl">THE LEVELS</div>
                    <!-- DESCRIPTION -->
                    <div class="text-sm font-semibold text-center lg:text-left">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo architecto, reprehenderit officia cum fuga sit ipsam quidem, ab animi minima consequuntur hic dignissimos obcaecati quis.
                    </div>
                    <!-- ACTION -->
                    <a href="/levels" class="px-6 py-1 font-semibold border-2 border-gray-800 hover:bg-gray-800 hover:text-white">Read More</a>
                </div>
                <!-- LEVEL IMAGES -->
                <div class="flex items-center justify-center gap-3 w-full lg:w-[50%] flex-wrap">
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
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
        @livewireScripts
    </body>
</html>
