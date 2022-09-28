<!-- DUPLICATE THIS TEMPLATE FOR NEW PAGES -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>ChromaHunt Lore</title>
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
        <main id="home" class="flex flex-col w-full min-h-screen ">
            <!-- NAVIGATION BAR -->
            <livewire:navbar />
            <!-- LORE -->
            <div class="flex items-center justify-around min-h-[90vh] w-full bg-slate-300">
                <!-- CONTENT -->
                <div class="flex flex-col w-[35%] p-5 gap-5 ">
                    <div class="text-4xl font-semibold">ONCE UPON A TIME</div>
                    <div class="">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro voluptatibus nihil quas fugit nostrum voluptas sit laboriosam, alias quod eos recusandae, aspernatur necessitatibus assumenda laborum, sequi at.
                    </div>
                    <div class="">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro voluptatibus nihil quas fugit nostrum voluptas sit laboriosam, alias quod eos recusandae, aspernatur necessitatibus assumenda laborum, sequi at.
                    </div>
                </div>
                <!-- IMAGE -->
                <div class="flex justify-center items-center w-[55%] h-[500px] border-2 border-black ">
                    IMAGE HERE
                </div>
            </div>
        </main>

        <section id="" class="flex items-center justify-around w-full min-h-screen bg-slate-400">
            <!-- IMAGE -->
            <div class="flex justify-center items-center w-[55%] h-[500px] border-2 border-black ">
                IMAGE HERE
            </div>
            <!-- CONTENT -->
            <div class="flex flex-col w-[35%] p-5 gap-5 text-right">
                <div class="text-4xl font-semibold">FOUR HEROES GATHERED </div>
                <div class="">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro voluptatibus nihil quas fugit nostrum voluptas sit laboriosam, alias quod eos recusandae, aspernatur necessitatibus assumenda laborum, sequi at.
                </div>
                <div class="">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro voluptatibus nihil quas fugit nostrum voluptas sit laboriosam, alias quod eos recusandae, aspernatur necessitatibus assumenda laborum, sequi at.
                </div>
            </div>
        </section>

        <section id="" class="flex items-center justify-around w-full min-h-screen bg-slate-300">
            <!-- CONTENT -->
            <div class="flex flex-col w-[35%] p-5 gap-5 ">
                <div class="text-4xl font-semibold">NOW OUR HEROES EMBARK</div>
                <div class="">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro voluptatibus nihil quas fugit nostrum voluptas sit laboriosam, alias quod eos recusandae, aspernatur necessitatibus assumenda laborum, sequi at.
                </div>
                <div class="">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro voluptatibus nihil quas fugit nostrum voluptas sit laboriosam, alias quod eos recusandae, aspernatur necessitatibus assumenda laborum, sequi at.
                </div>
            </div>
            <!-- IMAGE -->
            <div class="flex justify-center items-center w-[55%] h-[500px] border-2 border-black ">
                IMAGE HERE
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
