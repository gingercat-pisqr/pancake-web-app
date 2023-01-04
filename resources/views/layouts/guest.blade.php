<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Pancake') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased ">
        <div class="min-h-screen flex flex-col sm:justify-center items-center align-middle pt-6 sm:pt-0 bg-white dark:bg-gray-900">

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow overflow-hidden rounded-5">
                <div class="row align-items-center text-center">
                    <a href="/" class="my-4 position-relative">
                        <!-- <x-application-logo class="w-20 h-20 fill-current text-gray-500" /> -->
                        <img src="{{ asset('images/icon/logo.svg') }}" width="50px" height="50px" class="position-absolute top-50 start-50 translate-middle"/>
                    </a>
                    <h3 class="fs-3 mt-3"><strong>Pancake</strong></h3>

                    @if (request()->routeIs('login'))
                        <h4 class="fs-5 mt-2 mb-4">Masuk</h4>
                    @elseif (request()->routeIs('register'))
                        <h4 class="fs-4 mt-2 mb-4">Daftar</h4>
                    @endif    
                </div>
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
