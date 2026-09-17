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
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>