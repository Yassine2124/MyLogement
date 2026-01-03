<footer class="bg-gray-900 text-gray-300 mt-20">
    <div class="max-w-7xl mx-auto px-4 py-12 grid grid-cols-1 md:grid-cols-4 gap-8">

        {{-- Colonne 1 : Logo --}}
        <div>
            <h2 class="text-2xl font-bold text-white mb-4">
                Immo<span class="text-indigo-500">Guinée</span>
            </h2>
            <p class="text-sm text-gray-400">
                Plateforme immobilière pour la location et la vente de maisons
                partout en Guinée.
            </p>
        </div>

        {{-- Colonne 2 : Navigation --}}
        <div>
            <h3 class="text-lg font-semibold text-white mb-4">Navigation</h3>
            <ul class="space-y-2 text-sm">
                <li><a href="/" class="hover:text-white">Accueil</a></li>
                <li><a href="{{ route('fronend.index') }}" class="hover:text-white">Biens</a></li>
            </ul>
        </div>

        {{-- Colonne 3 : Services --}}
        <div>
            <h3 class="text-lg font-semibold text-white mb-4">Services</h3>
            <ul class="space-y-2 text-sm">
                <li>Location de maisons</li>
                <li>Vente de biens</li>
                <li>Gestion immobilière</li>
                <li>Accompagnement juridique</li>
            </ul>
        </div>

        {{-- Colonne 4 : Contact --}}
        <div>
            <h3 class="text-lg font-semibold text-white mb-4">Contact</h3>
            <ul class="space-y-2 text-sm">
                <li>📍 Conakry, Guinée</li>
                <li>📞 +224 623 15 08 25</li>
                <li>✉️ mdouyassine2002@gmail.com</li>
            </ul>
        </div>

    </div>

    {{-- Bas de footer --}}
    <div class="border-t border-gray-800 text-center py-4 text-sm text-gray-500">
        © {{ date('Y') }} ImmoGuinée. Tous droits réservés.
    </div>
</footer>
