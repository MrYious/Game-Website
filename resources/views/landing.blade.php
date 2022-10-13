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
        <main id="home" class="flex flex-col w-full min-h-screen" style="background-image:url('../images/herobanner.png'); background-size: cover">
            <!-- NAVIGATION BAR -->
            <livewire:navbar />
            <!-- Logged in Alert -->
            @if (Auth::user())
            <div class="flex flex-wrap justify-center">
                <div class="relative flex flex-row justify-between w-1/6 px-4 py-3 text-green-700 bg-green-100 border border-green-400 rounded" role="alert">
                    <span class="flex w-fit"> You are logged in! </span>
                    <strong class="flex justify-between cursor-pointer alert-del">
                        &times;
                    </strong>
                </div>
            </div>
            @endif
            <!-- HERO SECTION -->
            <div class="flex items-center justify-center min-h-[89vh] w-full md:min-h-[90vh] ">
                <div class="flex flex-col p-5 w-5/6 gap-2 z-[1] text-center md:w-3/6 lg:gap-5 lg:w-3/6 -mb-[30%] md:m-0 md:-ml-[30%]">
                    <div class="w-full text-5xl font-semibold leading-none tracking-widest text-white lg:text-6xl xl:text-7xl font-title">
                        FIGHT<br/>FOR THE<br/>LIGHT
                    </div>
                    <div class="flex flex-col items-center justify-start">
                        <button class="px-4 py-2 text-sm font-semibold border-2 md:text-base md:px-12 border-main-500 bg-main-400 text-main-100 "> Play Now </button>
                    </div>
                </div>
            </div>
        </main>

        <!-- LORE -->
        <section id="lore" class="flex flex-col items-center justify-start w-full gap-8 py-8 h-fit lg:min-h-screen bg-main-main">
            <!-- CONTENT -->
            <div class="flex items-center justify-center w-full px-10 text-center lg:px-16 ">
                <div class="w-full border-2 border-main-gold"></div>
                <!-- TITLE -->
                <div class="flex items-center justify-center px-8 py-1 text-2xl text-main-gold whitespace-nowrap w-fit lg:text-5xl font-header">
                    The Lore
                </div>
                <div class="w-full border-2 border-main-gold"></div>
            </div>
            <!-- IMAGE -->
            <div  class="flex justify-center items-center w-[90%] md:w-[70%] lg:w-[90%] h-fit lg:gap-9 md:gap-6 gap-3   ">
                <!-- LEFT IMAGE -->
                <div class="flex items-center justify-center w-[80%] lg:w-[30%] ">
                    <img class="w-full h-full" src="/images/Lore1.png" alt="Lore1">
                </div>
                <!-- RIGHT IMAGE -->
                <div class="flex items-end justify-end w-[80%] lg:w-[30%] ">
                    <!-- <div class="absolute flex flex-col -translate-x-1/2 -translate-y-1/2 bg-red-100 w-fit top-1/2 left-1/2 ">
                        <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, ea.</div>
                    </div> -->
                    <a href="/lore" class="absolute px-3 py-1 mx-10 my-12 text-xs font-medium border-2 md:text-sm border-main-500 bg-main-500 text-main-100">Read More</a>
                    <img class="w-full h-full" src="/images/Lore2.png" alt="Lore2">
                </div>
            </div>
            <div class="flex items-center justify-center w-full px-10 text-center lg:px-16 ">
                <div class="w-full border-2 border-main-gold"></div>
            </div>
        </section>

        <!-- HEROES -->
        <section id="heroes" class="flex flex-col items-center justify-start w-full gap-8 py-8 h-fit lg:min-h-screen bg-main-main">
            <!-- CONTENT -->
            <div class="flex items-center justify-center w-full px-10 text-center lg:px-16 ">
                <div class="w-full border-2 border-main-gold"></div>
                <!-- TITLE -->
                <div class="flex items-center justify-center px-8 py-1 text-2xl text-main-gold whitespace-nowrap w-fit lg:text-5xl font-header">
                    The Heroes
                </div>
                <div class="w-full border-2 border-main-gold"></div>
            </div>
            <!-- IMAGES -->
            <div class="flex flex-wrap justify-center items-center lg:flex-nowrap w-[90%] lg:w-[80%] h-[700px] lg:h-[500px] p-0 gap-0 lg:gap-5 text-main-gold">
                <a href="/heroes/lancet" class="flex items-center w-1/2 lg:w-1/4">
                    <img class="w-full h-full" src="/images/char_lancet.png" alt="Character Image">
                </a>
                <a href="/heroes/signe" class="flex items-center w-1/2 lg:w-1/4">
                    <img class="w-full h-full" src="/images/char_signe.png" alt="Character Image">
                </a>
                <a href="/heroes/giannis" class="flex items-center w-1/2 lg:w-1/4 ">
                    <img class="w-full h-full" src="/images/char_giannis.png" alt="Character Image">
                </a>
                <a href="/heroes/ezra" class="flex items-center w-1/2 lg:w-1/4 ">
                    <img class="w-full h-full" src="/images/char_ezra.png" alt="Character Image">
                </a>
            </div>
            <div class="flex items-center justify-center w-full px-10 text-center lg:px-16 ">
                <div class="w-full border-2 border-main-gold"></div>
            </div>
        </section>

        <!-- BACKGROUND -->
        <div style="background-image:url('../images/Gameplay-levels-full-bg.png'); background-size: cover">
            <!-- GAMEPLAY -->
            <section id="gameplay" class="flex flex-col-reverse items-center justify-center gap-10 w-full min-h-screen lg:min-h-screen lg:flex-row py-10">
                <!-- IMAGES -->
                <div class="flex flex-wrap lg:flex-nowrap lg:flex-col items-center justify-center w-full h-full lg:w-[60%] lg:h-[600px] lg:p-0">
                    <div class="flex items-center justify-center lg:-mb-10 lg:mr-52 w-[300px] lg:w-[350px] z-30">
                        <a href="/gameplay#home">
                            <img class="w-full h-full" src="/images/gp_playprog.png" alt="Gameplay Image">
                        </a>
                    </div>
                    <div class="flex items-center justify-center lg:ml-52 w-[300px] lg:w-[350px] z-20">
                        <a href="/gameplay#rewards">
                            <img class="w-full h-full" src="/images/gp_dungeonreward.png" alt="Gameplay Image">
                        </a>
                    </div>
                    <div class="flex items-center justify-center lg:-mt-10 lg:mr-52 w-[290px] lg:w-[350px] border-4 border-main-gold z-10">
                        <a href="/gameplay#controls">
                            <img class="w-full h-full" src="/images/gp_controls.png" alt="Gameplay Image">
                        </a>
                    </div>
                </div>
                <!-- CONTENT -->
                <div class="flex flex-col items-center justify-center lg:items-start lg:justify-end w-[80%] md:w-[60%] lg:w-[40%] gap-3 lg:pr-20">
                    <!-- TITLE -->
                    <div class="px-4 py-1 text-3xl text-right text-main-gold lg:text-5xl font-header">Gameplay</div>
                    <!-- DESCRIPTION -->
                    <div class=" text-white text-md font-body text-justify">
                    Chromahunt is a 2D Side-Scrolling Multiplayer Online Role-Playing Game where players will need to work together to retrieve the lost ChromaGems and defeat The Colorless King. 
                    The players would travel through Iris' eight kingdoms, defeating creatures that guard the ChromaGems. Each kingdom has one ChromaGem, which is obtained at the end of each boss. The players begin their trip in the forest, where they may encounter monsters such as goblins.
                    </div>
                </div>
            </section>

            <!-- MODES -->
            <section id="modes" class="flex flex-col items-center justify-center w-full min-h-screen">
                <div class="flex flex-col-reverse items-center justify-center w-full h-full gap-10 pt-20 pb-20">
                    <!-- MODES IMAGES -->
                    <div class="flex flex-wrap items-center justify-center w-full gap-3 lg:flex-row md:gap-10 lg:gap-20">
                        <a href="/gamemode" class="flex items-start justify-center w-[250px] lg:w-[320px]">
                            <img class="w-full h-full" src="/images/gmodes_coop.png" alt="Gamemode Image">
                        </a>
                        <a href="/gamemode" class="flex items-start justify-center w-[250px] lg:w-[320px]">
                            <img class="w-full h-full" src="/images/gmode_story.png" alt="Gamemode Image">
                        </a>
                    </div>
                    <!-- CONTENT -->
                    <div class="flex items-center justify-center w-full px-10 text-center lg:px-10 ">
                        <div class="w-full border-2 border-main-gold"></div>
                            <!-- TITLE -->
                            <div class="flex items-center justify-center px-8 py-1 text-3xl whitespace-nowrap w-fit lg:text-5xl font-header text-main-gold">
                            GAME MODES
                            </div>
                        <div class="w-full border-2 border-main-gold"></div>
                    </div>
                </div>
                <div class="flex items-center justify-center w-full px-10 text-center ">
                    <div class="w-full border-2 border-main-gold"></div>
                </div>
            <section>

            <!-- LEVELS -->
            <section id="levels" class="flex flex-col items-center justify-center w-full min-h-screen">
                <div class="flex flex-col items-center justify-center w-full h-full gap-10 lg:flex-row lg:py-0 lg:px-6 py-10">
                    <!-- CONTENT -->
                    <div class="flex flex-col items-center justify-center lg:items-start lg:justify-end w-[80%] md:w-[60%] lg:w-[40%] gap-3 lg:pl-10">
                        <!-- TITLE -->
                        <div class="px-4 py-1 text-3xl text-main-gold lg:text-5xl font-header">Levels</div>
                        <!-- DESCRIPTION -->
                        <div class=" text-white text-md font-body text-justify">
                        Explore the eight kingdoms in the world of Iris. Each kingdom will have an arbitrary amount of stages. Each stage will have mobs ranging from basic to elite level. As the levels rise, the monsters become more powerful. Every kingdom’s last stage will be a Boss Stage, ranging from the Goblin King to The Colorless King himself.
                        </div>
                    </div>
                    <!-- LEVEL IMAGES -->
                    <div class="flex flex-wrap lg:flex-nowrap lg:flex-col items-center justify-center gap-1 py-2 w-full h-full lg:w-[80%] lg:h-[600px]">
                        <div class="flex items-center justify-center lg:-mb-10 lg:ml-52 w-[300px] lg:w-[350px] border-4 border-main-gold z-10">
                            <a href="/levels">
                                <img class="w-full h-full" src="/images/level1BG.png" alt="Levels Image">
                            </a>
                        </div>
                        <div class="flex items-center justify-center lg:mr-52 w-[300px] lg:w-[350px] border-4 border-main-gold z-20">
                            <a href="/levels">
                                <img class="w-full h-full" src="/images/level2BG.png" alt="Levels Image">
                            </a>
                        </div>
                        <div class="flex items-center justify-center lg:-mt-10 lg:ml-52 w-[300px] lg:w-[350px] border-4 border-main-gold z-30">
                            <a href="/levels">
                                <img class="w-full h-full" src="/images/level3BG.png" alt="Levels Image">
                            </a>
                        </div>
                    
                    
                        <!-- <a href="/levels" class="flex items-center lg:items-start w-1/2 lg:w-[80%] h-1/2">
                            <div class="flex items-center justify-center m-1 lg:-mb-20 lg:ml-80 w-[250px] lg:w-[350px] h-[200px] lg:h-[250px] border-4 border-main-gold z-4" style="background-image:url('../images/level1BG.png'); background-size: cover"></div>
                        </a>
                        <a href="/levels" class="flex items-center lg:items-end w-1/2 lg:w-[80%] h-1/2">
                            <div class="flex items-center justify-center m-1 lg:ml-28 w-[250px] lg:w-[350px] h-[200px] lg:h-[250px] border-4 border-main-gold z-5" style="background-image:url('../images/level2BG.png'); background-size: cover"></div>
                        </a>
                        <a href="/levels" class="flex items-center lg:items-start w-1/2 lg:w-[80%] h-1/2">
                            <div class="flex items-center justify-center mt-20 lg:-mt-20 lg:ml-80 w-[250px] lg:w-[350px] h-[200px] lg:h-[250px] border-4 border-main-gold z-6" style="background-image:url('../images/level3BG.png'); background-size: cover"></div>
                        </a> -->
                    </div>
                </div>
            </section>
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

            // X button on successful login/logout

                var alert_del = document.querySelectorAll(".alert-del");

                alert_del.forEach((x) => {
                    x.addEventListener('click', () =>
                        x.parentElement.classList.add('hidden')
                    );
                });
        </script>
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
        @livewireScripts
    </body>
</html>
