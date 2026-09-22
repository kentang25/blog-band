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
                            <h1 class="text-2xl font-bold text-gray-900">Contact</h1>
                            <p class="text-sm text-gray-500">Manage your contact information.</p>
                        </div>

                        <a href="{{ route('contact.index') }}" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-500 focus:outline-none focus:border-blue-700 focus:ring focus:ring-blue-200 active:bg-blue-600 disabled:opacity-25 transition">Back to Contact List</a>
                    </div>
                    
                    <div class="w-full mt-10">
                        {{-- Wrapper agar tabel bisa di-scroll di mobile --}}
                        <div class="overflow-x-auto rounded-lg border border-gray-300 shadow-sm">
                            <table class="w-full min-w-[800px] border-collapse bg-white text-sm">

                                {{-- Header --}}
                                <thead class="bg-gray-100">
                                    <tr>
                                        <th
                                            class="border-b border-gray-300 px-4 py-3 text-left font-semibold text-gray-700">
                                            Email
                                        </th>

                                        <th
                                            class="border-b border-gray-300 px-4 py-3 text-left font-semibold text-gray-700">
                                            Instagram
                                        </th>

                                        <th
                                            class="border-b border-gray-300 px-4 py-3 text-left font-semibold text-gray-700">
                                            Bandcamp
                                        </th>

                                        <th
                                            class="border-b border-gray-300 px-4 py-3 text-center font-semibold text-gray-700 w-40">
                                            Aksi
                                        </th>
                                    </tr>
                                </thead>

                                {{-- Body --}}
                                <tbody class="divide-y divide-gray-200">

                                    @forelse ($contacts as $contact)
                                    <tr class="hover:bg-gray-50 transition">

                                        {{-- Title --}}
                                        <td class="px-4 py-4 align-top">
                                            <div class="font-medium text-gray-900">
                                                {{ $contact->email }}
                                            </div>
                                        </td>

                                        {{-- Slug --}}
                                        <td class="px-4 py-4 align-top text-gray-600">
                                            <span class="whitespace-nowrap">
                                                {{ $contact->instagram }}
                                            </span>
                                        </td>

                                        {{-- Content --}}
                                        <td class="px-4 py-4 align-top text-gray-600">
                                            <div class="max-w-md line-clamp-2">
                                                {{ $contact->bandcamb }}
                                            </div>
                                        </td>

                                        {{-- Action --}}
                                        <td class="px-4 py-4 align-top">
                                            <div class="flex flex-wrap justify-center gap-2">

                                                <a href="/admin/contact/edit/{{ $contact->id_contact }}" class="inline-flex items-center justify-center rounded-md
                                                bg-blue-600 px-3 py-2 text-xs font-semibold
                                                text-white transition hover:bg-blue-700">
                                                    Edit
                                                </a>

                                                <form action="/admin/contact/delete/{{ $contact->id_contact }}" method="POST"
                                                    onsubmit="return confirm('Yakin ingin menghapus data ini?')"> @csrf
                                                    @method('DELETE') <button type="submit"
                                                        class="inline-flex items-center justify-center rounded-md bg-red-600 px-3 py-2 text-xs font-semibold text-white transition hover:bg-red-700">
                                                        Delete </button>
                                                </form>

                                            </div>
                                        </td>

                                    </tr>

                                    @empty
                                    <tr>
                                        <td colspan="4" class="px-4 py-10 text-center text-gray-500">
                                            Belum ada data contact.
                                        </td>
                                    </tr>
                                    @endforelse

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>