<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link rel="stylesheet" href="{{asset('css\output.css')}}">
        
    </head>
    <body class="antialiased">
        <div class="flex flex-col justify-center items-center h-screen bg-secondary">
            <div>
                <x-app-logo />
            </div>
            <div class="flex max-md:flex-col justify-center max-md:items-center gap-3 w-screen">
                <a href="{{ route('login') }}" class="font-semibold text-white flex justify-center w-1/3 rounded-lg hover:bg-cyan-600 bg-cyan-950 p-3 transition ease-in-out duration-150">Log in</a>
                <a href="{{ route('register') }}" class="font-semibold text-white flex justify-center w-1/3 rounded-lg hover:bg-cyan-600 bg-cyan-950 p-3 transition ease-in-out duration-150">Sign up</a>
            </div>
        </div>
    </body>
</html>