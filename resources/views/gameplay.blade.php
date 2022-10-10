<!-- DUPLICATE THIS TEMPLATE FOR NEW PAGES -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>ChromaHunt Gameplay</title>
        @livewireStyles
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700;800;900&family=Karla:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Metamorphous&display=swap" rel="stylesheet">
    </head>
    <body class="overflow-x-hidden ">
        <!-- SCROLL TO TOP BUTTON -->
        <livewire:scroll-top />

        <!-- HOME -->
        <div class="w-full h-full bg-main-main">
            <main id="home" class="flex flex-col w-full min-h-screen">
                <!-- NAVIGATION BAR -->
                <livewire:navbar />
                <!-- GAMEPLAY -->
                <div class="flex items-center justify-center w-full px-16 text-center ">
                    <div class="w-full border-2 border-main-gold"></div>
                        <!-- TITLE -->
                        <div class="flex items-center justify-center px-8 py-1 text-2xl whitespace-nowrap w-fit lg:text-5xl font-header text-main-gold">
                        Gameplay
                        </div>
                    <div class="w-full border-2 border-main-gold"></div>
                </div>
                <div class="flex flex-col md:flex-row items-center justify-around min-h-[90vh] w-full p-2">
                    <!-- CONTENT -->
                    <div class="flex flex-col md:w-[35%] w-[85%] p-5 gap-5">
                        <div class="text-2xl font-semibold lg:text-4xl text-white font-header">BEGINNER'S GUIDE</div>
                        <div class="text-sm lg:text-base text-white font-body text-justify">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro voluptatibus nihil quas fugit nostrum voluptas sit laboriosam, alias quod eos recusandae, aspernatur necessitatibus assumenda laborum, sequi at.
                        </div>
                        <div class="text-sm lg:text-base text-white font-body text-justify">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro voluptatibus nihil quas fugit nostrum voluptas sit laboriosam, alias quod eos recusandae, aspernatur necessitatibus assumenda laborum, sequi at.
                        </div>
                    </div>
                    <!-- IMAGE -->
                    <div class="flex justify-center items-center w-[85%] lg:w-[55%] h-[300px] lg:h-[500px] border-2 border-white text-white">
                        IMAGE HERE
                    </div>
                </div>
            </main>

            <!-- CONTROLS -->
            <section id="controls" class="flex items-center justify-between w-full min-h-screen">
                <div class="flex flex-col-reverse items-center justify-around w-full min-h-screen p-2 md:flex-row">
                    <!-- IMAGE -->
                    <div class="flex justify-center items-center w-[85%] lg:w-[55%] h-[300px] lg:h-[500px] border-2 border-white text-white">
                        IMAGE HERE
                    </div>
                    <!-- CONTENT -->
                    <div class="flex flex-col md:w-[35%] w-[85%] p-5 gap-5 text-right">
                        <div class="text-2xl font-semibold lg:text-4xl text-white font-header">CONTROLS</div>
                        <div class="text-sm lg:text-base text-white font-body">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro voluptatibus nihil quas fugit nostrum voluptas sit laboriosam, alias quod eos recusandae, aspernatur necessitatibus assumenda laborum, sequi at.
                        </div>
                        <div class="text-sm lg:text-base text-white font-body">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro voluptatibus nihil quas fugit nostrum voluptas sit laboriosam, alias quod eos recusandae, aspernatur necessitatibus assumenda laborum, sequi at.
                        </div>
                    </div>
                </div>
            </section>

            <!-- SKILLS -->
            <section id="skills" class="flex items-center justify-between w-full min-h-screen">
                <div class="flex flex-col items-center justify-around w-full min-h-screen p-2 md:flex-row ">
                    <!-- CONTENT -->
                    <div class="flex flex-col md:w-[35%] w-[85%] p-5 gap-5">
                        <div class="text-2xl font-semibold lg:text-4xl text-white font-header">SKILLS</div>
                        <div class="text-sm lg:text-base text-white font-body text-justify">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro voluptatibus nihil quas fugit nostrum voluptas sit laboriosam, alias quod eos recusandae, aspernatur necessitatibus assumenda laborum, sequi at.
                        </div>
                        <div class="text-sm lg:text-base text-white font-body text-justify">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro voluptatibus nihil quas fugit nostrum voluptas sit laboriosam, alias quod eos recusandae, aspernatur necessitatibus assumenda laborum, sequi at.
                        </div>
                    <!-- IMAGE -->
                    </div><div class="flex justify-center items-center w-[85%] lg:w-[55%] h-[300px] lg:h-[500px] border-2 border-white text-white ">
                        IMAGE HERE
                    </div>
                </div>
            </section>
            <div class="flex items-center justify-center w-full px-16 pb-10 text-center ">
                <div class="w-full border-2 border-main-gold"></div>
            </div>
        </div>

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
