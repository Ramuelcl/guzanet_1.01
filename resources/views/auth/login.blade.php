<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                    autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input type="password" id="password" class="block mt-1 w-full" name="password" required autofocus
                    autocomplete="current-password" />
                <div class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5">
                </div>
            </div>

            {{-- <div class="mt-4">
                <div class="mt-4" x-data="{ show: false }">
                    <x-jet-input :type="text" id="password" class="block mt-1 w-full" name="password" required
                        autocomplete="current-password" />
                    <p class="font-semibold" @click="show = !show" x-text="show ? 'Hide' : 'Show'">Show</p>
                </div>
            </div> --}}

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-between mt-4">
                @if (Route::has('register'))
                    <x-jet-nav-link href="{{ route('register') }}">
                        {{ __('Register') }}
                    </x-jet-nav-link>
                @endif

                @if (Route::has('password.request'))
                    <x-jet-nav-link href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </x-jet-nav-link>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
