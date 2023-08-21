<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                {{--
                <x-label for="email" value="{{ __('Email') }}" /> --}}
                <x-input placeholder="Email" id="email" class="block mt-1 w-full" type="email" name="email"
                    :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                {{--
                <x-label for="password" value="{{ __('Password') }}" /> --}}
                <x-input placeholder="Password" id="password" class="block mt-1 w-full" type="password" name="password"
                    required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center flex-col mt-4 mb-3">
                <x-button class="w-full ">
                    {{ __('Log in') }}
                </x-button>
                @if (Route::has('password.request'))
                <a class="mt-4 text-sm text-blue-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
                @endif
            </div>
            <div class="border-t border-gray-200 mb-4"></div>

            <div class="px-12 py-1 items-center content-center justify-center flex  text-center">
                @if (Route::has('register'))
                <a class=" mt-4 text-sm text-white bg-green-600 p-3 w-full  rounded-md " href="{{ route('register') }}">
                    {{ __('Create New Account') }}
                </a>
                @endif
            </div>

        </form>

    </x-authentication-card>
</x-guest-layout>