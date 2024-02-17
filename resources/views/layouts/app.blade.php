<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <link rel="stylesheet" href="{{asset('css\output.css')}}">
    </head>
    <body class="font-sans antialiased">
        @include('layouts.navigation')
        
        <!-- Page Heading -->
        @if (isset($header)&& Auth::User()->user_role === 'admin')
            <header class="bg-primary shadow-lg">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif  
        @if (Auth::User()->user_role === 'passenger')
            @include('layouts.search-form')
        @endif
        @if (Auth::User()->user_role === 'driver')
            @include('layouts.schedule-form')
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
        @include('layouts.icons')
    </body>
</html>
