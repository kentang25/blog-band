
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-6 sm:py-10">
        <div class="max-w-7xl mx-auto px-3 sm:px-6 lg:px-8">

            <div class="bg-white shadow-sm rounded-xl overflow-hidden">

                <!-- HEADER -->
                <div class="border-b border-gray-200 p-4 sm:p-6">

                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">

                        <div>
                            <h1 class="text-2xl sm:text-3xl font-bold text-gray-800">
                                Collections Dashboard
                            </h1>

                            <p class="text-sm text-gray-500 mt-1">
                                Manage your band merchandise collections.
                            </p>
                        </div>

                        <button id="btn-open"
                            type="button"
                            class="w-full sm:w-auto bg-blue-600 hover:bg-blue-700 text-white px-5 py-3 rounded-xl shadow-md transition">

                            <i class="fa-solid fa-plus mr-2"></i>
                            Tambah Data

                        </button>

                    </div>

                </div>

                <!-- TABLE CONTENT -->
                <div class="p-4 sm:p-6 text-gray-900">

                    <!-- DESKTOP TABLE -->
                    <div class="hidden md:block w-full">

                        <div class="overflow-x-auto rounded-lg border border-gray-200 shadow-sm">

                            <table class="w-full table-fixed border-collapse bg-white text-sm">

                                <thead class="bg-gray-50">
                                    <tr>
                                        <th class="w-[20%] px-4 py-3 text-left font-semibold text-gray-700">
                                            Title
                                        </th>

                                        <th class="w-[25%] px-4 py-3 text-left font-semibold text-gray-700">
                                            Slug
                                        </th>

                                        <th class="w-[35%] px-4 py-3 text-left font-semibold text-gray-700">
                                            Content
                                        </th>

                                        <th class="w-[20%] px-4 py-3 text-center font-semibold text-gray-700">
                                            Aksi
                                        </th>
                                    </tr>
                                </thead>

                                <tbody class="divide-y divide-gray-200">

                                    @forelse ($blogs as $blog)

                                    <tr class="hover:bg-gray-50 transition">

                                        <!-- TITLE -->
                                        <td class="px-4 py-4 align-top">
                                            <div class="font-medium text-gray-900 break-words">
                                                {{ $blog->title }}
                                            </div>
                                        </td>

                                        <!-- SLUG -->
                                        <td class="px-4 py-4 align-top text-gray-600">
                                            <div class="max-w-full break-all leading-relaxed">
                                                {{ $blog->slug }}
                                            </div>
                                        </td>

                                        <!-- CONTENT -->
                                        <td class="px-4 py-4 align-top text-gray-600">
                                            <div class="max-w-full max-h-24 overflow-y-auto break-words whitespace-pre-line leading-relaxed">
                                                {{ $blog->content }}
                                            </div>
                                        </td>

                                        <!-- ACTION -->
                                        <td class="px-4 py-4 align-top">

                                            <div class="flex flex-wrap justify-center gap-2">

                                                <a href="/admin/blog/edit/{{ $blog->id_blog }}"
                                                    class="inline-flex items-center justify-center bg-blue-600 hover:bg-blue-700 text-white px-3 py-2 rounded-md text-xs font-semibold transition">
                                                    Edit
                                                </a>

                                                <form action="/admin/blog/delete/{{ $blog->id_blog }}"
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
                                            Belum ada data blog.
                                        </td>
                                    </tr>

                                    @endforelse

                                </tbody>

                            </table>

                        </div>

                    </div>

                    <!-- MOBILE CARD -->
                    <div class="md:hidden space-y-4">

                        @forelse ($blogs as $blog)

                        <div class="border border-gray-200 rounded-xl p-4 shadow-sm">

                            <!-- TITLE -->
                            <div>
                                <p class="text-xs font-semibold uppercase text-gray-400 mb-1">
                                    Title
                                </p>

                                <h3 class="font-bold text-gray-900 text-lg break-words">
                                    {{ $blog->title }}
                                </h3>
                            </div>

                            <!-- SLUG -->
                            <div class="mt-4">
                                <p class="text-xs font-semibold uppercase text-gray-400 mb-1">
                                    Slug
                                </p>

                                <p class="text-sm text-gray-600 break-all">
                                    {{ $blog->slug }}
                                </p>
                            </div>

                            <!-- CONTENT -->
                            <div class="mt-4">
                                <p class="text-xs font-semibold uppercase text-gray-400 mb-1">
                                    Content
                                </p>

                                <div class="max-h-32 overflow-y-auto text-sm text-gray-600 break-words whitespace-pre-line leading-relaxed">
                                    {{ $blog->content }}
                                </div>
                            </div>

                            <!-- ACTION -->
                            <div class="flex gap-2 mt-5 pt-4 border-t border-gray-100">

                                <a href="/admin/blog/edit/{{ $blog->id_blog }}"
                                    class="flex-1 text-center bg-blue-600 hover:bg-blue-700 text-white px-3 py-2 rounded-lg text-sm font-semibold transition">
                                    Edit
                                </a>

                                <form action="/admin/blog/delete/{{ $blog->id_blog }}"
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
                            Belum ada data blog.
                        </div>

                        @endforelse

                    </div>

                </div>

            </div>

        </div>
    </div>

    <!-- MODAL -->
    <div id="modal"
        class="hidden fixed inset-0 z-50 bg-black/60 backdrop-blur-sm items-center justify-center p-3 sm:p-5">

        <div class="bg-white w-full max-w-2xl rounded-2xl shadow-2xl overflow-hidden max-h-[90vh] flex flex-col">

            <!-- MODAL HEADER -->
            <div class="bg-gray-900 text-white px-5 sm:px-8 py-4 sm:py-5 flex items-center justify-between shrink-0">

                <div>
                    <h2 class="text-xl sm:text-2xl font-bold">
                        Tambah Blog
                    </h2>

                    <p class="text-xs sm:text-sm text-gray-300 mt-1">
                        Add your newest blog content.
                    </p>
                </div>

                <button type="button"
                    id="btn-close"
                    class="w-10 h-10 rounded-full bg-white/10 hover:bg-white/20 transition flex items-center justify-center">

                    <i class="fa-solid fa-xmark"></i>

                </button>

            </div>

            <!-- MODAL FORM -->
            <form method="POST"
                action="/admin/blog/save"
                enctype="multipart/form-data"
                class="p-4 sm:p-8 space-y-5 overflow-y-auto">

                @csrf

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6">

                    <!-- TITLE -->
                    <div>
                        <label for="title" class="block text-sm text-gray-700 font-medium mb-1">
                            Title
                        </label>

                        <input type="text"
                            name="title"
                            id="title"
                            placeholder="Title"
                            required
                            class="w-full min-w-0 border text-black border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <!-- SLUG -->
                    <div>
                        <label for="slug" class="block text-sm text-gray-700 font-medium mb-1">
                            Slug
                        </label>

                        <input type="text"
                            name="slug"
                            id="slug"
                            placeholder="Slug"
                            required
                            class="w-full min-w-0 border text-black border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <!-- CONTENT -->
                    <div class="sm:col-span-2">
                        <label for="content" class="block text-sm text-gray-700 font-medium mb-1">
                            Content
                        </label>

                        <textarea name="content"
                            id="content"
                            rows="5"
                            placeholder="Write your blog content..."
                            required
                            class="w-full min-w-0 border text-black border-gray-300 rounded-lg px-3 py-2 resize-y focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                    </div>

                    <!-- GAMBAR -->
                    <div class="sm:col-span-2">
                        <label for="gambar" class="block text-sm text-gray-700 font-medium mb-1">
                            Gambar
                        </label>

                        <input type="file"
                            name="gambar"
                            id="gambar"
                            accept="image/*"
                            required
                            class="w-full min-w-0 border text-black border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                </div>

                <!-- BUTTONS -->
                <div class="flex flex-col-reverse sm:flex-row justify-end gap-3 pt-4 border-t">

                    <button type="button"
                        id="btn-close-2"
                        class="w-full sm:w-auto px-6 py-3 text-gray-700 rounded-xl border border-gray-300 hover:bg-gray-100 transition">
                        Cancel
                    </button>

                    <button type="submit"
                        class="w-full sm:w-auto bg-green-500 hover:bg-green-600 text-white px-6 py-3 rounded-xl shadow-lg transition">

                        <i class="fa-solid fa-floppy-disk mr-2"></i>
                        Submit Blog

                    </button>

                </div>

            </form>

        </div>

    </div>

    <!-- JAVASCRIPT -->
    <script>
        const modal = document.getElementById('modal');

        const btnOpen = document.getElementById('btn-open');
        const btnClose = document.getElementById('btn-close');
        const btnClose2 = document.getElementById('btn-close-2');

        function openModal() {
            modal.classList.remove('hidden');
            modal.classList.add('flex');
            document.body.classList.add('overflow-hidden');
        }

        function closeModal() {
            modal.classList.remove('flex');
            modal.classList.add('hidden');
            document.body.classList.remove('overflow-hidden');
        }

        btnOpen.addEventListener('click', openModal);
        btnClose.addEventListener('click', closeModal);
        btnClose2.addEventListener('click', closeModal);

        // Klik area luar modal
        modal.addEventListener('click', function(e) {
            if (e.target === modal) {
                closeModal();
            }
        });

        // Tombol Escape
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && !modal.classList.contains('hidden')) {
                closeModal();
            }
        });
    </script>

</x-app-layout>
