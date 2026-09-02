<x-layout>
    <section class="min-h-screen bg-black px-4 py-16 text-gray-200 sm:px-6 lg:px-8">

```
    <div class="mx-auto max-w-5xl">

        {{-- Header --}}
        <div class="mb-12 text-center">
            <p class="mb-3 text-xs font-semibold uppercase tracking-[0.4em] text-red-700">
                Connect With Us
            </p>

            <h1 class="font-serif text-4xl font-bold uppercase tracking-wider text-white sm:text-5xl">
                Contact
            </h1>

            <div class="mx-auto mt-5 h-px w-24 bg-red-800"></div>

            <p class="mx-auto mt-5 max-w-xl text-sm leading-relaxed text-gray-500 sm:text-base">
                Follow our journey, music, and latest updates through the platforms below.
            </p>
        </div>


        @foreach ($contact as $con)

            <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-3">

                {{-- Email --}}
                <a href="mailto:{{ $con->email }}"
                    class="group border border-gray-800 bg-zinc-950 p-6 transition duration-300 hover:-translate-y-1 hover:border-red-900 hover:bg-zinc-900">

                    <div class="mb-5 flex h-12 w-12 items-center justify-center border border-gray-800 bg-black text-gray-400 transition group-hover:border-red-900 group-hover:text-red-700">

                        <svg xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="h-6 w-6">

                            <path stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25H4.5a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 6.507l-7.5 4.615a2.25 2.25 0 0 1-2.36 0l-7.5-4.615A2.25 2.25 0 0 1 2.25 6.75" />

                        </svg>
                    </div>

                    <h2 class="text-lg font-semibold uppercase tracking-wider text-white">
                        Email
                    </h2>

                    <p class="mt-3 break-words text-sm text-gray-500 transition group-hover:text-gray-300">
                        {{ $con->email }}
                    </p>

                    <p class="mt-5 text-xs uppercase tracking-widest text-red-800">
                        Contact →
                    </p>
                </a>


                {{-- Instagram --}}
                <a href="{{ $con->instagram }}"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="group border border-gray-800 bg-zinc-950 p-6 transition duration-300 hover:-translate-y-1 hover:border-red-900 hover:bg-zinc-900">

                    <div class="mb-5 flex h-12 w-12 items-center justify-center border border-gray-800 bg-black text-gray-400 transition group-hover:border-red-900 group-hover:text-red-700">

                        <svg xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="h-6 w-6">

                            <rect width="18"
                                height="18"
                                x="3"
                                y="3"
                                rx="5"
                                ry="5" />

                            <circle cx="12"
                                cy="12"
                                r="4" />

                            <path stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M17.5 6.5h.01" />

                        </svg>

                    </div>

                    <h2 class="text-lg font-semibold uppercase tracking-wider text-white">
                        Instagram
                    </h2>

                    <p class="mt-3 break-words text-sm text-gray-500 transition group-hover:text-gray-300">
                        {{ $con->instagram }}
                    </p>

                    <p class="mt-5 text-xs uppercase tracking-widest text-red-800">
                        Follow →
                    </p>
                </a>


                {{-- Bandcamp --}}
                <a href="{{ $con->bandcamb }}"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="group border border-gray-800 bg-zinc-950 p-6 transition duration-300 hover:-translate-y-1 hover:border-red-900 hover:bg-zinc-900">

                    <div class="mb-5 flex h-12 w-12 items-center justify-center border border-gray-800 bg-black text-gray-400 transition group-hover:border-red-900 group-hover:text-red-700">

                        <span class="text-xl font-bold">
                            B
                        </span>

                    </div>

                    <h2 class="text-lg font-semibold uppercase tracking-wider text-white">
                        Bandcamp
                    </h2>

                    <p class="mt-3 break-words text-sm text-gray-500 transition group-hover:text-gray-300">
                        {{ $con->bandcamb }}
                    </p>

                    <p class="mt-5 text-xs uppercase tracking-widest text-red-800">
                        Listen →
                    </p>
                </a>

            </div>

        @endforeach

    </div>

</section>

</x-layout>
