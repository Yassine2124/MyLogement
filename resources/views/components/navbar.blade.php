<nav class="bg-white shadow-sm mb-5 m-0 p-0 w-full">
    <div class="max-w-7xl mx-auto px-4 m-0 w-full">
        <div class="flex justify-between items-center h-16 m-0 w-full">

            {{-- Logo --}}
            <a href="/" class="text-xl font-bold text-indigo-600">
                Immo<span class="text-gray-800">Guinée</span>
            </a>

            {{-- Menu Desktop --}}
            <div class="hidden md:flex items-center space-x-6">
                <a href="/" class="hover:text-indigo-600">Accueil</a>
                <a href="{{ route('fronend.index') }}" class="hover:text-indigo-600">Biens</a>
                {{-- <a href="#" class="hover:text-indigo-600">À propos</a>
                <a href="#" class="hover:text-indigo-600">Contact</a> --}}

                {{-- <a href="{{ route('property.create') }}"
                    class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700">
                    Publier un bien
                </a> --}}
                @guest
                    <a class=" mybtn-primary" href="{{ route('login') }}">Connexion</a>
                @endguest
                @auth
                    <div class="hidden sm:flex sm:items-center sm:ms-6">
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button
                                    class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                    <div>{{ Auth::user()->name }}</div>

                                    <div class="ms-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <x-dropdown-link :href="route('profile.edit')">
                                    {{ __('Profile') }}
                                </x-dropdown-link>

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                    </div>
                    <livewire:navbar-notification />
                @endauth
            </div>

            {{-- Menu Mobile --}}
            <button class="md:hidden text-gray-700">
                ☰
            </button>

        </div>
    </div>
</nav>
