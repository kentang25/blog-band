
<nav class="sticky top-0 z-50 border-b border-white/10 bg-black">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <div class="flex h-16 items-center justify-between">

            {{-- BRAND --}}
            <div class="shrink-0">
                <a href="/home"
                   class="text-xl font-black uppercase tracking-[0.25em] text-white">
                    GESCHLOCS
                </a>
            </div>


            {{-- DESKTOP MENU --}}
            <div class="hidden md:block">
                <div class="flex items-center gap-2">

                    <a href="/home"
                       class="rounded-sm px-4 py-2 text-sm font-semibold uppercase tracking-wider
                              text-gray-400 transition duration-200
                              hover:bg-white hover:text-black
                              {{ request()->is('home') ? 'bg-white text-black' : '' }}">
                        Home
                    </a>

                    <a href="/blog"
                       class="rounded-sm px-4 py-2 text-sm font-semibold uppercase tracking-wider
                              text-gray-400 transition duration-200
                              hover:bg-white hover:text-black
                              {{ request()->is('blog*') ? 'bg-white text-black' : '' }}">
                        Blog
                    </a>

                      

                    <a href="/contact"
                       class="rounded-sm px-4 py-2 text-sm font-semibold uppercase tracking-wider
                              text-gray-400 transition duration-200
                              hover:bg-white hover:text-black
                              {{ request()->is('contact') ? 'bg-white text-black' : '' }}">
                        Contact
                    </a>

                    <a href="/katalog"
                       class="rounded-sm px-4 py-2 text-sm font-semibold uppercase tracking-wider
                              text-gray-400 transition duration-200
                              hover:bg-white hover:text-black
                              {{ request()->is('katalog*') ? 'bg-white text-black' : '' }}">
                        Katalog
                    </a>

                </div>
            </div>


            {{-- MOBILE BUTTON --}}
            <button
                type="button"
                onclick="toggleMobileMenu()"
                class="inline-flex items-center justify-center rounded-sm
                       border border-white/10 p-2 text-gray-400
                       transition hover:border-white/30 hover:text-white
                       md:hidden"
                aria-label="Toggle menu"
            >

                {{-- Hamburger --}}
                <svg id="menu-open"
                     xmlns="http://www.w3.org/2000/svg"
                     fill="none"
                     viewBox="0 0 24 24"
                     stroke-width="1.5"
                     stroke="currentColor"
                     class="h-6 w-6">
                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
                </svg>

                {{-- Close --}}
                <svg id="menu-close"
                     xmlns="http://www.w3.org/2000/svg"
                     fill="none"
                     viewBox="0 0 24 24"
                     stroke-width="1.5"
                     stroke="currentColor"
                     class="hidden h-6 w-6">
                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M6 18 18 6M6 6l12 12"/>
                </svg>

            </button>

        </div>
    </div>


    {{-- MOBILE MENU --}}
    <div id="mobile-menu"
         class="hidden border-t border-white/10 bg-black md:hidden">

        <div class="space-y-1 px-4 py-4">

            <a href="/home"
               class="block rounded-sm px-4 py-3 text-sm font-semibold uppercase tracking-wider
                      text-gray-400 transition
                      hover:bg-white hover:text-black
                      {{ request()->is('home') ? 'bg-white text-black' : '' }}">
                Home
            </a>

            <a href="/blog"
               class="block rounded-sm px-4 py-3 text-sm font-semibold uppercase tracking-wider
                      text-gray-400 transition
                      hover:bg-white hover:text-black
                      {{ request()->is('blog*') ? 'bg-white text-black' : '' }}">
                Blog
            </a>

            <a href="/about"
               class="block rounded-sm px-4 py-3 text-sm font-semibold uppercase tracking-wider
                      text-gray-400 transition
                      hover:bg-white hover:text-black
                      {{ request()->is('about') ? 'bg-white text-black' : '' }}">
                About
            </a>

            <a href="/contact"
               class="block rounded-sm px-4 py-3 text-sm font-semibold uppercase tracking-wider
                      text-gray-400 transition
                      hover:bg-white hover:text-black
                      {{ request()->is('contact') ? 'bg-white text-black' : '' }}">
                Contact
            </a>

            <a href="/katalog"
               class="block rounded-sm px-4 py-3 text-sm font-semibold uppercase tracking-wider
                      text-gray-400 transition
                      hover:bg-white hover:text-black
                      {{ request()->is('katalog*') ? 'bg-white text-black' : '' }}">
                Katalog
            </a>

        </div>
    </div>

</nav>


{{-- MOBILE MENU SCRIPT --}}
<script>
    function toggleMobileMenu() {

        const menu = document.getElementById('mobile-menu');
        const openIcon = document.getElementById('menu-open');
        const closeIcon = document.getElementById('menu-close');

        menu.classList.toggle('hidden');
        openIcon.classList.toggle('hidden');
        closeIcon.classList.toggle('hidden');
    }
</script>

