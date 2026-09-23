<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="border-b border-gray-200 px-4 sm:px-6 py-4 sm:py-5">

                    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                        <div class="flex flex-col gap-2">
                            <h1 class="text-2xl font-bold text-gray-900">
                                About
                            </h1>

                            <p class="text-sm text-gray-500">
                                Manage your About information.
                            </p>
                        </div>

                        <a href="{{ route('about.index') }}"
                            class="inline-flex items-center justify-center px-4 py-2
                            bg-blue-600 border border-transparent rounded-md
                            font-semibold text-xs text-white uppercase tracking-widest
                            hover:bg-blue-500 focus:outline-none focus:border-blue-700
                            focus:ring focus:ring-blue-200 active:bg-blue-600
                            disabled:opacity-25 transition">
                            Back to About List
                        </a>
                    </div>

                    {{-- TABLE --}}
                    <div class="w-full mt-10">

                        {{-- Responsive table wrapper --}}
                        <div class="overflow-x-auto rounded-lg border border-gray-200 shadow-sm">

                            <table class="w-full table-fixed border-collapse bg-white text-sm">

                                {{-- Table Header --}}
                                <thead class="bg-gray-50">
                                    <tr>

                                        <th class="border-b border-gray-200 px-4 py-3
                                            text-left font-semibold text-gray-700 whitespace-nowrap">
                                            Title
                                        </th>

                                        <th class="border-b border-gray-200 px-4 py-3
                                            text-left font-semibold text-gray-700 whitespace-nowrap">
                                            Terbentuk
                                        </th>

                                        <th class="border-b border-gray-200 px-4 py-3
                                            text-left font-semibold text-gray-700">
                                            Personil
                                        </th>

                                        <th class="border-b border-gray-200 px-4 py-3
                                            text-center font-semibold text-gray-700
                                            whitespace-nowrap w-40">
                                            Aksi
                                        </th>

                                    </tr>
                                </thead>

                                {{-- Table Body --}}
                                <tbody class="divide-y divide-gray-200">

                                    @forelse ($abouts as $about)

                                        <tr class="hover:bg-gray-50 transition">

                                            {{-- Title --}}
                                            <td class="px-4 py-4 align-top">
                                                <div class="font-medium text-gray-900 max-w-xs break-words">
                                                    {{ $about->title }}
                                                </div>
                                            </td>

                                            {{-- Terbentuk --}}
                                            <td class="px-4 py-4 align-top text-gray-600">
                                                <div class="max-w-lg break-words leading-relaxed">
                                                    {{ $about->terbentuk }}
                                                </div>
                                            </td>

                                            {{-- Personil --}}
                                            <td class="px-4 py-4 align-top text-gray-600">
                                                <div class="max-w-lg break-words leading-relaxed">
                                                    {{ $about->personil }}
                                                </div>
                                            </td>

                                            {{-- Action --}}
                                            <td class="px-4 py-4 align-top">
                                                <div class="flex items-center justify-center gap-2">

                                                    {{-- Edit --}}
                                                    <a href="/admin/about/edit/{{ $about->id_about }}"
                                                        class="inline-flex items-center justify-center
                                                        rounded-md bg-blue-600 px-3 py-2
                                                        text-xs font-semibold text-white
                                                        whitespace-nowrap transition
                                                        hover:bg-blue-700
                                                        focus:outline-none focus:ring-2
                                                        focus:ring-blue-500 focus:ring-offset-1">
                                                        Edit
                                                    </a>

                                                    {{-- Delete --}}
                                                    <form
                                                        action="/admin/about/delete/{{ $about->id_about }}"
                                                        method="POST"
                                                        onsubmit="return confirm('Yakin ingin menghapus data ini?')">

                                                        @csrf
                                                        @method('DELETE')

                                                        <button type="submit"
                                                            class="inline-flex items-center justify-center
                                                            rounded-md bg-red-600 px-3 py-2
                                                            text-xs font-semibold text-white
                                                            whitespace-nowrap transition
                                                            hover:bg-red-700
                                                            focus:outline-none focus:ring-2
                                                            focus:ring-red-500 focus:ring-offset-1">
                                                            Delete
                                                        </button>

                                                    </form>

                                                </div>
                                            </td>

                                        </tr>

                                    @empty

                                        <tr>
                                            <td colspan="4"
                                                class="px-4 py-10 text-center text-gray-500">
                                                Belum ada data about.
                                            </td>
                                        </tr>

                                    @endforelse

                                </tbody>

                            </table>

                        </div>

                        {{-- Optional scroll indicator on mobile --}}
                        <p class="mt-2 text-xs text-gray-400 sm:hidden">
                            ← Geser tabel ke kanan untuk melihat kolom lainnya →
                        </p>

                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

