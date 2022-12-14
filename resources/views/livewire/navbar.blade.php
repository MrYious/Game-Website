<nav
    x-data="{ open: false, toggle() { this.open = ! this.open } }"
    class=" flex flex-wrap items-center justify-between w-full px-5 py-5 gap-5 md:p-0 md:px-2 min-h-[10vh] select-none "
>
    <!-- TITLE -->
    <a href="/" class="w-fit">
        <img class="h-16" src="/images/logo.png" alt="logo">
        <!-- ChromaHunt -->
    </a>

    <!-- MENU -->
    <div class="text-white md:hidden">
        <svg @click="toggle()" x-show="!open" xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 cursor-pointer" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
        </svg>
        <svg @click="toggle()" x-show="open" xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 cursor-pointer " viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
        </svg>
    </div>

    <!-- NAV LINKS MOBILE -->
    <div x-show='open' class="flex flex-col items-center w-full font-semibold text-center text-white md:hidden">
        <div class="w-full rounded-sm cursor-pointer dropdown hover:bg-main-300 ">
            <button class="px-3 py-3 dropbtn hover:bg-main-300 ">
                Game Info
            </button>
            <div class="bg-main-500 dropdown-contentM">
                <a href="/#lore" class="hover:bg-main-300">Lore</a>
                <a href="/#heroes" class="hover:bg-main-300">Heroes</a>
                <a href="/#gameplay" class="hover:bg-main-300">Gameplay</a>
                <a href="/#modes" class="hover:bg-main-300">Gamemodes</a>
                <a href="/#levels" class="hover:bg-main-300">Levels</a>
            </div>
        </div>
        <a href="/" class="w-full px-3 py-3 hover:bg-main-300"> Whitepaper </a>
        <a href="/" class="w-full px-3 py-3 hover:bg-main-300"> Marketplace </a>
        <a href="/" class="w-full px-3 py-3 hover:bg-main-300"> About us </a>
        @if (Auth::guest())
            <a href="/login" class="w-full px-3 py-3 font-semibold text-white bg-main-500"> SIGN IN </a>
        @else
            <a href="/logout" class="w-full px-3 py-3 font-semibold text-white bg-main-500"> LOGOUT </a>
        @endif
    </div>

    <!-- DESKTOP -->
    <div class="items-center hidden text-white md:flex w-fit h-fit lg:gap-1">
        <div class="rounded-sm dropdown hover:bg-main-mainl">
            <button class="flex items-center h-full p-3 border-transparent dropbtn hover:bg-main-mainl border-y-4 hover:border-b-main-500">
                Game Info
            </button>
            <div class="bg-main-500 dropdown-contentD">
                <a href="/#lore" class="hover:bg-main-300">Lore</a>
                <a href="/#heroes" class="hover:bg-main-300">Heroes</a>
                <a href="/#gameplay" class="hover:bg-main-300">Gameplay</a>
                <a href="/#modes" class="hover:bg-main-300">Gamemodes</a>
                <a href="/#levels" class="hover:bg-main-300">Levels</a>
            </div>
        </div>
        <a href="/" class="flex items-center p-3 border-transparent rounded-sm border-y-4 hover:border-b-white hover:bg-main-mainl "> Whitepaper </a>
        <a href="/" class="flex items-center p-3 border-transparent rounded-sm border-y-4 hover:border-b-white hover:bg-main-mainl "> Marketplace </a>
        <a href="/" class="flex items-center p-3 border-transparent rounded-sm border-y-4 hover:border-b-white hover:bg-main-mainl "> About us </a>
        @if (Auth::guest())
            <a href="/login" class="flex items-center px-3 py-2 font-semibold text-white border-transparent rounded-md shadow-md bg-gradient-to-r from-green-600 to-main-400 border-y-4 shadow-main-500"> SIGN IN </a>
        @else
            <a href="/logout" class="flex items-center px-3 py-2 font-semibold text-white border-transparent rounded-md shadow-md bg-gradient-to-r from-green-600 to-main-gold border-y-4 shadow-main-500"> LOGOUT </a>
        @endif
    </div>
</nav>