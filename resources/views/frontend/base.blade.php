<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Immobilier Guinée')</title>


    {{-- Responsive --}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Tailwind --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>


<body class="bg-gray-50 text-gray-800">

    {{-- Navbar --}}
    <x-navbar />

    {{-- Contenu principal --}}
    <main class=" max-w-full mx-auto">
        <div>@yield('content')</div>
    </main>

    {{-- Footer --}}
    <x-footer />

</body>

</html>
