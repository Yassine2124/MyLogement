@extends('backend.properties.layout-form')
@section('title', 'Inscription')
@section('content')
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-indigo-50 via-white to-indigo-100 px-4">
        <div class="w-full max-w-md bg-white rounded-2xl shadow-xl p-8">

            <form method="POST" action="">
                @csrf
                <div class="text-center mb-8">
                    <h1 class="text-3xl font-extrabold text-indigo-600">🏠 ImmoGest</h1>
                    <p class="text-slate-500 mt-2">Inscrivez-vous !</p>
                </div>
                <!-- Name -->
                <div>
                    <label class="block text-sm font-medium text-slate-600 mb-1">
                        Nom et Prénom
                    </label>
                    <input type="text" name="name" required class="input-premium">
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-600 mb-1">
                        Téléphone
                    </label>
                    <input type="text" name="telephone" required class="input-premium">
                    <x-input-error :messages="$errors->get('telephone')" class="mt-2" />
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-600 mb-1">
                        Email
                    </label>
                    <input type="email" name="email" required class="input-premium">
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-600 mb-1">
                        Password
                    </label>
                    <input type="password" name="password" required class="input-premium">
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-600 mb-1">
                        Confirm Password
                    </label>
                    <input type="password" name="password_confirmation" required class="input-premium">
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>
                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>
                    <x-primary-button class="ms-4 ">
                        {{ __('Register') }}
                    </x-primary-button> --}}
                    {{-- <button type="submit" class=" bg-blue-600 px-5 py-2 ms-4 text-white hover:bg-blue-800 rounded">
                        S'inscrire
                    </button> --}}
                </div>
            </form>


        </div>
    </div>

@endsection
