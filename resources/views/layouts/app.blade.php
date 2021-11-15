<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Graduate&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased">
    <x-jet-banner />

    <div class="min-h-screen bg-green-500">
        @livewire('navigation-menu')

        <!-- Page Heading -->
        @if (isset($header))
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>

    <div>
        <footer class="bg-green-500 dark:bg-gray-800 w-full py-8">
            <div class="max-w-screen-xl mx-auto px-4">
                <ul style="font-family: 'Graduate', cursive;" style class="max-w-screen-md mx-auto text-lg font-light flex flex-wrap justify-between">
                    <li class="my-2">
                        <a class="text-white hover:text-white dark:text-white dark:hover:text-white transition-colors duration-200"
                            href="#">
                            ACERCA DE
                        </a>
                    </li>
                    <li class="my-2">
                        <a class="text-white hover:text-white dark:text-white dark:hover:text-white transition-colors duration-200"
                            href="#">
                            HOME
                        </a>
                    </li>
                    <li class="my-2">
                        <a class="text-white hover:text-white dark:text-white dark:hover:text-white transition-colors duration-200"
                            href="#">
                            VISITA UTG
                        </a>
                    </li>
                    <li class="my-2">
                        <a class="text-white hover:text-white dark:text-white dark:hover:text-white transition-colors duration-200"
                            href="https://www.linkedin.com/in/brandon-villgs/">
                            LinkedIn
                        </a>
                    </li>
                </ul>
            </div>
        </footer>
    </div>

    @stack('modals')

    @livewireScripts
</body>

</html>