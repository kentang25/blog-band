
<footer class="border-t border-white/10 bg-black text-white">
    <div class="mx-auto max-w-7xl px-6 py-12 lg:px-8">

        <div class="grid grid-cols-1 gap-10 md:grid-cols-3">

            {{-- Brand --}}
            <div>
                <h2 class="text-2xl font-bold tracking-widest">
                    GESCHLOCS
                </h2>

                <p class="mt-4 max-w-sm text-sm leading-6 text-gray-400">
                    GESCHLOCS adalah kegelapan total tanpa kompromi.
                </p>
            </div>

            {{-- Navigation --}}
            <div>
                <h3 class="text-sm font-semibold uppercase tracking-wider text-gray-300">
                    Navigation
                </h3>

                <ul class="mt-4 space-y-3 text-sm">
                    <li>
                        <a href="/" class="text-gray-400 transition hover:text-white">
                            Home
                        </a>
                    </li>

                    <li>
                        <a href="/about" class="text-gray-400 transition hover:text-white">
                            About
                        </a>
                    </li>

                    <li>
                        <a href="/blog" class="text-gray-400 transition hover:text-white">
                            Blog
                        </a>
                    </li>

                    <li>
                        <a href="/contact" class="text-gray-400 transition hover:text-white">
                            Contact
                        </a>
                    </li>
                </ul>
            </div>

            {{-- Social Media --}}
            <div>
                <h3 class="text-sm font-semibold uppercase tracking-wider text-gray-300">
                    Follow Us
                </h3>

                <div class="mt-4 flex gap-4">

                    <a href="#"
                       class="flex h-10 w-10 items-center justify-center rounded-full border border-white/10 text-gray-400 transition hover:border-white/30 hover:text-white">
                        <i class="fa-brands fa-instagram"></i>
                    </a>

                    <a href="#"
                       class="flex h-10 w-10 items-center justify-center rounded-full border border-white/10 text-gray-400 transition hover:border-white/30 hover:text-white">
                        <i class="fa-brands fa-youtube"></i>
                    </a>

                    <a href="#"
                       class="flex h-10 w-10 items-center justify-center rounded-full border border-white/10 text-gray-400 transition hover:border-white/30 hover:text-white">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>

                    <a href="#"
                       class="flex h-10 w-10 items-center justify-center rounded-full border border-white/10 text-gray-400 transition hover:border-white/30 hover:text-white">
                        <i class="fa-brands fa-tiktok"></i>
                    </a>

                </div>
            </div>

        </div>

        {{-- Bottom --}}
        <div class="mt-10 border-t border-white/10 pt-6">
            <div class="flex flex-col gap-3 text-center text-sm text-gray-500 sm:flex-row sm:items-center sm:justify-between sm:text-left">

                <p>
                    &copy; {{ date('Y') }} Geschlocs. All rights reserved.
                </p>

                <p>
                    Made with passion.
                </p>

            </div>
        </div>

    </div>
</footer>

