<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>ChromaHunt</title>
        @livewireStyles
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700;800;900&family=Karla:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Metamorphous&display=swap" rel="stylesheet">
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
                    <div class="w-full text-5xl font-semibold leading-none tracking-widest lg:text-6xl xl:text-7xl font-title">
                        FIGHT<br/>FOR THE<br/>LIGHT
                    </div>
                    <div class="flex flex-col items-center justify-start">
                        <button class="px-4 py-2 text-sm font-semibold border-2 md:text-base md:px-12 border-main-500 bg-main-500 text-main-100 "> Play Now </button>
                    </div>
                </div>
            </div>
        </main>

        <!-- LORE -->
        <section id="lore" class="flex flex-col items-center justify-start w-full gap-8 py-8 h-fit lg:min-h-screen bg-gradient-to-r from-main-200 to-main-300">
            <!-- CONTENT -->
            <div class="flex items-center justify-center w-full px-16 text-center ">
                <div class="w-full border-2 border-black"></div>
                <!-- TITLE -->
                <div class="flex items-center justify-center px-8 py-1 text-2xl font-bold whitespace-nowrap w-fit lg:text-5xl font-header">
                    The Lore
                </div>
                <div class="w-full border-2 border-black"></div>
            </div>
            <!-- IMAGE -->
            <div  class="flex justify-center items-center w-[90%] md:w-[75%] lg:w-[60%] h-[300px] md:h-[400px]  lg:gap-9 md:gap-6 gap-3  lg:h-[500px] ">
                <!-- LEFT IMAGE -->
                <div href="/lore" class="flex items-center justify-center w-full h-full p-2 bg-main-100 lg:p-5">
                    IMAGE HERE 1
                </div>
                <!-- RIGHT IMAGE -->
                <div href="/lore" class="flex items-end justify-end w-full h-full p-2 bg-main-100 lg:p-5">
                    <a href="/lore" class="px-3 py-1 text-xs font-medium border-2 md:text-base border-main-500 bg-main-500 text-main-100 ">Read More</a>
                </div>
            </div>
            <div class="flex items-center justify-center w-full px-16 text-center ">
                <div class="w-full border-2 border-black"></div>
            </div>
        </section>

        <!-- HEROES -->
        <section id="heroes" class="flex flex-col items-center justify-start w-full gap-8 py-8 h-fit lg:min-h-screen bg-gradient-to-r from-main-200 to-main-300">
            <!-- CENTER CONTENT -->
            <div class="flex flex-col items-center justify-center w-full gap-3 p-2 text-center">
                <!-- TITLE -->
                <div class="px-4 py-1 text-2xl font-bold border-b-4 border-black lg:text-5xl font-header">The Heroes</div>
            </div>
            <!-- IMAGES -->
            <div class="flex flex-wrap justify-center items-center lg:flex-nowrap w-[90%] lg:w-[80%] h-[600px] lg:h-[500px] border-2 border-black p-0 gap-0 lg:p-5 lg:gap-5">
                <a href="/heroes" class="flex items-center w-1/2 h-1/2 lg:h-full lg:w-1/4">
                    <div class="flex cursor-pointer items-center justify-center w-[100%] h-full  border-[1px] border-black">Hero Image 1</div>
                </a>
                <a href="/heroes" class="flex items-center w-1/2 h-1/2 lg:h-full lg:w-1/4">
                    <div class="flex cursor-pointer items-center justify-center w-[100%] h-full border-[1px] border-black">Hero Image 2</div>
                </a>
                <a href="/heroes" class="flex items-center w-1/2 h-1/2 lg:h-full lg:w-1/4 ">
                    <div class="flex cursor-pointer items-center justify-center w-[100%] h-full border-[1px] border-black">Hero Image 3</div>
                </a>
                <a href="/heroes" class="flex items-center w-1/2 h-1/2 lg:h-full lg:w-1/4 ">
                    <div class="flex cursor-pointer items-center justify-center w-[100%] h-full border-[1px] border-black">Hero Image 4</div>
                </a>
            </div>
        </section>

        <!-- GAMEPLAY -->
        <section id="gameplay" class="flex flex-col-reverse items-center justify-center w-full lg:min-h-screen gap-10 lg:flex-row bg-gameplay" style="background-image:url('../images/Gameplay.png'); background-size: cover">
            <!-- VIDEO SAMPLE -->
            <div class="flex flex-wrap lg:flex-nowrap lg:flex-col items-center justify-center w-full h-[300px] lg:w-[60%] lg:h-[600px] lg:p-0">
                <a href="/gameplay#home" class="flex items-center lg:items-start w-1/2 lg:w-[80%] h-1/2">
                    <div class="flex items-center justify-center m-1 lg:-mb-20 w-[250px] lg:w-[350px] h-[200px] lg:h-[250px] text-white border-2 border-white z-4">Gameplay sample 1</div>
                </a>
                <a href="/gameplay#controls" class="flex items-center lg:items-end w-1/2 lg:w-[80%] h-1/2">
                    <div class="flex items-center justify-center m-1 lg:ml-52 w-[250px] lg:w-[350px] h-[200px] lg:h-[250px] text-white border-2 border-white z-5">Gameplay sample 2</div>
                </a>
                <a href="/gameplay#skills" class="flex items-center lg:items-start w-1/2 lg:w-[80%] h-1/2">
                    <div class="flex items-center justify-center mt-20 lg:-mt-20 w-[250px] lg:w-[350px] h-[200px] lg:h-[250px] text-white border-2 border-white z-6">Gameplay sample 3</div>
                </a>
            </div>
            <!-- CONTENT -->
            <div class="flex flex-col items-center justify-center lg:items-start lg:justify-end w-[80%] md:w-[60%] lg:w-[40%] gap-10 p-5 lg:p-10">
                <!-- TITLE -->
                <div class="px-4 py-1 text-2xl font-bold text-right border-b-4 border-black lg:text-5xl font-header">The Gameplay</div>
                <!-- DESCRIPTION -->
                <div class="text-md font-body text-center text-white lg:text-justify">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo architecto, reprehenderit officia cum fuga sit ipsam quidem, ab animi minima consequuntur hic dignissimos obcaecati quis.
                </div>
            </div>
        </section>

        <!-- MODES -->
        <section id="modes" class="flex flex-col items-center justify-center w-full lg:min-h-screen" style="background-image:url('../images/GameModes.png'); background-size: 100%; background-repeat:no-repeat">
            <div class="flex flex-col-reverse justify-center items-center w-full h-full gap-10 px-0 ">
                <!-- MODES IMAGES -->
                <div class="flex lg:flex-row items-center justify-center gap-3 md:gap-10 lg:gap-20 w-full lg:h-full lg:flex-wrap pb-[230px]">
                    <a href="/gamemode" class="flex items-start justify-center px-20 py-20 border-2 border-white lg:px-40 lg:py-40">
                        <div class="flex items-center text-white justify-center">Mode1</div>
                    </a>
                    <a href="/gamemode" class="flex items-start justify-center px-20 py-20 border-2 border-white lg:px-40 lg:py-40">
                        <div class="flex items-center text-white justify-center">Mode2</div>
                    </a>
                    <a href="/gamemode" class="flex items-start justify-center px-20 py-20 border-2 border-white lg:px-40 lg:py-40">
                        <div class="flex items-center text-white justify-center">Mode3</div>
                    </a>
                </div>
                <!-- CONTENT -->
                <div class="flex flex-col items-center justify-center lg:items-center lg:justify-center w-[80%]  md:w-[60%] lg:w-[32%] gap-10 text-right p-2">
                    <!-- TITLE -->
                    <div class="px-4 py-1 text-4xl font-header text-main-gold lg:text-6xl md:text-center">GAME MODES</div>
                </div>
            </div>
        <section>

        <!-- LEVELS -->
        <section id="levels" class="flex flex-col items-center justify-center w-full lg:min-h-screen" style="background-image:url('../images/Levels.png'); background-size: cover">
            <div class="flex flex-col lg:flex-row items-center w-full justify-center min-h-screen gap-20 lg:py-0 lg:px-6">
                <!-- CONTENT -->
                <div class="flex flex-col items-center justify-center lg:items-start lg:justify-end w-[80%] md:w-[60%] lg:w-[40%] gap-3 text-left lg:pl-10">
                    <!-- TITLE -->
                    <div class="px-4 py-1 text-2xl font-bold border-b-4 border-black lg:text-5xl font-header">The Levels</div>
                    <!-- DESCRIPTION -->
                    <div class="text-md font-body text-white text-center lg:text-justify">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo architecto, reprehenderit officia cum fuga sit ipsam quidem, ab animi minima consequuntur hic dignissimos obcaecati quis.                    </div>
                </div>
                <!-- LEVEL IMAGES -->
                <div class="flex flex-wrap lg:flex-nowrap lg:flex-col items-center justify-center w-full h-[300px] lg:w-[80%] lg:h-[600px]">
                    <a href="/levels" class="flex items-center lg:items-start w-1/2 lg:w-[80%] h-1/2">
                        <div class="flex items-center justify-center m-1 lg:-mb-20 lg:ml-80 w-[250px] lg:w-[350px] h-[200px] lg:h-[250px] text-white border-2 border-white z-4">Level1</div>
                    </a>
                    <a href="/levels" class="flex items-center lg:items-end w-1/2 lg:w-[80%] h-1/2">
                        <div class="flex items-center justify-center m-1 lg:ml-28 w-[250px] lg:w-[350px] h-[200px] lg:h-[250px] text-white border-2 border-white z-5">Level2</div>
                    </a>
                    <a href="/levels" class="flex items-center lg:items-start w-1/2 lg:w-[80%] h-1/2">
                        <div class="flex items-center justify-center mt-20 lg:-mt-20 lg:ml-80 w-[250px] lg:w-[350px] h-[200px] lg:h-[250px] text-white border-2 border-white z-6">Level3</div>
                    </a>
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
