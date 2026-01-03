@extends('frontend.base')

@section('title', 'Accueil')

@section('content')
    {{-- HERO --}}
    <section class="bg-gradient-to-r from-indigo-600 to-blue-600 text-white">
        <div class="max-w-7xl mx-auto px-4 py-24 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">
                Trouvez la maison idéale en Guinée
            </h1>

            <p class="text-lg text-indigo-100 mb-8">
                Location et vente de maisons fiables, sécurisées et vérifiées
            </p>

            <a href="{{ route('fronend.index') }}" class="bg-white text-indigo-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100">
                Voir les biens
            </a>
        </div>
    </section>
 
    <section class="max-w-7xl mx-auto px-4 py-20">
        <h2 class="text-3xl font-bold text-center mb-12">
            Biens récents
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            @foreach ($properties as $property)
                <x-property-card :property="$property" />
            @endforeach
        </div>
    </section>
    {{-- WHY US --}}
    <section class="bg-gray-100 py-20">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">
                Pourquoi nous choisir ?
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 text-center">

                <div class="bg-white p-6 rounded-xl shadow">
                    <div class="text-indigo-600 text-3xl mb-4">✔</div>
                    <h3 class="font-semibold mb-2">Biens vérifiés</h3>
                    <p class="text-sm text-gray-500">
                        Tous nos biens sont contrôlés
                    </p>
                </div>

                <div class="bg-white p-6 rounded-xl shadow">
                    <div class="text-indigo-600 text-3xl mb-4">🔒</div>
                    <h3 class="font-semibold mb-2">Sécurité</h3>
                    <p class="text-sm text-gray-500">
                        Transactions sécurisées
                    </p>
                </div>

                <div class="bg-white p-6 rounded-xl shadow">
                    <div class="text-indigo-600 text-3xl mb-4">📍</div>
                    <h3 class="font-semibold mb-2">Présence locale</h3>
                    <p class="text-sm text-gray-500">
                        Expertise du marché guinéen
                    </p>
                </div>

                <div class="bg-white p-6 rounded-xl shadow">
                    <div class="text-indigo-600 text-3xl mb-4">🤝</div>
                    <h3 class="font-semibold mb-2">Accompagnement</h3>
                    <p class="text-sm text-gray-500">
                        Du début à la fin
                    </p>
                </div>

            </div>
        </div>
    </section>
    {{-- CTA --}}
    <section class="bg-indigo-600 text-white py-20 text-center">
        <h2 class="text-3xl font-bold mb-4">
            Vous avez un bien à louer ou vendre ?
        </h2>

        <p class="mb-6 text-indigo-100">
            Publiez votre annonce gratuitement dès maintenant
        </p>

        <a href="{{ route('property.index') }}"
            class="bg-white text-indigo-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100">
            Publier un bien
        </a>
    </section>




@endsection
