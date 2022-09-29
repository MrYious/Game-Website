<nav
    x-data="{ open: false, toggle() { this.open = ! this.open } }"
    class=" flex flex-wrap items-center justify-between w-full px-5 py-5 gap-5 md:py-2 min-h-[10vh] bg-slate-400 md:bg-slate-500 lg:bg-slate-600 xl:bg-slate-700 "
>
    <!-- TITLE -->
    <a href="/" class="text-4xl font-bold ">ChromaHunt</a>

    <!-- MENU -->
    <div class="md:hidden">
        <svg @click="toggle()" x-show="!open" xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 cursor-pointer" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
        </svg>
        <svg @click="toggle()" x-show="open" xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 cursor-pointer " viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
        </svg>
    </div>

    <!-- NAV LINKS MOBILE -->
    <div x-show='open' class="flex flex-col items-center w-full font-semibold text-center md:hidden">
        <div class="w-full rounded-sm cursor-pointer dropdown hover:bg-slate-300 ">
            <button class="px-3 py-3 dropbtn hover:bg-slate-300 ">
                Game Info
            </button>
            <div class="bg-gray-200 dropdown-contentM">
                <a href="/#lore" class="hover:bg-slate-300">Lore</a>
                <a href="/#heroes" class="hover:bg-slate-300">Heroes</a>
                <a href="/#gameplay" class="hover:bg-slate-300">Gameplay</a>
                <a href="/#modesLevels" class="hover:bg-slate-300">Modes & Levels</a>
            </div>
        </div>
        <a href="/" class="w-full px-3 py-3 hover:bg-slate-300"> Whitepaper </a>
        <a href="/" class="w-full px-3 py-3 hover:bg-slate-300"> Marketplace </a>
        <a href="/" class="w-full px-3 py-3 hover:bg-slate-300"> About us </a>
        <a href="/login" class="w-full px-3 py-3 font-semibold text-white bg-gray-700"> SIGN IN </a>
    </div>

    <!-- DESKTOP -->
    <div class="items-center hidden gap-1 md:flex w-fit h-fit lg:gap-2">
        <div class="border-transparent rounded-sm dropdown hover:bg-slate-300 border-y-4 hover:border-b-black ">
            <button class="px-2 py-2 dropbtn hover:bg-slate-300 lg:px-3">
                Game Info
            </button>
            <div class="bg-gray-200 dropdown-contentD">
                <a href="/#lore" class="hover:bg-slate-300">Lore</a>
                <a href="/#heroes" class="hover:bg-slate-300">Heroes</a>
                <a href="/#gameplay" class="hover:bg-slate-300">Gameplay</a>
                <a href="/#modesLevels" class="hover:bg-slate-300">Modes & Levels</a>
            </div>
        </div>
        <a href="/" class="px-2 py-2 border-transparent rounded-sm border-y-4 hover:border-b-black hover:bg-slate-300 lg:px-3"> Whitepaper </a>
        <a href="/" class="px-2 py-2 border-transparent rounded-sm border-y-4 hover:border-b-black hover:bg-slate-300 lg:px-3"> Marketplace </a>
        <a href="/" class="px-2 py-2 border-transparent rounded-sm border-y-4 hover:border-b-black hover:bg-slate-300 lg:px-3"> About us </a>
        <a href="/login" class="px-3 py-2 font-semibold text-white bg-gray-700 rounded-md lg:px-3"> SIGN IN </a>
    </div>
</nav>