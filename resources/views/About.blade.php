<x-layout>

@foreach ($about as $abt)

    <section class="min-h-screen bg-black px-4 py-20 text-gray-200 sm:px-6 lg:px-8">

        <div class="mx-auto max-w-5xl">

            {{-- ================= ABOUT ================= --}}
            <div class="grid gap-12 border-b border-gray-800 pb-20 lg:grid-cols-2 lg:items-center">

                <div>
                    <p class="mb-4 text-xs font-semibold uppercase tracking-[0.4em] text-red-800">
                        About The Band
                    </p>

                    <h1 class="font-serif text-4xl font-bold uppercase tracking-wider text-white sm:text-5xl lg:text-6xl">
                        {{ $abt->title }}
                    </h1>

                    <div class="mt-6 h-px w-24 bg-red-900"></div>
                </div>

                <div>
                    <p class="text-base leading-8 text-gray-400 sm:text-lg">
                        {{ $abt->title }}
                    </p>
                </div>

            </div>


            {{-- ================= FORMATION ================= --}}
            <div class="grid gap-12 border-b border-gray-800 py-20 lg:grid-cols-3">

                <div>
                    <span class="text-sm font-bold text-red-900">
                        01
                    </span>

                    <h2 class="mt-3 font-serif text-3xl font-bold uppercase tracking-wide text-white sm:text-4xl">
                        {{ $abt->title2 }}
                    </h2>
                </div>

                <div class="lg:col-span-2">
                    <p class="text-base leading-8 text-gray-400 sm:text-lg">
                        {{ $abt->terbentuk }}
                    </p>
                </div>

            </div>


            {{-- ================= PERSONNEL ================= --}}
            <div class="grid gap-12 py-20 lg:grid-cols-3">

                <div>
                    <span class="text-sm font-bold text-red-900">
                        02
                    </span>

                    <h2 class="mt-3 font-serif text-3xl font-bold uppercase tracking-wide text-white sm:text-4xl">
                        Personnel
                    </h2>
                </div>

                <div class="lg:col-span-2">

                    <p class="whitespace-pre-line text-base leading-8 text-gray-400 sm:text-lg">
                        {{ $abt->personil }}
                    </p>

                </div>

            </div>


            {{-- ================= FOOTER QUOTE ================= --}}
            <div class="border-t border-gray-800 pt-16 text-center">

                <p class="font-serif text-lg italic tracking-wide text-gray-600 sm:text-xl">
                    "Darkness speaks through sound."
                </p>

            </div>

        </div>

    </section>

@endforeach


</x-layout>
