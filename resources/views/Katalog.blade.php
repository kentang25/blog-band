<x-layout>
    <section class="min-h-screen bg-black px-4 py-20 text-gray-200 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-5x1">
            <div class="grid gap-12 border-b border-gray-800 pb-20 lg:grid-cols-2 lg:items-center">

                <div>
                    <p class="mb-4 text-xs font-semibold uppercase tracking-[0.4em] text-red-800">
                        Catalog The Band
                    </p>

                    <h1
                        class="font-serif text-4xl font-bold uppercase tracking-wider text-white sm:text-5xl lg:text-6xl">
                        Merchandise for the darkness you created yourselves—may it satisfy your egos.
                    </h1>

                    <div class="mt-6 h-px w-24 bg-red-900"></div>
                </div>



            </div>
            <div class="grid grid-cols-1 mt-4 gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">

                @forelse($katalog as $ktg)

                <article
                    class="group flex h-full flex-col overflow-hidden rounded-2xl border border-gray-800 bg-gradient-to-b from-gray-900 to-black shadow-xl transition-all duration-300 hover:-translate-y-1 hover:border-red-900">

                    {{-- Image --}}
                    <div class="relative aspect-[4/5] overflow-hidden bg-gray-950">

                        <img src="{{ asset('img_upload/' . $ktg['gambar']) }}" alt="{{ $ktg['title'] }}"
                            class="h-full w-full object-cover transition duration-700 group-hover:scale-105">

                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent">
                        </div>

                    </div>


                    {{-- Content --}}
                    <div class="flex flex-1 flex-col p-5 sm:p-6">

                        <h3 class="text-xl font-black uppercase tracking-wide text-white sm:text-2xl">
                            {{ $ktg['title'] }}
                        </h3>

                        <div class="my-5 border-t border-gray-800"></div>


                        <div class="mt-auto">

                            <p class="text-[10px] font-semibold uppercase tracking-[0.25em] text-gray-500">
                                Available Size
                            </p>

                            <p class="mt-1 text-sm font-semibold text-gray-200">
                                {{ $ktg['size'] }}
                            </p>

                            <a href="https://www.instagram.com/higgle_session/" target="_blank"
                                rel="noopener noreferrer"
                                class="mt-5 flex w-full items-center justify-center rounded-xl border border-gray-700 bg-white px-4 py-3 text-xs font-bold uppercase tracking-wider text-black transition duration-300 hover:border-red-600 hover:bg-red-600 hover:text-white">
                                Go To Instagram
                                <span class="ml-2">↗</span>
                            </a>

                        </div>

                    </div>

                </article>

                @empty

                <div class="col-span-full py-20 text-center">
                    <p class="text-2xl font-bold uppercase tracking-wider text-gray-500 sm:text-4xl">
                        No collections available.
                    </p>
                </div>

                @endforelse

            </div>
        </div>

    </section>
</x-layout>