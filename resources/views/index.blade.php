<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Graduate&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="antialiased">
    <div class="bg-indigo-900 relative overflow-hidden h-screen">
        <img src="{{ asset('images/UTG2.jpg') }}" class="absolute h-full w-full object-cover" />
        <div class="inset-0 bg-black opacity-25 absolute">
        </div>
        <header class="absolute top-0 left-0 right-0 z-20">
            <nav class="container mx-auto px-6 md:px-12 py-4">
                <div class="md:flex justify-center items-center">
                    <div class="flex justify-between items-center">
                        <div class="md:hidden">
                            <button class="text-white focus:outline-none">
                                <svg class="h-12 w-12" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 6H20M4 12H20M4 18H20" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                    </path>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="hidden md:flex items-center">
                        <a class="text-lg uppercase mx-3 text-white cursor-pointer hover:text-gray-300">
                            Sitio Oficial
                        </a>
                        @auth
                        <a href="#"" class="text-lg uppercase mx-3 text-white cursor-pointer hover:text-gray-300">
                            Información del Sistema
                        </a>
                        @else
                        <a href="{{route('register')}}" class="text-lg uppercase mx-3 text-white cursor-pointer hover:text-gray-300">
                            Registro
                        </a>
                        @endauth
                        <a class="text-lg uppercase mx-3 text-white cursor-pointer hover:text-gray-300">
                            Contacto
                        </a>
                    </div>
                </div>
            </nav>
        </header>
        <div class="container mx-auto px-6 md:px-12 relative z-10 flex items-center pt-14">
            <div class="w-full flex flex-col items-center relative z-10">

                <section
                    class="max-w-screen-xl bg-green-500 dark:bg-gray-800 px-4 py-12 mx-auto sm:py-10 mt-14 sm:px-6 lg:px-8 lg:py-20">
                    <div class="max-w-4xl mx-auto text-center">
                        <h2 style="font-family: 'Graduate', cursive;" class="text-3xl font-extrabold leading-9 text-white sm:text-4xl sm:leading-10">
                            RETURN TO SCHOOL - RTS
                        </h2>
                        <h3 style="font-family: 'Graduate', cursive;" class="text-3xl font-extrabold leading-9 text-white sm:text-xl sm:leading-10">
                            BY: UTG DOLPHINS
                        </h3>
                        <p class="mt-3 text-base leading-7 sm:mt-4 text-white">
                            Sistema de control de infección, para regularizar una nueva normalidad.
                        </p>
                    </div>
                    <div class="mt-10 text-center sm:max-w-3xl sm:mx-auto sm:grid sm:grid-cols-3 sm:gap-8">
                        <div>
                            <p class="text-5xl font-extrabold leading-none text-white">
                                36°
                            </p>
                            <p class="mt-2 text-base font-medium leading-6 text-white">
                                Temperatura Normal
                            </p>
                        </div>
                        <div class="mt-10 sm:mt-0">
                            <p class="text-5xl font-extrabold leading-none text-white">
                                1m
                            </p>
                            <p class="mt-2 text-base font-medium leading-6 text-white">
                                Distancia
                            </p>
                        </div>
                        <div class="mt-10 sm:mt-0">
                            <p class="text-5xl font-extrabold leading-none text-white">
                                24 Horas
                            </p>
                            <p class="mt-2 text-base font-medium leading-6 text-white">
                                Control de Infección
                            </p>
                        </div>
                    </div>
                    <div class="w-52 mx-auto mt-4 p-4 flex">
                        @auth
                            <a href="{{route('home')}}"
                            class="py-2 px-4  bg-gradient-to-r from-green-400 to-green-400 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 ">
                            Ir al Home
                            </a>
                        @else
                        <div class="text-center">
                            <a href="{{route('login')}}"
                            class="py-2 mt-14 px-4 mx-5  bg-gradient-to-r from-green-400 to-green-400 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 ">
                            Iniciar Sesión
                            </a>
                        </div>
                        @endauth
                    </div>
                </section>

            </div>
        </div>
    </div>

</body>

</html>