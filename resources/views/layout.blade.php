<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    {{-- for production... --}}
    <link rel="stylesheet" href="{{ asset('build/assets/app.82736636.css') }}">
    <script defer src="{{ asset('build/assets/app.334e7359.js ') }}"></script>


    {{-- for develpment... --}}
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
</head>

<body>


    <nav class="flex justify-between items-center mb-4">
        <a href="/"><img class="w-24" src="{{ asset('img/logo.png') }}" alt="" class="logo" /></a>
        <ul class="flex space-x-6 mr-6 text-lg">
            <li>
                <a href="register.html" class="hover:text-laravel"><i class="fa-solid fa-user-plus"></i> Register</a>
            </li>
            <li>
                <a href="login.html" class="hover:text-laravel"><i class="fa-solid fa-arrow-right-to-bracket"></i>
                    Login</a>
            </li>
        </ul>
    </nav>




    <main>
        @yield('content')
    </main>






</body>





</html>
