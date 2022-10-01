<!-- DUPLICATE THIS TEMPLATE FOR NEW PAGES -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>ChromaHunt Game Modes</title>
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
        <!-- GAME MODE -->
        <main id="main" class="flex flex-col w-full min-h-screen items-center justify-center p-5 gap-3 bg-slate-100">
                <!-- CONTENT -->
                <div class="flex flex-col items-center justify-start w-full h-full gap-3 p-5 bg-slate-400">
                    <div class="text-4xl font-semibold text-left border-b-4 border-black">THE GAME MODES</div>
                    <div class="text-left">
                    </div>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam impedit molestiae aliquid odio qui neque ullam velit blanditiis cumque perspiciatis hic suscipit architecto animi vero mollitia optio necessitatibus quae nulla, similique, maiores magnam non eveniet tempore. Libero nisi temporibus aperiam numquam in id inventore ut, ducimus, beatae eveniet atque rerum?
                </div>
                <!-- CAROUSEL -->
                <div id="carouselExampleCaptions" class="relative w-full h-full carousel slide" data-bs-ride="carousel">
                    <div class="absolute bottom-0 left-0 right-0 flex justify-center p-0 mb-4 carousel-indicators">
                        <button
                        type="button"
                        data-bs-target="#carouselExampleCaptions"
                        data-bs-slide-to="0"
                        class="active"
                        aria-current="true"
                        aria-label="Slide 1"
                        ></button>
                        <button
                        type="button"
                        data-bs-target="#carouselExampleCaptions"
                        data-bs-slide-to="1"
                        aria-label="Slide 2"
                        ></button>
                        <button
                        type="button"
                        data-bs-target="#carouselExampleCaptions"
                        data-bs-slide-to="2"
                        aria-label="Slide 3"
                        ></button>
                    </div>
                    <div class="w-full h-full overflow-hidden carousel">
                        <div class="float-left w-full h-full carousel-item active">
                        <img
                            src="https://mdbootstrap.com/img/Photos/Slides/img%20(15).jpg"
                            class="block w-full h-full"
                            alt="..."
                        />
                        <div class="absolute hidden text-center carousel-caption md:block">
                            <h5 class="text-xl">GAME MODE 1</h5>
                            <p>Description.</p>
                        </div>
                        </div>
                        <div class="relative float-left w-full carousel-item">
                        <img
                            src="https://mdbootstrap.com/img/Photos/Slides/img%20(22).jpg"
                            class="block w-full"
                            alt="..."
                        />
                        <div class="absolute hidden text-center carousel-caption md:block">
                            <h5 class="text-xl">GAME MODE 2</h5>
                            <p>Description.</p>
                        </div>
                        </div>
                        <div class="relative float-left w-full carousel-item">
                        <img
                            src="https://mdbootstrap.com/img/Photos/Slides/img%20(23).jpg"
                            class="block w-full"
                            alt="..."
                        />
                        <div class="absolute hidden text-center carousel-caption md:block">
                            <h5 class="text-xl">GAME MODE 3</h5>
                            <p>Description.</p>
                        </div>
                        </div>
                    </div>
                    <button
                        class="absolute top-0 bottom-0 left-0 flex items-center justify-center p-0 text-center border-0 carousel-control-prev hover:outline-none hover:no-underline focus:outline-none focus:no-underline"
                        type="button"
                        data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev"
                    >
                        <span class="inline-block bg-no-repeat carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button
                        class="absolute top-0 bottom-0 right-0 flex items-center justify-center p-0 text-center border-0 carousel-control-next hover:outline-none hover:no-underline focus:outline-none focus:no-underline"
                        type="button"
                        data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next"
                    >
                        <span class="inline-block bg-no-repeat carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
        </main>

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
        @livewireScripts
    </body>
</html>
