<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @vite('resources/css/app.css')
</head>
<body>
    <div class="container px-4 mb-auto">    
        <header class="flex justify-between items-center py-4">
            <div class="flex items-center flex-grow gap-4">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('images/logo.png') }}" class="h-12" alt="logo de la empresa">
                </a>
                <form action="">
                    <input type="text" placeholder="Buscar">
                </form>
            </div>
            @auth
                <a href="{{ route('dashboard') }}">Dashboard</a>
            @else
                <a href="{{ route('dashboard') }}">Login</a>
            @endauth
        </header>
        <div class="opacity-60 h-px mb-8" style="background: 
        linear-gradient(
        to right, rgba(200, 200, 0) 0%
        to right, rgba(200, 200, 1) 30%
        to right, rgba(200, 200, 1) 70%
        to right, rgba(200, 200, 0) 100%
        );">

        </div>
        @yield('content')
        <p class="py-16">
            <img src="{{ asset('images/dev.png') }}" class="h-12 mx-auto">
        </p>
    </div>
</body>
</html>