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
        
        @php

            $citiesController = new \App\Http\Controllers\CitiesController();
            $citiesData = $citiesController->getCitiesData();
        @endphp
        <!-- Page Heading -->
        @if (isset($header)&& (Auth::User()->user_role === 'admin' || Auth::User()->user_role === 'driver'))
            {{ $header }}
        @endif  
        
        @if (Auth::User()->user_role === 'passenger')
            @include('layouts.search-form', ['cities'=> $citiesData])
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
        @include('layouts.icons')
    </body>
</html>
