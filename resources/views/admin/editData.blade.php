<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div class="py-6 sm:py-10 lg:py-12">
        <div class="mx-auto max-w-5xl px-4 sm:px-6 lg:px-8">

            <!-- Card -->
            <div class="overflow-hidden rounded-lg bg-white shadow-sm">

                <!-- Header -->
                <div class="border-b border-gray-200 px-5 py-5 sm:px-8">
                    <h2 class="text-xl font-bold text-gray-900 sm:text-2xl">
                        Edit Blog
                    </h2>

                    <p class="mt-1 text-sm text-gray-500">
                        Update informasi artikel blog kamu.
                    </p>
                </div>

                <!-- Form -->
                <div class="px-5 py-6 sm:px-8 sm:py-8">

                    <form action="/admin/update/{{ $blog->id_blog }}" method="POST" enctype="multipart/form-data"
                        class="space-y-6">

                        @csrf
                        @method('PUT')

                        <!-- Title -->
                        <div>
                            <label for="title" class="mb-2 block text-sm font-semibold text-gray-700">
                                Title
                            </label>

                            <input type="text" name="title" id="title" value="{{ $blog->title }}"
                                placeholder="Masukkan judul blog"
                                class="block w-full rounded-md border border-gray-300 px-3 py-2.5 text-sm text-gray-900 shadow-sm outline-none transition focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20">

                            @error('title')
                            <p class="mt-1 text-sm text-red-600">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                        <!-- Slug -->
                        <div>
                            <label for="slug" class="mb-2 block text-sm font-semibold text-gray-700">
                                Slug
                            </label>

                            <input type="text" name="slug" id="slug" value="{{ $blog->slug }}"
                                placeholder="contoh-judul-blog"
                                class="block w-full rounded-md border border-gray-300 px-3 py-2.5 text-sm text-gray-900 shadow-sm outline-none transition focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20">

                            @error('slug')
                            <p class="mt-1 text-sm text-red-600">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                        <!-- Content -->
                        <div>
                            <label for="content" class="mb-2 block text-sm font-semibold text-gray-700">
                                Content
                            </label>

                            <textarea name="content" id="content" rows="8" placeholder="Tulis isi blog..."
                                class="block w-full resize-y rounded-md border border-gray-300 px-3 py-2.5 text-sm text-gray-900 shadow-sm outline-none transition focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20">{{ $blog->content }}</textarea>

                            @error('content')
                            <p class="mt-1 text-sm text-red-600">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                        <!-- Image -->
                        <div>
                            <label for="gambar" class="mb-2 block text-sm font-semibold text-gray-700">
                                Gambar
                            </label>

                            <input type="file" name="gambar" id="gambar" accept="image/jpeg,image/png,image/jpg"
                                class="block w-full cursor-pointer rounded-md border border-gray-300 bg-gray-50 text-sm text-gray-700 file:mr-4 file:border-0 file:bg-gray-100 file:px-4 file:py-2.5 file:text-sm file:font-semibold file:text-gray-700 hover:file:bg-gray-200">

                            <p class="mt-1 text-xs text-gray-500">
                                Kosongkan jika tidak ingin mengganti gambar.
                            </p>

                            @error('gambar')
                            <p class="mt-1 text-sm text-red-600">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                        <!-- Button -->
                        <div
                            class="flex flex-col-reverse gap-3 border-t border-gray-200 pt-6 sm:flex-row sm:justify-end">

                            <a href="/dashboard"
                                class="inline-flex w-full items-center justify-center rounded-md border border-gray-300 px-4 py-2.5 text-sm font-semibold text-gray-700 transition hover:bg-gray-50 sm:w-auto">
                                Cancel
                            </a>

                            <button type="submit"
                                class="inline-flex w-full items-center justify-center rounded-md bg-blue-600 px-5 py-2.5 text-sm font-semibold text-white shadow-sm transition hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 sm:w-auto">
                                Update Blog
                            </button>

                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>


</x-app-layout>