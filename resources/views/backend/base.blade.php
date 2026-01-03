<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard|@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class=" bg-gray-100 font-sans">
    <x-navbar></x-navbar>
    <div class="min-h-screen bg-slate-50 flex">

        <!-- SIDEBAR -->
        <aside class="w-64 bg-white shadow-lg hidden md:block">
            <div class="p-6 text-xl font-bold text-indigo-600">
                🏠 Location
            </div>

            <nav class="mt-6 space-y-2 px-4">
                <a href="{{ route('property.index') }}"
                    class="flex items-center gap-3 px-4 py-2 rounded-lg bg-indigo-50 text-indigo-600 font-semibold">
                    📊 Dashboard
                </a>
                <a href="{{ route('logement.index') }}" class="menu-link">🏘 Logements</a>
                <a href="{{ route('property.index') }}" class="menu-link">📑 Mes biens</a>
                <a href="#" class="menu-link">⚙️ Paramètres</a>

            </nav>

        </aside>

        <!-- CONTENT -->
        <main class="flex-1 p-6">

            <!-- HEADER -->
            <div class="flex justify-between items-center mb-6">
                <div>
                    <h1 class="text-2xl font-bold text-slate-800">Dashboard</h1>
                    <p class="text-slate-500">Bienvenue sur votre plateforme de gestion</p>
                </div>
            </div>

            <!-- STATS -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">

                <div class="stat-card">
                    <p class="stat-title">Bien total</p>
                    <h2 class="stat-value">{{ $nbrBien }}</h2>
                </div>

                <div class="stat-card">
                    <p class="stat-title">Occupés</p>
                    <h2 class="stat-value text-green-600">18</h2>
                </div>

                <div class="stat-card">
                    <p class="stat-title">Disponibles</p>
                    <h2 class="stat-value text-orange-500">6</h2>
                </div>

                <div class="stat-card">
                    <p class="stat-title">Revenus mensuels</p>
                    <h2 class="stat-value">2 450 €</h2>
                </div>


            </div>
            @yield('content')

        </main>
    </div>
    @include('toast.iziToast')
</body>

</html>
