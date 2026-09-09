<header class="sticky top-0 z-40 bg-[#111111]/90 backdrop-blur-xl border-b border-gray-800">

                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 px-5 lg:px-8 py-5">

                    <!-- Left -->
                    <div>
                        <h2 class="text-xl sm:text-2xl font-bold text-white">
                            Admin Dashboard
                        </h2>

                        <p class="text-sm text-gray-500 mt-1">
                            Welcome back to Higgle Session.
                        </p>
                    </div>

                    <!-- Right -->
                    <div class="flex items-center gap-3 w-full sm:w-auto">

                        <!-- Search -->
                        <div class="relative flex-1 sm:flex-none">

                            <form action="/admin/search" method="GET">

                                <input type="text" name="keyword" placeholder="Search..." class="w-full sm:w-72 bg-[#1a1a1a]
                    border border-gray-700
                    rounded-2xl
                    px-5 py-3 pl-12
                    text-sm text-white
                    focus:outline-none
                    focus:border-gray-500">

                                <i class="fa-solid fa-magnifying-glass
                    absolute left-4 top-1/2
                    -translate-y-1/2
                    text-gray-500">
                                </i>

                            </form>

                        </div>

                        <!-- Mobile Menu Button -->
                        <button id="menuBtn" class="lg:hidden bg-black text-white p-3 rounded-xl shadow-lg shrink-0">

                            <i class="fa-solid fa-bars"></i>

                        </button>

                    </div>

                </div>

            </header>