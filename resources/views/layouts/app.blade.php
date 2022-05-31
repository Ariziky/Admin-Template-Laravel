<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>

        @stack('modals')

        @livewireScripts
    </head>
    <body class="font-sans antialiased">
        <div x-data="{ sidebarOpen: false }" class="flex h-screen bg-gray-200 font-roboto">
            <x-partials.sidebar-menu />

            <div class="flex overflow-hidden flex-col flex-1">
                <x-partials.heading />

                <main class="overflow-y-auto overflow-x-hidden flex-1 bg-gray-200">
                    <div class="container px-1 sm:px-2 lg:px-6 py-5 mx-auto">
                        <h3 class="mb-4 text-3xl font-medium text-gray-700">
                            {{ $header }}
                        </h3>

                        {{ $slot }}
                    </div>
                </main>
            </div>
        </div>
    </body>
</html>
