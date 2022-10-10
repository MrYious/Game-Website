<!-- DUPLICATE THIS TEMPLATE FOR NEW PAGES -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>Hero3 | ChromaHunt </title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
        <script src="https://cdn.tailwindcss.com"></script>
        @livewireStyles
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700;800;900&family=Karla:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Metamorphous&display=swap" rel="stylesheet">
    </head>
    <body class="bg-gradient-to-r from-main-200 to-main-300">
        <!-- SCROLL TO TOP BUTTON -->
        <livewire:scroll-top />
        <!-- HOME -->
        <main id="home" class="flex flex-col w-full min-h-screen bg-gradient-to-r from-main-200 to-main-300">
            <!-- NAVIGATION BAR -->
            <livewire:navbar />
            <!-- HERO SECTION -->
            <div class="flex items-center justify-center lg:justify-start min-h-[89vh] w-full md:min-h-[90vh] lg:px-56 ">
                <!-- CONTENT -->
                <div class="flex flex-col  items-start justify-center w-[100%] md:w-[60%] -mb-32 lg:m-0 lg:w-[50%] gap-1 p-10 bg-main-100">
                    <!-- NAME -->
                    <div class="text-2xl font-semibold text-left lg:text-4xl">LANCET 3</div>
                    <!-- ROLE -->
                    <div class="text-xl font-medium text-left lg:text-2xl">TANK</div>
                    <!-- DESCRIPTION -->
                    <div class="flex flex-col gap-1 py-2 text-sm font-semibold text-justify">
                        <div>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo architecto, reprehenderit officia cum fuga sit ipsam quidem, ab animi minima consequuntur hic dignissimos obcaecati quis.
                        </div>
                        <div>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo architecto, reprehenderit officia cum fuga sit ipsam quidem, ab animi minima consequuntur hic dignissimos obcaecati quis.
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- STATS SECTION -->
        <div class="flex flex-col lg:flex-row items-center lg:items-start justify-center min-h-[60vh] w-full gap-10 py-10  bg-gradient-to-r from-main-300 to-main-400">
            <!-- LEFT -->
            <div class="flex flex-col items-start justify-center w-[80%] md:w-[60%] lg:w-[30%] gap-1 p-10 bg-main-200">
                <div class="text-2xl font-semibold text-left lg:text-4xl">STATS</div>
                <div class="flex flex-col w-full gap-1 py-2 text-sm font-semibold text-justify">
                    <div class="flex gap-10 ">
                        <div>Lorem</div>
                        <input class="w-full" type="range" name="sample" id="sample" disabled value="100">
                    </div>
                    <div class="flex gap-10 ">
                        <div>Lorem</div>
                        <input class="w-full" type="range" name="sample" id="sample" disabled value="100">
                    </div>
                    <div class="flex gap-10 ">
                        <div>Lorem</div>
                        <input class="w-full" type="range" name="sample" id="sample" disabled value="100">
                    </div>
                    <div class="flex gap-10 ">
                        <div>Lorem</div>
                        <input class="w-full" type="range" name="sample" id="sample" disabled value="100">
                    </div>
                </div>
            </div>
            <!-- RIGHT -->
            <div class="flex flex-col items-start justify-center w-[80%] md:w-[60%] lg:w-[35%] gap-4 p-10 bg-main-200">
                <div class="text-2xl font-semibold text-left lg:text-4xl">
                    ABILITIES
                </div>
                <div class="text-lg font-medium text-left lg:text-xl">
                    Ability Name
                </div>
                <div class="flex flex-col text-sm font-semibold text-justify">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat debitis delectus recusandae placeat corrupti et voluptates qui natus ut nostrum nisi consequatur ea, iusto molestias minus? Corporis vitae odit sapiente ipsam fugit mollitia possimus nulla!
                </div>
                <div class="flex gap-4">
                    <button class="w-16 h-16 bg-main-500">
                    </button>
                    <button class="w-16 h-16 bg-main-500">
                    </button>
                    <button class="w-16 h-16 bg-main-500">
                    </button>
                    <button class="w-16 h-16 bg-main-500">
                    </button>
                </div>
            </div>
        </div>


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
        <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
        @livewireScripts
    </body>
</html>
