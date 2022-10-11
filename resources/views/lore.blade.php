<!-- DUPLICATE THIS TEMPLATE FOR NEW PAGES -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>Lore | ChromaHunt</title>
        @livewireStyles
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700;800;900&family=Karla:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Metamorphous&display=swap" rel="stylesheet">
    </head>
    <body class="overflow-x-hidden ">
        <!-- SCROLL TO TOP BUTTON -->
        <livewire:scroll-top />

        <!-- HOME -->
        <main id="home" class="flex flex-col w-full min-h-screen bg-main-lore">
            <!-- NAVIGATION BAR -->
            <livewire:navbar />
            <!-- LORE -->
            <div class="flex flex-col items-center justify-start w-full gap-10 py-8 lg:gap-16 h-fit lg:min-h-screen">
                <!-- CONTENT -->
                <div class="flex items-center justify-center w-full px-10 text-center lg:px-16 ">
                    <div class="w-full border-2 border-main-400"></div>
                    <!-- TITLE -->
                    <div class="flex items-center justify-center px-8 py-1 text-2xl font-medium text-main-500 whitespace-nowrap w-fit lg:text-5xl font-header">
                        The Lore
                    </div>
                    <div class="w-full border-2 border-main-400"></div>
                </div>
                <div class="flex flex-col items-center justify-center w-[80%] lg:w-[75%] gap-5 lg:gap-10">
                    <img class="w-full h-full" src="/images/lorepage(1).png" alt="Lore">
                    <img class="w-full h-full" src="/images/lorepage(2).png" alt="Lore">
                    <img class="w-full h-full" src="/images/lorepage(3).png" alt="Lore">
                    <img class="w-full h-full" src="/images/lorepage(4).png" alt="Lore">
                </div>
                <div class="flex items-center justify-center w-full px-10 text-center lg:px-16 ">
                    <div class="w-full border-2 border-main-400"></div>
                </div>
            </div>
        </main>

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
