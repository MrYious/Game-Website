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
        <main id="home" class="flex flex-col w-full min-h-screen bg-slate-300">
            <!-- NAVIGATION BAR -->
            <livewire:navbar />
            <!-- HERO SECTION -->
            <div class="flex items-center justify-center min-h-[89vh] gap-1 w-full  flex-col-reverse  md:min-h-[90vh] lg:flex-row lg:gap-4 ">
                <div class="flex flex-col p-5 w-5/6 bg-slate-400 gap-2 z-[1] text-center lg:text-left -mt-20 md:w-4/6 lg:gap-5 lg:w-[48%] lg:m-0 ">
                    <div class="text-2xl font-semibold tracking-wider lg:text-6xl xl:text-8xl font-title">Let the game begin</div>
                    <div class="text-xs lg:text-base">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro voluptatibus nihil quas fugit nostrum voluptas sit laboriosam, alias quod eos recusandae, aspernatur necessitatibus assumenda laborum, sequi at.
                    </div>
                    <div class="flex flex-col items-center justify-start lg:items-start ">
                        <button class="px-16 py-2 font-semibold border-2 border-gray-800 hover:bg-gray-800 hover:text-white"> Play Now </button>
                    </div>
                </div>
                <div class="flex justify-center items-center h-[325px] lg:h-[500px] border-2 border-black lg:ml-[-100px] w-[90%] lg:w-[45%] lg:my-0">
                    IMAGE HERE
                </div>
            </div>
        </main>

        <!-- LORE -->
        <section id="lore" class="flex items-center justify-between w-full min-h-screen gap-5 bg-slate-400">
            <!-- LEFT IMAGE -->
            <div class="flex justify-end items-start lg:items-center px-10 w-[47%] lg:w-[35%] h-[500px] border-2 border-black -mt-40 -mr-[50%] lg:-ml-28 lg:-mt-0">
                IMAGE HERE (PROTAGONISTs)
            </div>
            <!-- CENTER CONTENT -->
            <div class="flex flex-col items-center justify-center w-[60%] lg:w-[40%] p-2 gap-3 text-center bg-slate-300 z-[1]">
                <!-- TITLE -->
                <div class="px-4 py-1 text-2xl font-bold border-b-4 border-black lg:text-4xl ">The Lore</div>
                <!-- DESCRIPTION -->
                <div class="flex flex-col w-full gap-1 ">
                    <div class="text-xs font-semibold lg:text-sm">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla, culpa suscipit! Omnis, eaque mollitia laborum nam saepe distinctio atque pariatur molestiae ullam ad voluptas, quam quia architecto fugit aperiam culpa veritatis maxime! Soluta, porro rem.</div>
                    <div class="text-xs ">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla, culpa suscipit! Omnis, eaque mollitia laborum nam saepe distinctio atque pariatur molestiae ullam ad voluptas, quam quia architecto fugit aperiam culpa veritatis maxime! Soluta, porro rem.</div>
                </div>
                <!-- ACTION -->
                <a href="/lore" class="px-6 py-1 text-sm font-semibold border-2 border-gray-800 lg:text-base hover:bg-gray-800 hover:text-white">Read More</a>
            </div>
            <!-- RIGHT IMAGE -->
            <div class="flex justify-start items-end lg:items-center px-10 w-[47%] lg:w-[35%] h-[500px] border-2 border-black -mb-40 -ml-[50%] lg:-mr-28 lg:-mb-0">
                IMAGE HERE (ANTAGONISTs)
            </div>
        </section>

        <!-- HEROES -->
        <section id="heroes" class="flex flex-col-reverse items-center justify-center w-full min-h-screen gap-10 py-10 lg:flex-row bg-slate-300 lg:py-0">
            <!-- IMAGE GROUPS -->
            <div class="flex flex-wrap lg:flex-nowrap justify-start w-full lg:w-[60%] h-[900px] lg:h-[550px] border-2 border-black ">
                <div class="flex items-start w-1/2 lg:w-1/4 ">
                    <div class="flex cursor-pointer items-center justify-center w-[120%] m-0 lg:-m-5 h-full lg:h-4/5 border-[1px] border-black">Hero Image 1</div>
                </div>
                <div class="flex items-end w-1/2 lg:w-1/4">
                    <div class="flex cursor-pointer items-center justify-center w-[120%] m-0 lg:-m-5  h-full lg:h-4/5 border-[1px] border-black">Hero Image 2</div>
                </div>
                <div class="flex items-start w-1/2 lg:w-1/4 ">
                    <div class="flex cursor-pointer items-center justify-center w-[120%] m-0 lg:-m-5  h-full lg:h-4/5 border-[1px] border-black">Hero Image 3</div>
                </div>
                <div class="flex items-end w-1/2 lg:w-1/4 ">
                    <div class="flex cursor-pointer items-center justify-center w-[120%] m-0 lg:-m-5  h-full lg:h-4/5 border-[1px] border-black">Hero Image 4</div>
                </div>
            </div>
            <!-- CONTENT -->
            <div class="flex flex-col absolute lg:static items-center lg:items-end justify-center w-[60%] lg:w-[32%] gap-3 lg:text-right bg-slate-400 p-2">
                <!-- TITLE -->
                <div class="px-4 py-1 text-2xl font-bold border-b-4 border-black lg:text-4xl ">THE HEROES</div>
                <!-- DESCRIPTION -->
                <div class="text-xs font-semibold text-center lg:text-sm lg:text-right">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo architecto, reprehenderit officia cum fuga sit ipsam quidem, ab animi minima consequuntur hic dignissimos obcaecati quis.
                </div>
                <!-- ACTION -->
                <a href="/heroes" class="px-6 py-1 text-sm font-semibold border-2 border-gray-800 lg:text-base hover:bg-gray-800 hover:text-white">Read More</a>
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
