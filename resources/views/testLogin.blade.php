<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

</body>
    
</html>
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
                <input type="email" name="email" required class="input-premium" placeholder="ex: toto@email.com">
            </div>

            <!-- PASSWORD -->
            <div>
                <label class="block text-sm font-medium text-slate-600 mb-1">
                    Mot de passe
                </label>
                <input type="password" name="password" required class="input-premium" placeholder="••••••••">
            </div>

            <!-- REMEMBER -->
            <div class="flex items-center justify-between text-sm">
                <label class="flex items-center gap-2 text-slate-600">
                    <input type="checkbox" class="rounded text-indigo-600">
                    Se souvenir de moi
                </label>

                <a href="#" class="text-indigo-600 hover:underline">
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
