<!-- DUPLICATE THIS TEMPLATE FOR NEW PAGES -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>ChromaHunt Heroes</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
        <script src="https://cdn.tailwindcss.com"></script>
        @livewireStyles
    </head>
    <body>
        <!-- SCROLL TO TOP BUTTON -->
        <livewire:scroll-top />
        <!-- NAVBAR -->
        <livewire:navbar />
        <!-- HEROES -->
        <section id="heroes" class="flex items-center justify-center w-full min-h-screen gap-10 bg-slate-300">
            <!-- IMAGE GROUPS -->
            <div class="flex justify-start w-[60%] h-[550px] border-2 border-black ">
                <!-- IMAGE 1 -->
                <div class="flex items-start w-1/4 ">
                    <div class="flex items-center justify-center w-[120%] -m-5  h-4/5 border-[1px] border-black" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" role="button" aria-controls="offcanvasExample">Hero Image 1</div>
                </div>
                <!-- POP UP -->
                <div class="fixed top-0 bottom-0 left-0 flex flex-col invisible max-w-full text-gray-700 transition duration-300 ease-in-out bg-white border-none shadow-sm outline-none offcanvas offcanvas-start w-96" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                    <div class="flex items-center justify-between p-4 offcanvas-header">
                        <h5 class="mb-0 font-semibold leading-normal offcanvas-title" id="offcanvasExampleLabel">Hero 1</h5>
                        <button type="button" data-bs-dismiss="offcanvas" aria-label="Close">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div class="flex-grow p-4 overflow-y-auto offcanvas-body">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe dignissimos nesciunt maiores voluptatem eius ipsum at natus labore veniam eum, dolorum corrupti a minima ab fugit. Quisquam modi sequi pariatur minus placeat. Temporibus sapiente aut soluta, blanditiis ipsam sint exercitationem sit, doloremque rem iure, quaerat qui quisquam ab corporis minima.
                    </div>
                </div>
                <!-- IMAGE 2 -->
                <div class="flex items-end w-1/4 ">
                    <div class="flex items-center justify-center w-[120%] -m-5  h-4/5 border-[1px] border-black" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" role="button" aria-controls="offcanvasTop">Hero Image 2</div>
                </div>
                <!-- POP UP -->
                <div class="fixed top-0 bottom-0 left-0 flex flex-col invisible max-w-full text-gray-700 transition duration-300 ease-in-out bg-white border-none shadow-sm outline-none offcanvas offcanvas-start h-96" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                    <div class="flex items-center justify-between p-4 offcanvas-header">
                        <h5 class="mb-0 font-semibold leading-normal offcanvas-title" id="offcanvasTopLabel">Hero 2</h5>
                        <button type="button" data-bs-dismiss="offcanvas" aria-label="Close">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div class="flex-grow p-4 overflow-y-auto offcanvas-body">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe dignissimos nesciunt maiores voluptatem eius ipsum at natus labore veniam eum, dolorum corrupti a minima ab fugit. Quisquam modi sequi pariatur minus placeat. Temporibus sapiente aut soluta, blanditiis ipsam sint exercitationem sit, doloremque rem iure, quaerat qui quisquam ab corporis minima.
                    </div>
                </div>
                <!-- IMAGE 3 -->
                <div class="flex items-start w-1/4 ">
                    <div class="flex items-center justify-center w-[120%] -m-5  h-4/5 border-[1px] border-black" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" role="button" aria-controls="offcanvasBottom">Hero Image 3</div>
                </div>
                <!-- POP UP -->
                <div class="fixed bottom-0 left-0 right-0 flex flex-col invisible max-w-full max-h-full text-gray-700 transition duration-300 ease-in-out bg-white border-none shadow-sm outline-none offcanvas offcanvas-bottom bg-clip-padding h-1/3" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
                    <div class="flex items-center justify-between p-4 offcanvas-header">
                        <h5 class="mb-0 font-semibold leading-normal offcanvas-title" id="offcanvasBottomLabel">Hero 3</h5>
                        <button type="button" data-bs-dismiss="offcanvas" aria-label="Close">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div class="flex-grow p-4 overflow-y-auto offcanvas-body small">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Est culpa aliquid voluptate ad, esse consequuntur illo odio eveniet dicta consectetur iure quis ipsa quod reprehenderit perferendis ducimus. Ratione dolores distinctio blanditiis in molestias repellat ipsa debitis, dolorum, quibusdam expedita libero delectus nostrum voluptas. Sunt recusandae impedit autem accusantium perspiciatis mollitia!
                    </div>
                </div>
                <!-- IMAGE 4 -->
                <div class="flex items-end w-1/4 ">
                    <div class="flex items-center justify-center w-[120%] -m-5  h-4/5 border-[1px] border-black" data-bs-toggle="offcanvas"  data-bs-target="#offcanvasRight" role="button" aria-controls="offcanvasRight">Hero Image 4</div>
                </div>
                <!-- POP UP -->
                <div class="fixed top-0 bottom-0 right-0 flex flex-col invisible max-w-full text-gray-700 transition duration-300 ease-in-out bg-white border-none shadow-sm outline-none offcanvas offcanvas-end bg-clip-padding w-96" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                    <div class="flex items-center justify-between p-4 offcanvas-header">
                        <h5 class="mb-0 font-semibold leading-normal offcanvas-title" id="offcanvasRightLabel">Hero 4</h5>
                        <button type="button" data-bs-dismiss="offcanvas" aria-label="Close">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div class="flex-grow p-4 overflow-y-auto offcanvas-body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur explicabo autem perferendis qui ex, odit nemo id temporibus aliquam possimus excepturi! Cupiditate nesciunt voluptatum consequatur ex explicabo, ducimus magni adipisci dolor facilis. Ut expedita sed odit, quam atque error tenetur tempora itaque quia, suscipit dolorum veritatis praesentium accusantium quas deleniti.
                    </div>
                </div>
            </div>
        </section>


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
