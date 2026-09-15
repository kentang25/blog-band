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

                        <!-- Title -->
                        <div>
                            <h1 class="text-2xl sm:text-3xl font-bold text-gray-800">
                                Collections Dashboard
                            </h1>

                            <p class="text-sm text-gray-500 mt-1">
                                Manage your band merchandise collections.
                            </p>
                        </div>

                        <!-- Actions -->
                        <div class="flex flex-col sm:flex-row gap-3 w-full lg:w-auto">

                            <!-- Button -->
                            <button id="btn-open"
                                class="w-full sm:w-auto bg-blue-600 hover:bg-blue-700 text-white px-5 py-3 rounded-xl shadow-md transition duration-300">

                                <i class="fa-solid fa-plus mr-2"></i>
                                Tambah Data

                            </button>

                        </div>

                    </div>

                </div>

                <div class="p-6 text-gray-900">

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 p-4 sm:p-6 bg-gray-800 rounded-lg">
                        <div class="bg-gray-700 p-4 rounded-lg shadow-md">
                            <h3 class="text-lg font-semibold text-white mb-2">Total Blog</h3>
                            <p class="text-2xl font-bold text-white">10</p>
                        </div>
                        <div class="bg-gray-700 p-4 rounded-lg shadow-md">
                            <h3 class="text-lg font-semibold text-white mb-2">Katalog</h3>
                            <p class="text-2xl font-bold text-white">10</p>
                        </div>
                    </div>

                    <!-- {{ __("You're logged in!") }} -->
                    <!-- Add your dashboard content here -->
                    
                    <div class="w-full mt-10">
                        {{-- Wrapper agar tabel bisa di-scroll di mobile --}}
                        <div class="overflow-x-auto rounded-lg border border-gray-300 shadow-sm">
                            <table class="w-full min-w-[800px] border-collapse bg-white text-sm">

                                {{-- Header --}}
                                <thead class="bg-gray-100">
                                    <tr>
                                        <th
                                            class="border-b border-gray-300 px-4 py-3 text-left font-semibold text-gray-700">
                                            Title
                                        </th>

                                        <th
                                            class="border-b border-gray-300 px-4 py-3 text-left font-semibold text-gray-700">
                                            Slug
                                        </th>

                                        <th
                                            class="border-b border-gray-300 px-4 py-3 text-left font-semibold text-gray-700">
                                            Content
                                        </th>

                                        <th
                                            class="border-b border-gray-300 px-4 py-3 text-center font-semibold text-gray-700 w-40">
                                            Aksi
                                        </th>
                                    </tr>
                                </thead>

                                {{-- Body --}}
                                <tbody class="divide-y divide-gray-200">

                                    @forelse ($blogs as $blog)
                                    <tr class="hover:bg-gray-50 transition">

                                        {{-- Title --}}
                                        <td class="px-4 py-4 align-top">
                                            <div class="font-medium text-gray-900">
                                                {{ $blog->title }}
                                            </div>
                                        </td>

                                        {{-- Slug --}}
                                        <td class="px-4 py-4 align-top text-gray-600">
                                            <span class="whitespace-nowrap">
                                                {{ $blog->slug }}
                                            </span>
                                        </td>

                                        {{-- Content --}}
                                        <td class="px-4 py-4 align-top text-gray-600">
                                            <div class="max-w-md line-clamp-2">
                                                {{ $blog->content }}
                                            </div>
                                        </td>

                                        {{-- Action --}}
                                        <td class="px-4 py-4 align-top">
                                            <div class="flex flex-wrap justify-center gap-2">

                                                <a href="#" class="inline-flex items-center justify-center rounded-md
                                          bg-blue-600 px-3 py-2 text-xs font-semibold
                                          text-white transition hover:bg-blue-700">
                                                    Edit
                                                </a>

                                                <button type="button" class="inline-flex items-center justify-center rounded-md
                                               bg-red-600 px-3 py-2 text-xs font-semibold
                                               text-white transition hover:bg-red-700">
                                                    Delete
                                                </button>

                                            </div>
                                        </td>

                                    </tr>

                                    @empty
                                    <tr>
                                        <td colspan="4" class="px-4 py-10 text-center text-gray-500">
                                            Belum ada data blog.
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

    <div id="modal"
        class="hidden fixed inset-0 z-50 bg-black/60 backdrop-blur-sm items-center justify-center p-3 sm:p-4 overflow-y-auto">
        <div class="bg-white w-full max-w-2xl rounded-2xl sm:rounded-3xl shadow-2xl overflow-hidden max-h-[90vh]">
            <!-- Header -->
            <div class="bg-gray-900 text-white px-5 sm:px-8 py-4 sm:py-5 flex items-center justify-between">


                <div>

                    <h2 class="text-xl sm:text-2xl font-bold">
                        Tambah Collection
                    </h2>

                    <p class="text-sm text-gray-300 mt-1">
                        Upload your newest band merchandise collection.
                    </p>

                </div>

                <!-- Close -->
                <button id="btn-close"
                    class="w-10 h-10 rounded-full bg-white/10 hover:bg-white/20 transition flex items-center justify-center">

                    <i class="fa-solid fa-xmark"></i>

                </button>

            </div>

            <!-- Form -->
            <form method="POST" action="/admin/save" enctype="multipart/form-data" class="p-4 sm:p-8 space-y-6">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-6">

                    <!-- Nama Band -->
                    <div>
                        <label for="title" class="block text-sm text-gray-700 font-medium mb-1">Title</label>
                        <input type="text" name="title" id="title" placeholder="Title" required
                            class="w-full border text-black border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <div>
                        <label for="slug" class="block text-sm text-gray-700 font-medium mb-1">Slug</label>
                        <input type="text" name="slug" id="slug" placeholder="Slug" required
                            class="w-full border text-black border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <div>
                        <label for="content" class="block text-sm text-gray-700 font-medium mb-1">Content</label>
                        <textarea name="content" id="content" rows="4" placeholder="Content" required
                            class="w-full border text-black border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </textarea>
                    </div>

                    <div>
                        <label for="gambar" class="block text-sm text-gray-700 font-medium mb-1">Gambar</label>
                        <input type="file" name="gambar" id="gambar" placeholder="Gambar" required
                            class="w-full border text-black border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                </div>

                <!-- Buttons -->
                <div class="flex flex-col sm:flex-row justify-end gap-4 pt-4">

                    <!-- Cancel -->
                    <button type="button" id="btn-close-2"
                        class="w-full sm:w-auto px-6 py-3 text-black rounded-xl border border-gray-300 hover:bg-gray-100 transition">

                        Cancel

                    </button>

                    <!-- Submit -->
                    <button type="submit"
                        class="w-full sm:w-auto bg-green-500 hover:bg-green-600 text-white px-6 py-3 rounded-xl shadow-lg transition">

                        <i class="fa-solid fa-floppy-disk mr-2"></i>
                        Submit Collection

                    </button>

                </div>

            </form>

        </div>

    </div>

    <script>
    const modal = document.getElementById('modal');
    const btnOpen = document.getElementById('btn-open');
    const btnClose = document.getElementById('btn-close');
    const btnClose2 = document.getElementById('btn-close-2');

    btnOpen.addEventListener('click', () => {
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    });

    btnClose.addEventListener('click', () => {
        modal.classList.remove('flex');
        modal.classList.add('hidden');
    });

    btnClose2.addEventListener('click', () => {
        modal.classList.remove('flex');
        modal.classList.add('hidden');
    });
    </script>
</x-app-layout>