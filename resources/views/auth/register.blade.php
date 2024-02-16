<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" class="flex flex-col gap-3">
        @csrf
        @if ($errors->any())
            <div class=" text-red-600">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <!-- Name -->
        <div class=" mt-4 ">
            <x-input-label for="name" :value="__('Full name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        {{-- Phone number --}}
        <div class="mt-4">
            <x-input-label for="phone_number" :value="__('Phone number')" />
            <x-text-input id="phone_number" class="block mt-1 w-full" type="tel" name="phone_number" :value="old('phone_number')" required autocomplete="phone_number" />
            <x-input-error :messages="$errors->get('phone_number')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- Choose role -->
        <div class="mt-4">
            <x-input-label for="user_role" :value="__('Sign up as')"/>
            <select class="block mt-1 w-full" name="user_role" id="user_role" required>
                <option value="" disabled selected>Choose your role</option>
                <option id="driver" value="driver">Driver</option>
                <option id="passenger" value="passenger">Passenger</option>
            </select>
        </div>

        <!-- driver informations -->
        <div id="driver-info" class="hidden">
            <div class=" mt-4 ">
                <x-input-label for="car_type" :value="__('Car Type')" />
                <x-text-input id="car_type" class="block mt-1 w-full" type="text" name="car_type" :value="old('car_type')" autofocus  />
                <x-input-error :messages="$errors->get('car_type')" class="mt-2" />
            </div>
            <div class=" mt-4 ">
                <x-input-label for="car_immat" :value="__('Car Immatriculation')" />
                <x-text-input id="car_immat" class="block mt-1 w-full" type="text" name="car_immat" :value="old('car_immat')" autofocus  />
                <x-input-error :messages="$errors->get('car_immat')" class="mt-2" />
            </div>
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600  hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 " href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>
        </div>

        <x-primary-button class="ms-4">
            {{ __('Register') }}
        </x-primary-button>
    </form>

    <script src="{{asset('js\register.js')}}"></script>
</x-guest-layout>
