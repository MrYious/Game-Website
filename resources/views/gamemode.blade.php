<!-- DUPLICATE THIS TEMPLATE FOR NEW PAGES -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>Gamemode | ChromaHunt </title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
        <script src="https://cdn.tailwindcss.com"></script>
        @livewireStyles
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700;800;900&family=Karla:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Metamorphous&display=swap" rel="stylesheet">
    </head>
    <body class="bg-main-main">
        <!-- SCROLL TO TOP BUTTON -->
        <livewire:scroll-top />
        <!-- NAVBAR -->
        <livewire:navbar />
        <!-- GAMEMODES -->
        <div class="w-full h-full py-10">
            <!-- IMAGES -->
            <div class="flex items-center justify-center w-full px-10 text-center ">
                <div class="w-full border-2 border-main-gold"></div>
                    <!-- TITLE -->
                    <div class="flex items-center justify-center px-8 py-1 text-3xl whitespace-nowrap w-fit lg:text-5xl font-header text-main-gold">
                    GAME MODES
                    </div>
                <div class="w-full border-2 border-main-gold"></div>
            </div>
            <div class="flex flex-col items-center justify-center gap-3 m-2 lg:flex-row ">
                <div class="flex justify-center items-center w-[350px] lg:w-[550px]">
                    <img class="w-full h-full" src="/images/gmodes_coop.png" alt="Coop Mode">
                </div>
                <div class="flex justify-center items-center w-[350px] lg:w-[550px]">
                    <img class="w-full h-full" src="/images/gmode_story.png" alt="Story Mode">
                </div>
            </div>
            <!-- STEPPER -->
            <ul class="stepper" data-mdb-stepper="stepper">
                <li class="stepper-step stepper-active">
                    <div class="stepper-head">
                        <span class="stepper-head-icon"> 1 </span>
                        <span class="stepper-head-text font-title text-white"> 4-player Co-op </span>
                    </div>
                    <div class="stepper-content">
                        <div class="text-xl font-bold lg:text-4xl font-header text-white px-10">4-player Co-op</div>
                        <div class="text-md lg:text-xl font-body text-white text-justify px-10">
                        <br>Traverse the world of Iris with your friends! Team up with up to four players to earn rewards and defeat The Colorless King.
                        In this Game mode, you can team-up with your friends up to four players. You need to defeat opponents to earn rewards in order to defeat The Colorless King. You can choose different characters with different set of skills.
                        </div>
                    </div>
                </li>
                <li class="stepper-step">
                    <div class="stepper-head">
                        <span class="stepper-head-icon"> 2 </span>
                        <span class="stepper-head-text font-title text-white"> Story Mode </span>
                    </div>
                    <div class="stepper-content">
                        <div class="text-xl font-bold lg:text-4xl font-header text-white px-10">Story Mode</div>
                        <div class="text-md lg:text-xl font-body text-white text-justify px-10">
                        <br>Begin your quest to retrieve the seven ChromaGems and fight The Colorless King. In this Game mode, you are going to follow a story progression that will let you collect the seven ChromaGems to defeat The Colorless King. You will learn the story of the world of Iris and understand the backstory of each character in the game.
                        </div>
                    </div>
                </li>
            </ul>
            <div class="flex items-center justify-center w-full px-10 pb-10 text-center ">
                <div class="w-full border-2 border-main-gold"></div>
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
