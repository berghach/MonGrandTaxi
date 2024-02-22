<x-app-layout>
    <x-slot name="header">
        <header class="bg-primary shadow-lg">
            <div class="flex gap-5 max-w-7xl my-3 py-6 px-4 sm:px-6 lg:px-8">
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    {{ __('Dashboard') }}
                </h2>
                <h3 class=" uppercase">
                    {{__(Auth::User()->user_role)}}
                </h3>
            </div>
        </header>
        @if (Auth::User()->user_role === 'admin')
            @if (session()->has('success'))
                <div>
                    {{session('success')}}
                </div>
            @endif
            @include('layouts.route-form')
            <section class=" max-md:flex max-md:flex-col md:grid md:grid-cols-4 p-7 gap-3">
                @include('layouts.route-card')
            </section>
            @foreach ($users as $user)
                <h1>{{$user->fullname}}</h1><br>
            @endforeach
        @endif
    </x-slot>
</x-app-layout>
