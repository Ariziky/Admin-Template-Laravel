<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('app.dashboard') }}
        </h2>
    </x-slot>

    <div class="py-6 lg:py-12">
        <div class="max-w-7xl mx-auto lg:px-2">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div>
</x-app-layout>
