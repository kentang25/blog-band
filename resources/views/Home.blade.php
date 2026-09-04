<x-layout>
    <img src="/img/modelGambar.JPG" alt="Model Gambar" class="mx-auto w-full h-150 object-cover">
    <section class="min-h-screen bg-black px-4 py-16 text-gray-200 sm:px-6 lg:px-8">

        <div class="mx-auto max-w-6xl">
            <div class="flex items-center justify-between border-b border-gray-800 pb-10">
                <h1 class="text-semibold text-4xl font-serif">Latest News</h1>
            </div>
            <div class="grid grid-cols-1 gap-x-10 gap-y-12 md:grid-cols-2 lg:grid-cols-3">
                @foreach($home as $hm)
                <article
                    class="group flex flex-col border border-gray-800 bg-zinc-950 transition duration-300 hover:-translate-y-1 hover:border-red-900 hover:bg-zinc-900">

                    {{-- Image / Thumbnail --}}
                    <div class="relative aspect-video overflow-hidden bg-zinc-900">

                        @if ($hm->thumbnail)
                        <img src="{{ asset('storage/' . $hm->thumbnail) }}" alt="{{ $hm->title }}"
                            class="h-full w-full object-cover grayscale transition duration-500 group-hover:scale-105 group-hover:grayscale-0">
                        @else
                        <div class="flex h-full items-center justify-center">
                            <span class="font-serif text-4xl font-bold text-gray-800">
                                BM
                            </span>
                        </div>
                        @endif

                        {{-- Dark overlay --}}
                        <div class="absolute inset-0 bg-black/30 transition group-hover:bg-black/10"></div>

                    </div>


                    {{-- Content --}}
                    <div class="flex flex-1 flex-col p-6">

                        {{-- Date --}}
                        <div class="flex items-center gap-3 text-xs uppercase tracking-wider">

                            <time class="text-gray-600">
                                {{ $hm->created_at->format('d M Y') }}
                            </time>

                            <span class="text-red-900">
                                /
                            </span>

                            <span class="text-gray-600">
                                News
                            </span>

                        </div>


                        {{-- Title --}}
                        <h2 class="mt-4 font-serif text-xl font-bold uppercase leading-7 text-white">

                            <a href="{{ route('blog.Blogdetail', $hm->slug) }}"
                                class="transition group-hover:text-red-700">

                                {{ $hm->title }}

                            </a>

                        </h2>


                        {{-- Content --}}
                        <p class="mt-4 line-clamp-3 text-sm leading-7 text-gray-500">
                            {{ $hm->content }}
                        </p>


                        {{-- Read More --}}
                        <div class="mt-auto pt-6">

                            <a href="{{ route('blog.Blogdetail', $hm->slug) }}"
                                class="inline-flex items-center gap-2 text-xs font-semibold uppercase tracking-[0.2em] text-gray-400 transition hover:text-red-700">

                                Read More

                                <span class="transition group-hover:translate-x-1">
                                    →
                                </span>

                            </a>

                        </div>

                    </div>

                </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="bg-black py-16 sm:py-20 lg:py-24">

    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        {{-- Header --}}
        <div class="mb-10 text-center sm:mb-14">

            <h2 class="text-3xl font-black uppercase tracking-wider text-white sm:text-4xl lg:text-5xl">
                Collections
            </h2>

            <div class="mx-auto mt-5 h-px w-20 bg-red-600"></div>

            <p class="mx-auto mt-5 max-w-2xl text-sm leading-7 text-gray-500 sm:text-base">
                Explore our latest collections and merchandise from Gecshlocs
            </p>

        </div>


        {{-- Grid --}}
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">

            @forelse($katalog as $ktg)

                <article
                    class="group flex h-full flex-col overflow-hidden rounded-2xl border border-gray-800 bg-gradient-to-b from-gray-900 to-black shadow-xl transition-all duration-300 hover:-translate-y-1 hover:border-red-900"
                >

                    {{-- Image --}}
                    <div class="relative aspect-[4/5] overflow-hidden bg-gray-950">

                        <img
                            src="{{ asset('img_upload/' . $ktg['gambar']) }}"
                            alt="{{ $ktg['title'] }}"
                            class="h-full w-full object-cover transition duration-700 group-hover:scale-105"
                        >

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

                            <a
                                href="https://www.instagram.com/higgle_session/"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="mt-5 flex w-full items-center justify-center rounded-xl border border-gray-700 bg-white px-4 py-3 text-xs font-bold uppercase tracking-wider text-black transition duration-300 hover:border-red-600 hover:bg-red-600 hover:text-white"
                            >
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