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
                    <table class="table border-collapse border border-gray-300 rounded-sm w-full mt-10">
                        <thead>
                            <tr>
                                <th class="border border-gray-300 px-4 py-2">Column 1</th>
                                <th class="border border-gray-300 px-4 py-2">Column 1</th>
                                <th class="border border-gray-300 px-4 py-2">Column 1</th>
                                <th class="border border-gray-300 px-4 py-2">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border border-gray-300 px-4 py-2">Data 1</td>
                                <td class="border border-gray-300 px-4 py-2">Data 2</td>
                                <td class="border border-gray-300 px-4 py-2">Data 3</td>
                                <td class="border border-gray-300 px-4 py-2">
                                    <button
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                        Edit
                                    </button>
                                    <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                        Delete
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-4 py-2">Data 4</td>
                                <td class="border border-gray-300 px-4 py-2">Data 5</td>
                                <td class="border border-gray-300 px-4 py-2">Data 6</td>
                                <td class="border border-gray-300 px-4 py-2">
                                    <button
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                        Edit
                                    </button>
                                    <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                        Delete
                                    </button>
                                </td>
                            </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>