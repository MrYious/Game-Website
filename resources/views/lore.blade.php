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
        <main id="home" class="flex flex-col w-full min-h-screen bg-gradient-to-r from-main-200 to-main-300">
            <!-- NAVIGATION BAR -->
            <livewire:navbar />
            <!-- LORE -->
            <div class="flex flex-col lg:flex-row items-center justify-around min-h-[90vh] w-full p-2">
                <!-- CONTENT -->
                <div class="flex flex-col lg:w-[35%] w-[85%] p-5 gap-5 ">
                    <div class="text-3xl font-semibold lg:text-4xl">ONCE UPON A TIME</div>
                    <div class="text-sm lg:text-base">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro voluptatibus nihil quas fugit nostrum voluptas sit laboriosam, alias quod eos recusandae, aspernatur necessitatibus assumenda laborum, sequi at.
                    </div>
                    <div class="text-sm lg:text-base">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro voluptatibus nihil quas fugit nostrum voluptas sit laboriosam, alias quod eos recusandae, aspernatur necessitatibus assumenda laborum, sequi at.
                    </div>
                </div>
                <!-- IMAGE -->
                <div class="flex justify-center items-center w-[90%] lg:w-[55%] h-[300px] lg:h-[500px] border-2 border-black ">
                    IMAGE HERE
                </div>
            </div>
        </main>

        <section id="" class="flex flex-col-reverse items-center justify-around w-full min-h-screen p-2 lg:flex-row bg-gradient-to-r from-main-200 to-main-300">
            <!-- IMAGE -->
            <div class="flex justify-center items-center w-[90%] lg:w-[55%] h-[300px] lg:h-[500px] border-2 border-black">
                IMAGE HERE
            </div>
            <!-- CONTENT -->
            <div class="flex flex-col lg:w-[35%] w-[85%] p-5 gap-5 text-right">
                <div class="text-3xl font-semibold lg:text-4xl">FOUR HEROES GATHERED </div>
                <div class="text-sm lg:text-base">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro voluptatibus nihil quas fugit nostrum voluptas sit laboriosam, alias quod eos recusandae, aspernatur necessitatibus assumenda laborum, sequi at.
                </div>
                <div class="text-sm lg:text-base">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro voluptatibus nihil quas fugit nostrum voluptas sit laboriosam, alias quod eos recusandae, aspernatur necessitatibus assumenda laborum, sequi at.
                </div>
            </div>
        </section>

        <section id="" class="flex flex-col items-center justify-around w-full min-h-screen p-2 lg:flex-row bg-gradient-to-r from-main-200 to-main-300 ">
            <!-- CONTENT -->
            <div class="flex flex-col lg:w-[35%] w-[85%] p-5 gap-5 ">
                <div class="text-3xl font-semibold lg:text-4xl">NOW OUR HEROES EMBARK</div>
                <div class="text-sm lg:text-base">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro voluptatibus nihil quas fugit nostrum voluptas sit laboriosam, alias quod eos recusandae, aspernatur necessitatibus assumenda laborum, sequi at.
                </div>
                <div class="text-sm lg:text-base">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro voluptatibus nihil quas fugit nostrum voluptas sit laboriosam, alias quod eos recusandae, aspernatur necessitatibus assumenda laborum, sequi at.
                </div>
            </div>
            <!-- IMAGE -->
            <div class="flex justify-center items-center w-[90%] lg:w-[55%] h-[300px] lg:h-[500px] border-2 border-black">
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
