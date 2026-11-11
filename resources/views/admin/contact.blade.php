
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-6 sm:py-10">
        <div class="max-w-7xl mx-auto px-3 sm:px-6 lg:px-8">

            <div class="bg-white shadow-sm rounded-xl overflow-hidden">

                <div class="border-b border-gray-200 p-4 sm:p-6">

                    <!-- HEADER -->
                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">

                        <div>
                            <h1 class="text-2xl font-bold text-gray-900">
                                Contact
                            </h1>

                            <p class="text-sm text-gray-500 mt-1">
                                Manage your contact information.
                            </p>
                        </div>

                        <a href="{{ route('contact.index') }}"
                            class="inline-flex items-center justify-center w-full sm:w-auto px-5 py-3 bg-blue-600 border border-transparent rounded-xl font-semibold text-sm text-white hover:bg-blue-700 transition">

                            <i class="fa-solid fa-arrow-left mr-2"></i>
                            Back to Contact List

                        </a>

                    </div>

                    <!-- DESKTOP TABLE -->
                    <div class="hidden md:block w-full mt-8">

                        <div class="overflow-x-auto rounded-lg border border-gray-200 shadow-sm">

                            <table class="w-full table-fixed border-collapse bg-white text-sm">

                                <thead class="bg-gray-50">
                                    <tr>

                                        <th class="w-[25%] px-4 py-3 text-left font-semibold text-gray-700">
                                            Email
                                        </th>

                                        <th class="w-[25%] px-4 py-3 text-left font-semibold text-gray-700">
                                            Instagram
                                        </th>

                                        <th class="w-[30%] px-4 py-3 text-left font-semibold text-gray-700">
                                            Bandcamp
                                        </th>

                                        <th class="w-[20%] px-4 py-3 text-center font-semibold text-gray-700">
                                            Aksi
                                        </th>

                                    </tr>
                                </thead>

                                <tbody class="divide-y divide-gray-200">

                                    @forelse ($contacts as $contact)

                                    <tr class="hover:bg-gray-50 transition">

                                        <!-- EMAIL -->
                                        <td class="px-4 py-4 align-top">
                                            <div class="font-medium text-gray-900 break-all">
                                                {{ $contact->email }}
                                            </div>
                                        </td>

                                        <!-- INSTAGRAM -->
                                        <td class="px-4 py-4 align-top text-gray-600">
                                            <div class="break-all leading-relaxed">
                                                {{ $contact->instagram }}
                                            </div>
                                        </td>

                                        <!-- BANDCAMP -->
                                        <td class="px-4 py-4 align-top text-gray-600">
                                            <div class="break-all leading-relaxed">
                                                {{ $contact->bandcamb }}
                                            </div>
                                        </td>

                                        <!-- ACTION -->
                                        <td class="px-4 py-4 align-top">

                                            <div class="flex flex-wrap items-center justify-center gap-2">

                                                <a href="/admin/contact/edit/{{ $contact->id_contact }}"
                                                    class="inline-flex items-center justify-center bg-blue-600 hover:bg-blue-700 text-white px-3 py-2 rounded-md text-xs font-semibold transition">
                                                    Edit
                                                </a>

                                                <form action="/admin/contact/delete/{{ $contact->id_contact }}"
                                                    method="POST"
                                                    onsubmit="return confirm('Yakin ingin menghapus data ini?')">

                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit"
                                                        class="inline-flex items-center justify-center bg-red-600 hover:bg-red-700 text-white px-3 py-2 rounded-md text-xs font-semibold transition">
                                                        Delete
                                                    </button>

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

                    <!-- MOBILE CARD -->
                    <div class="md:hidden mt-6 space-y-4">

                        @forelse ($contacts as $contact)

                        <div class="border border-gray-200 rounded-xl p-4 shadow-sm">

                            <!-- EMAIL -->
                            <div>
                                <p class="text-xs font-semibold uppercase text-gray-400 mb-1">
                                    Email
                                </p>

                                <p class="text-sm font-medium text-gray-900 break-all">
                                    {{ $contact->email }}
                                </p>
                            </div>

                            <!-- INSTAGRAM -->
                            <div class="mt-4">
                                <p class="text-xs font-semibold uppercase text-gray-400 mb-1">
                                    Instagram
                                </p>

                                <p class="text-sm text-gray-600 break-all">
                                    {{ $contact->instagram }}
                                </p>
                            </div>

                            <!-- BANDCAMP -->
                            <div class="mt-4">
                                <p class="text-xs font-semibold uppercase text-gray-400 mb-1">
                                    Bandcamp
                                </p>

                                <p class="text-sm text-gray-600 break-all">
                                    {{ $contact->bandcamb }}
                                </p>
                            </div>

                            <!-- ACTION -->
                            <div class="flex gap-2 mt-5 pt-4 border-t border-gray-100">

                                <a href="/admin/contact/edit/{{ $contact->id_contact }}"
                                    class="flex-1 text-center bg-blue-600 hover:bg-blue-700 text-white px-3 py-2 rounded-lg text-sm font-semibold transition">
                                    Edit
                                </a>

                                <form action="/admin/contact/delete/{{ $contact->id_contact }}"
                                    method="POST"
                                    class="flex-1"
                                    onsubmit="return confirm('Yakin ingin menghapus data ini?')">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                        class="w-full bg-red-600 hover:bg-red-700 text-white px-3 py-2 rounded-lg text-sm font-semibold transition">
                                        Delete
                                    </button>

                                </form>

                            </div>

                        </div>

                        @empty

                        <div class="text-center text-gray-500 py-10 border rounded-xl">
                            Belum ada data contact.
                        </div>

                        @endforelse

                    </div>

                </div>

            </div>

        </div>
    </div>

</x-app-layout>
