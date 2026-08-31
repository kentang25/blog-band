<x-layout>
    @foreach ($about as $abt )
        <div class="bg-white py-24 sm:py-32">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto max-w-2xl lg:mx-0">
                    <h2 class="text-4xl font-semibold  tracking-tight text-pretty text-black sm:text-5xl">{{ $abt->title }}</h2>
                    <p class="mt-2 text-lg/8 text-gray-500">{{ $abt->title }}</p>
                </div>
            </div>
        </div>
        <div class="bg-gray-900 py-24 sm:py-32">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto max-w-2xl lg:mx-0">
                    <h2 class="text-4xl font-semibold tracking-tight text-pretty text-white sm:text-5xl">{{ $abt->title2 }}</h2>
                    <p class="mt-2 text-lg/8 text-gray-300">{{ $abt->terbentuk }}</p>
                </div>
            </div>
        </div>
        <div class="bg-gray-900 py-24 sm:py-32">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto max-w-2xl lg:mx-0">
                    <h2 class="text-4xl font-semibold tracking-tight text-pretty text-white sm:text-5xl">{{ $abt->title2 }}</h2>
                    <p class="mt-2 text-lg/8 text-gray-300">{{ $abt->personil }}</p>
                </div>
            </div>
        </div>
        @endforeach
</x-layout>