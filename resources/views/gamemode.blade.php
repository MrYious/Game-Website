<!-- DUPLICATE THIS TEMPLATE FOR NEW PAGES -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>ChromaHunt Game modes</title>
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
    <!-- NAVBAR -->
    <livewire:navbar />
        <!-- GAME MODE -->
        <div class="flex flex-col justify-center items-center mb-20 mx-20">
                <!-- CONTENT -->
                <div class="flex flex-col relative w-full h-full justify-center items-center px-10 py-10 m-10 bg-slate-400 gap-3">
                    <div class="text-4xl font-semibold text-left border-b-4 border-black">THE GAME MODES</div>
                    <div class="text-left">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas sequi earum voluptate quam eligendi fugiat laboriosam alias asperiores facilis ab dolorem corporis dolor cum saepe, architecto, adipisci non inventore et nostrum quia. Perspiciatis qui, quisquam deserunt debitis id itaque ratione magnam! Quas facere qui ea, natus cum, inventore et vel, tenetur esse voluptate quam veniam tempore reprehenderit obcaecati laudantium omnis fugiat voluptatibus tempora? Expedita in quod recusandae aut excepturi nostrum obcaecati facere perspiciatis quis ipsa? Beatae, illo quos eaque optio unde dolor, provident doloremque alias mollitia corporis corrupti eum, ad rerum. Ullam quam tempore perspiciatis, nostrum dolores non nobis tempora!
                    </div>
                </div>
                <!-- CAROUSEL -->
                <div id="carouselExampleCaptions" class="carousel slide relative w-full h-full" data-bs-ride="carousel">
                    <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
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
                    <div class="carousel h-full w-full overflow-hidden">
                        <div class="carousel-item active h-full float-left w-full">
                        <img
                            src="https://mdbootstrap.com/img/Photos/Slides/img%20(15).jpg"
                            class="block w-full h-full"
                            alt="..."
                        />
                        <div class="carousel-caption hidden md:block absolute text-center">
                            <h5 class="text-xl">GAME MODE 1</h5>
                            <p>Description.</p>
                        </div>
                        </div>
                        <div class="carousel-item relative float-left w-full">
                        <img
                            src="https://mdbootstrap.com/img/Photos/Slides/img%20(22).jpg"
                            class="block w-full"
                            alt="..."
                        />
                        <div class="carousel-caption hidden md:block absolute text-center">
                            <h5 class="text-xl">GAME MODE 2</h5>
                            <p>Description.</p>
                        </div>
                        </div>
                        <div class="carousel-item relative float-left w-full">
                        <img
                            src="https://mdbootstrap.com/img/Photos/Slides/img%20(23).jpg"
                            class="block w-full"
                            alt="..."
                        />
                        <div class="carousel-caption hidden md:block absolute text-center">
                            <h5 class="text-xl">GAME MODE 3</h5>
                            <p>Description.</p>
                        </div>
                        </div>
                    </div>
                    <button
                        class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
                        type="button"
                        data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev"
                    >
                        <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button
                        class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
                        type="button"
                        data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next"
                    >
                        <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
        </div>

        <livewire:footer />
        <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
        @livewireScripts
    </body>
</html>
