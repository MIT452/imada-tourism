<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Madagasikara Voyages') — Découvrez Madagascar</title>
    <meta name="description" content="@yield('description', "Voyages et séjours sur mesure à Madagascar : Isalo, Nosy Be, Sainte Marie, Ranomafana et plus encore.")">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-body text-baobab-900 bg-sable antialiased">

    <header class="sticky top-0 z-50 bg-sable/90 backdrop-blur border-b border-baobab-100">
        <div class="max-w-7xl mx-auto px-5 md:px-8 h-16 flex items-center justify-between">
            <a href="{{ route('accueil') }}" class="flex items-center gap-2 font-display font-800 text-lg text-baobab-800">
                <img src="{{ asset('images/logo-imada.svg') }}" alt="iMada" class="h-8 w-8 rounded-full shrink-0">
                <span class="hidden sm:inline">iMada</span>
            </a>

            <nav class="hidden md:flex items-center gap-7 text-sm font-medium text-baobab-800">
                <a href="{{ route('accueil') }}#destinations" class="hover:text-baobab-600 transition">Destinations</a>
                <a href="{{ route('accueil') }}#pourquoi" class="hover:text-baobab-600 transition">Pourquoi nous</a>
                <a href="{{ route('accueil') }}#contact" class="hover:text-baobab-600 transition">Contact</a>
            </nav>

            <div class="flex items-center gap-3">
                @auth
                    <span class="hidden sm:inline text-sm text-baobab-700">Bonjour, {{ Auth::user()->name }}</span>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="text-sm font-medium px-4 py-2 rounded-full border border-baobab-300 text-baobab-700 hover:bg-baobab-50 transition">Déconnexion</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="text-sm font-medium text-baobab-700 hover:text-baobab-900 transition">Connexion</a>
                    <a href="{{ route('register') }}" class="text-sm font-semibold px-4 py-2 rounded-full bg-baobab-600 text-white hover:bg-baobab-700 transition">S'inscrire</a>
                @endauth
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer id="contact" class="bg-baobab-900 text-baobab-100 mt-24">
        <div class="max-w-7xl mx-auto px-5 md:px-8 py-14 grid md:grid-cols-4 gap-10">
            <div class="md:col-span-2">
                <div class="flex items-center gap-2 font-display font-800 text-lg text-white mb-3">
                    <img src="{{ asset('images/logo-imada.svg') }}" alt="iMada" class="h-8 w-8 rounded-full shrink-0">
                    iMada
                </div>
                <p class="text-sm text-baobab-200 max-w-sm">Agence locale spécialisée dans les circuits sur mesure à Madagascar : forêts tropicales, plages de l'Océan Indien et hauts plateaux.</p>
            </div>
            <div>
                <h4 class="font-display font-semibold text-white mb-3">Destinations</h4>
                <ul class="space-y-2 text-sm text-baobab-200">
                    <li><a href="{{ route('destinations.show', 'isalo') }}" class="hover:text-white transition">Isalo</a></li>
                    <li><a href="{{ route('destinations.show', 'nosybe') }}" class="hover:text-white transition">Nosy Be</a></li>
                    <li><a href="{{ route('destinations.show', 'sainte-marie') }}" class="hover:text-white transition">Sainte Marie</a></li>
                    <li><a href="{{ route('destinations.show', 'ranomafana') }}" class="hover:text-white transition">Ranomafana</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-display font-semibold text-white mb-3">Contact</h4>
                <ul class="space-y-2 text-sm text-baobab-200">
                    <li>Antananarivo, Madagascar</li>
                    <li>contact@madagasikara-voyages.mg</li>
                    <li>+261 34 00 000 00</li>
                </ul>
            </div>
        </div>
        <div class="border-t border-baobab-800 py-5 text-center text-xs text-baobab-300">
            © {{ date('Y') }} iMada — Tous droits réservés.
        </div>
    </footer>

    
</body>
</html>
