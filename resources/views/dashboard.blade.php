<x-app-layout>
    <x-slot name="header">
        <header class=" flex items-center gap-8 bg-primary shadow-lg my-3">
            <div class="flex gap-5 max-w-7xl my-3 py-6 px-4 sm:px-6 lg:px-8">
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    {{ __('Dashboard') }}
                </h2>
                <h3 class=" uppercase">
                    {{__(Auth::User()->user_role)}}
                </h3>
            </div>
            <ul class=" flex gap-6">
                <a href="#">
                    <li>Routes</li>
                </a>
                <a href="#">
                    <li>Schadules</li>
                </a>
                <a href="#">
                    <li>Drivers</li>
                </a>
                <a href="#">
                    <li>Passengers</li>
                </a>
            </ul>
        </header>
        {{-- for admin --}}
        @if (Auth::User()->user_role === 'admin')
            @if (session()->has('success'))
                <div>
                    {{session('success')}}
                </div>
            @endif
            @include('layouts.route-form', ['cities', $cities])
            <section class=" max-md:flex max-md:flex-col md:grid md:grid-cols-4 p-7 gap-3">
                @include('layouts.route-card')
            </section>
        @endif
        {{-- for driver --}}
        @if (Auth::User()->user_role === 'driver')
            @include('layouts.schedule-form', ['routes', $routes])
            <section class=" max-md:flex max-md:flex-col md:grid md:grid-cols-4 p-7 gap-3">
                @include('layouts.schedule-card')
            </section>
        @endif
    </x-slot>
</x-app-layout>
