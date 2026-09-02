<x-layout>
    
<section class="min-h-screen bg-black px-4 py-16 text-gray-200 sm:px-6 lg:px-8">

    <div class="mx-auto max-w-6xl">

        {{-- ================= HEADER ================= --}}
        <div class="mb-12 border-b border-gray-800 pb-10">

            <p class="mb-3 text-xs font-semibold uppercase tracking-[0.4em] text-red-800">
                News & Stories
            </p>

            <h1 class="font-serif text-4xl font-bold uppercase tracking-wider text-white sm:text-5xl">
                From The Blog
            </h1>

            <div class="mt-5 h-px w-24 bg-red-900"></div>

            <p class="mt-5 max-w-2xl text-sm leading-7 text-gray-500 sm:text-base">
                Stories, news, releases, and everything surrounding our music.
            </p>

        </div>


        {{-- ================= BLOG LIST ================= --}}
        <div class="grid grid-cols-1 gap-x-10 gap-y-12 md:grid-cols-2 lg:grid-cols-3">

            @foreach ($blogs as $blog)

                <article
                    class="group flex flex-col border border-gray-800 bg-zinc-950 transition duration-300 hover:-translate-y-1 hover:border-red-900 hover:bg-zinc-900">

                    {{-- Image / Thumbnail --}}
                    <div class="relative aspect-video overflow-hidden bg-zinc-900">

                        @if ($blog->thumbnail)
                            <img
                                src="{{ asset('storage/' . $blog->thumbnail) }}"
                                alt="{{ $blog->title }}"
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
                                {{ $blog->created_at->format('d M Y') }}
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

                            <a
                                href="{{ route('blog.Blogdetail', $blog->slug) }}"
                                class="transition group-hover:text-red-700">

                                {{ $blog->title }}

                            </a>

                        </h2>


                        {{-- Content --}}
                        <p class="mt-4 line-clamp-3 text-sm leading-7 text-gray-500">
                            {{ $blog->content }}
                        </p>


                        {{-- Read More --}}
                        <div class="mt-auto pt-6">

                            <a
                                href="{{ route('blog.Blogdetail', $blog->slug) }}"
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


</x-layout>
