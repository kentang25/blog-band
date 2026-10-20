
<x-layout>
    <div class="min-h-screen bg-gray-950 text-gray-200">

        {{-- Header Artikel --}}
        <section class="px-4 pb-10 pt-24 sm:px-6 sm:pb-14 sm:pt-28 lg:px-8">
            <div class="mx-auto max-w-4xl">

                {{-- Breadcrumb --}}
                <nav class="mb-8 text-sm text-gray-400">
                    <a href="/blog" class="transition hover:text-white">
                        Blog
                    </a>
                    <span class="mx-2 text-gray-600">/</span>
                    <span class="text-gray-300">Artikel</span>
                </nav>

                {{-- Judul --}}
                <header>
                    <p class="mb-4 text-xs font-bold uppercase tracking-[0.25em] text-red-500 sm:text-sm">
                        Blog &mdash; Black Metal Journal
                    </p>

                    <h1 class="text-3xl font-extrabold leading-tight tracking-tight text-white sm:text-4xl md:text-5xl lg:text-6xl">
                        {{ $detail->title }}
                    </h1>

                    {{-- Metadata --}}
                    <div class="mt-6 flex flex-wrap items-center gap-x-4 gap-y-2 text-sm text-gray-400">
                        <span class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                width="16" height="16" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor"
                                stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round">
                                <rect x="3" y="5" width="18" height="16" rx="2"/>
                                <path d="M16 3v4M8 3v4M3 11h18"/>
                            </svg>
                            {{ $detail->created_at?->format('d M Y') ?? 'Tanggal tidak tersedia' }}
                        </span>

                        <span class="hidden text-gray-700 sm:inline">|</span>

                        <span>Artikel</span>
                    </div>
                </header>

            </div>
        </section>

        {{-- Gambar Utama --}}
        <section class="px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-5xl">
                @if ($detail->gambar && file_exists(public_path('gambar/' . $detail->gambar)))
                    <figure class="overflow-hidden rounded-lg border border-gray-800 bg-gray-900">
                        <img
                            src="{{ asset('gambar/' . $detail->gambar) }}"
                            alt="{{ $detail->title }}"
                            class="max-h-[600px] w-full object-cover object-center"
                        >
                    </figure>
                @endif
            </div>
        </section>

        {{-- Isi Artikel --}}
        <section class="px-4 py-10 sm:px-6 sm:py-14 lg:px-8">
            <article class="mx-auto max-w-3xl">

                {{-- Garis pembatas --}}
                <div class="mb-8 border-t border-gray-800"></div>

                {{-- Konten --}}
                <div class="whitespace-pre-line break-words text-base leading-8 text-gray-300 sm:text-lg sm:leading-9">
                    {{ $detail->content }}
                </div>

                {{-- Footer Artikel --}}
                <div class="mt-14 border-t border-gray-800 pt-8 sm:mt-20">
                    <div class="flex flex-col gap-6 sm:flex-row sm:items-center sm:justify-between">

                        <div>
                            <p class="text-sm font-bold uppercase tracking-widest text-white">
                                End of Article
                            </p>
                            <p class="mt-2 text-sm text-gray-500">
                                Terima kasih sudah membaca.
                            </p>
                        </div>

                        <a
                            href="/blog"
                            class="inline-flex w-fit items-center gap-2 rounded-md border border-gray-700 px-5 py-3 text-sm font-semibold text-white transition duration-300 hover:border-red-600 hover:bg-red-600"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg"
                                width="18" height="18" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="m12 19-7-7 7-7"/>
                                <path d="M19 12H5"/>
                            </svg>
                            Kembali ke Blog
                        </a>

                    </div>
                </div>

            </article>
        </section>

    </div>
</x-layout>
