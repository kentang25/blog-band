<aside id="sidebar" class="fixed lg:relative inset-y-0 left-0 z-50
            w-72 bg-[#111111] border-r border-gray-800 shadow-2xl
            transform -translate-x-full lg:translate-x-0
            transition-transform duration-300 ease-in-out
            flex flex-col">

    <!-- Logo -->
    <div class="px-8 py-8 border-b border-gray-800">

        <div class="flex items-center gap-4">

            <div class="w-14 h-14 rounded-2xl bg-white text-black flex items-center justify-center text-2xl shadow-lg">

                <i class="fa-solid fa-skull-crossbones"></i>

            </div>

            <div>

                <h1 class="text-xl font-black tracking-[4px] text-white">
                    HIGGLE
                </h1>

                <p class="text-xs uppercase tracking-[3px] text-gray-500">
                    Session Admin
                </p>

            </div>

        </div>

    </div>

    <!-- Navigation -->
    <div class="flex-1 overflow-y-auto px-5 py-6">

        <!-- Main -->
        <div class="mb-10">

            <p class="text-xs uppercase tracking-[3px] text-gray-500 mb-4 px-3">
                Main Menu
            </p>

            <ul class="space-y-2">

                <li>
                    <a href="/admin"
                        class="flex items-center gap-4 bg-white text-black px-4 py-3 rounded-2xl font-semibold shadow-lg transition duration-300 no-underline">

                        <i class="fa-solid fa-chart-line text-lg"></i>

                        Dashboard

                    </a>
                </li>

                <li>
                    <a href="/admin/contact"
                        class="flex items-center gap-4 text-gray-400 hover:bg-gray-900 hover:text-white px-4 py-3 rounded-2xl transition duration-300 no-underline">

                        <i class="fa-solid fa-phone"></i>

                        Contact

                    </a>
                </li>

                <li>
                    <a href="/admin/contact"
                        class="flex items-center gap-4 text-gray-400 hover:bg-gray-900 hover:text-white px-4 py-3 rounded-2xl transition duration-300 no-underline">

                        <i class="fa-solid fa-book"></i>

                        Blog

                    </a>
                </li>

                <li>
                    <a href="/admin/contact"
                        class="flex items-center gap-4 text-gray-400 hover:bg-gray-900 hover:text-white px-4 py-3 rounded-2xl transition duration-300 no-underline">

                        <i class="fa-solid fa-shirt text-lg"></i>

                        Katalog

                    </a>
                </li>

                <li>
                    <a href="/admin/about"
                        class="flex items-center gap-4 text-gray-400 hover:bg-gray-900 hover:text-white px-4 py-3 rounded-2xl transition duration-300 no-underline">

                        <i class="fa-solid fa-circle-info text-lg"></i>

                        About Geschlocs

                    </a>
                </li>

            </ul>

        </div>



        <!-- System -->
        <div>

            <p class="text-xs uppercase tracking-[3px] text-gray-500 mb-4 px-3">
                System
            </p>

            <ul class="space-y-2">

                <li>
                    <a href="#" id="logoutBtn"
                        class="flex items-center gap-4 text-red-400 hover:bg-red-500 hover:text-white px-4 py-3 rounded-2xl transition duration-300 no-underline">
                        <i class="fa-solid fa-sign-out-alt"></i>
                        Logout
                    </a>

                    <!-- Modal Alert -->
                    <div id="logoutModal"
                        class="fixed inset-0 bg-black/60 backdrop-blur-sm hidden items-center justify-center z-50">

                        <div class="bg-zinc-900 border border-zinc-800 rounded-3xl p-6 w-[90%] max-w-md shadow-2xl">

                            <div class="flex items-center gap-3 mb-4">
                                <div class="bg-red-500/20 p-3 rounded-full">
                                    ⚠️
                                </div>
                                <h2 class="text-xl font-bold text-white">
                                    Konfirmasi Logout
                                </h2>
                            </div>

                            <p class="text-gray-400 mb-6">
                                Apakah anda yakin ingin keluar dari dashboard?
                            </p>

                            <div class="flex justify-end gap-3">

                                <button id="cancelBtn"
                                    class="px-5 py-2 rounded-xl bg-zinc-800 text-gray-300 hover:bg-zinc-700 transition">
                                    Batal
                                </button>

                                <a href="/admin/logout"
                                    class="px-5 py-2 rounded-xl bg-red-500 text-white hover:bg-red-600 transition">
                                    Ya, Keluar
                                </a>

                            </div>

                        </div>
                    </div>

                    <script>
                    const logoutBtn = document.getElementById('logoutBtn');
                    const logoutModal = document.getElementById('logoutModal');
                    const cancelBtn = document.getElementById('cancelBtn');

                    logoutBtn.addEventListener('click', function(e) {
                        e.preventDefault();
                        logoutModal.classList.remove('hidden');
                        logoutModal.classList.add('flex');
                    });

                    cancelBtn.addEventListener('click', function() {
                        logoutModal.classList.add('hidden');
                        logoutModal.classList.remove('flex');
                    });
                    </script>
                </li>

            </ul>

        </div>

    </div>

    <!-- Footer -->
    <div class="border-t border-gray-800 p-5">

        <div class="bg-gradient-to-br from-gray-900 to-black border border-gray-800 rounded-3xl p-5">

            <div class="flex items-center gap-4 mb-4">

                <div class="w-12 h-12 rounded-2xl bg-white text-black flex items-center justify-center">

                    <i class="fa-solid fa-bolt"></i>

                </div>

                <div>

                    <h3 class="text-white font-semibold">
                        Underground Culture
                    </h3>

                    <p class="text-xs text-gray-500">
                        Black Metal / Punk / Hardcore
                    </p>

                </div>

            </div>

            <p class="text-sm text-gray-400 leading-relaxed">
                Manage your merchandise collections with a modern
                underground dashboard experience.
            </p>

        </div>

    </div>

</aside>