<!-- DUPLICATE THIS TEMPLATE FOR NEW PAGES -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>ChromaHunt Gameplay</title>
        @livewireStyles
    </head>
    <body class="overflow-x-hidden ">
        <!-- SCROLL TO TOP BUTTON -->
        <livewire:scroll-top />

        <!-- HOME -->
        <main id="home" class="flex flex-col w-full min-h-screen ">
            <!-- NAVIGATION BAR -->
            <livewire:navbar />
            <!-- GAMEPLAY -->
            <div class="flex items-center justify-between min-h-[90vh] w-full gap-4 bg-slate-300">
                <!-- CONTENT -->
                <div class="flex flex-col ml-20 w-[47%] p-5 gap-5">
                    <div class="text-4xl font-semibold">BEGINNER'S GUIDE</div>
                    <div class="">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro voluptatibus nihil quas fugit nostrum voluptas sit laboriosam, alias quod eos recusandae, aspernatur necessitatibus assumenda laborum, sequi at.
                    </div>
                </div>
                <!-- IMAGE -->
                <div class="flex mr-20 justify-center items-center w-[45%] h-[500px] ml-[100px] border-2 border-black ">
                    IMAGE HERE
                </div>
            </div>
        </main>

        <!-- CONTROLS -->
        <section id="controls" class="flex items-center justify-between w-full min-h-screen bg-slate-400">
            <div class="flex items-center justify-between min-h-[100vh] w-full gap-4 bg-slate-400">
                <!-- IMAGE -->
                <div class="flex mr-20 justify-center items-center w-[45%] h-[500px] ml-[100px] border-2 border-black ">
                    IMAGE HERE
                </div>
                <!-- CONTENT -->
                <div class="flex flex-col ml-20 w-[47%] p-5 gap-5">
                    <div class="mr-20 text-4xl font-semibold text-right">CONTROLS</div>
                    <div class="mr-20 text-right">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro voluptatibus nihil quas fugit nostrum voluptas sit laboriosam, alias quod eos recusandae, aspernatur necessitatibus assumenda laborum, sequi at.
                    </div>
                </div>
            </div>
        </section>

        <!-- SKILLS -->
        <section id="skills" class="flex items-center justify-between w-full min-h-screen bg-slate-400">
            <div class="flex items-center justify-between min-h-[100vh] w-full gap-4 bg-slate-300">
                <!-- CONTENT -->
                <div class="flex flex-col ml-20 w-[47%] p-5 gap-5">
                    <div class="text-4xl font-semibold">SKILLS</div>
                    <div class="">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro voluptatibus nihil quas fugit nostrum voluptas sit laboriosam, alias quod eos recusandae, aspernatur necessitatibus assumenda laborum, sequi at.
                    </div>
                <!-- IMAGE -->
                </div><div class="flex mr-20 justify-center items-center w-[45%] h-[500px] ml-[100px] border-2 border-black ">
                    IMAGE HERE
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
