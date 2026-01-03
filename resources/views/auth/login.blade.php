{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
@extends('backend.properties.layout-form')
@section('title', 'Connexion')
@section('content')
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-indigo-50 via-white to-indigo-100 px-4">

        <div class="w-full max-w-md bg-white rounded-2xl shadow-xl p-8">

            <!-- LOGO / TITRE -->
            <div class="text-center mb-8">
                <h1 class="text-3xl font-extrabold text-indigo-600">🏠 ImmoGest</h1>
                <p class="text-slate-500 mt-2">Connectez-vous à votre espace</p>
            </div>

            <!-- FORM -->
            <form method="POST" action="{{ route('login') }}" class="space-y-6">
                @csrf

                <!-- EMAIL -->
                <div>
                    <label class="block text-sm font-medium text-slate-600 mb-1">
                        Adresse email
                    </label>
                    <input type="email" name="email" required class="input-premium" placeholder="email">
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- PASSWORD -->
                <div>
                    <label class="block text-sm font-medium text-slate-600 mb-1">
                        Mot de passe
                    </label>
                    <input type="password" name="password" required class="input-premium" placeholder="password">
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

              
                <div class=" flex items-center justify-between">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox"
                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                        <span class="ms-2 text-sm text-gray-600">{{ __('Se souvenir de moi') }}</span>
                    </label>
                    <a href="{{ route('password.request') }}" class="text-indigo-600 hover:underline">
                        Mot de passe oublié ?
                    </a>
                </div>


                <!-- BUTTON -->
                <button type="submit" class="btn-primary w-full">
                    Se connecter
                </button>
            </form>

            <!-- FOOTER -->
            <p class="text-center text-sm text-slate-500 mt-6">
                Pas encore de compte ?
                <a href="{{ route('register') }}" class="text-indigo-600 font-semibold hover:underline">
                    Créer un compte
                </a>
            </p>

        </div>
    </div>
@endsection
