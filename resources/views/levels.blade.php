<!-- DUPLICATE THIS TEMPLATE FOR NEW PAGES -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>ChromaHunt Levels</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                extend: {
                    fontFamily: {
                    sans: ['Inter', 'sans-serif'],
                    },
                }
                }
            }
        </script>
        @livewireStyles
    </head>
    <body>
        <!-- SCROLL TO TOP BUTTON -->
        <livewire:scroll-top />
        <!-- NAVBAR -->
        <livewire:navbar />
        <!-- LEVELS -->
        <!-- IMAGES -->
        <div class="relative flex flex-row items-center justify-center gap-3 m-2">
            <div class="flex justify-center items-center w-[33.33%] h-[500px] border-2 border-black ">
                    Level1
            </div>
            <div class="flex justify-center items-center w-[33.33%] h-[500px] border-2 border-black ">
                    Level2
            </div>
            <div class="flex justify-center items-center w-[33.33%] h-[500px] border-2 border-black ">
                    Level3
            </div>
        </div>
        <!-- STEPPER -->
        <ul class="stepper" data-mdb-stepper="stepper">
            <li class="stepper-step stepper-active">
                <div class="stepper-head">
                <span class="stepper-head-icon"> 1 </span>
                <span class="stepper-head-text"> LEVEL 1 </span>
                </div>
                <div class="stepper-content">
                    <div class="text-2xl font-bold">LEVEL 1</div>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi asperiores maiores tempore nulla nihil suscipit labore deserunt. Reiciendis ea voluptate alias? Libero dolorem adipisci nobis repudiandae assumenda harum reprehenderit maxime? Earum velit, accusamus dolorum minima nam error unde soluta optio? Impedit sint velit ab. Quam vero quidem facere quos blanditiis?
                </div>
            </li>
            <li class="stepper-step">
                <div class="stepper-head">
                <span class="stepper-head-icon"> 2 </span>
                <span class="stepper-head-text"> LEVEL 2 </span>
                </div>
                <div class="stepper-content">
                    <div class="text-2xl font-bold">LEVEL 2</div>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi asperiores maiores tempore nulla nihil suscipit labore deserunt. Reiciendis ea voluptate alias? Libero dolorem adipisci nobis repudiandae assumenda harum reprehenderit maxime? Earum velit, accusamus dolorum minima nam error unde soluta optio? Impedit sint velit ab. Quam vero quidem facere quos blanditiis?
                </div>
            </li>
            <li class="stepper-step">
                <div class="stepper-head">
                <span class="stepper-head-icon"> 3 </span>
                <span class="stepper-head-text"> LEVEL 3 </span>
                </div>
                <div class="stepper-content">
                    <div class="text-2xl font-bold">LEVEL 3</div>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi asperiores maiores tempore nulla nihil suscipit labore deserunt. Reiciendis ea voluptate alias? Libero dolorem adipisci nobis repudiandae assumenda harum reprehenderit maxime? Earum velit, accusamus dolorum minima nam error unde soluta optio? Impedit sint velit ab. Quam vero quidem facere quos blanditiis?
                </div>
            </li>
        </ul>


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
