@extends('layouts.app')

@section('title', 'Accueil')
@section('description', "Circuits et séjours à Madagascar : île rouge, forêts tropicales et plages de l'Océan Indien. Réservez votre aventure.")

@section('content')

    {{-- HERO --}}
    <section class="relative overflow-hidden bg-gradient-to-b from-baobab-50 to-sable">
        <div class="max-w-7xl mx-auto px-5 md:px-8 pt-16 pb-20 md:pt-24 md:pb-28 grid md:grid-cols-2 gap-12 items-center">
            <div class="animate-fadeUp">
                <span class="inline-block text-xs font-semibold tracking-wide uppercase text-baobab-600 bg-baobab-100 px-3 py-1 rounded-full mb-5">L'île rouge vous attend</span>
                <h1 class="font-display font-800 text-4xl md:text-5xl leading-tight text-baobab-900">
                    Madagascar,<br class="hidden sm:block"> mille visages à explorer
                </h1>
                <p class="mt-5 text-base md:text-lg text-baobab-700 max-w-md">
                    Des canyons de l'Isalo aux plages de Nosy Be, en passant par les forêts de Ranomafana : composez un voyage qui vous ressemble sur la quatrième plus grande île du monde.
                </p>
                <div class="mt-8 flex flex-wrap gap-4">
                    <a href="#destinations" class="px-6 py-3 rounded-full bg-baobab-600 text-white font-semibold hover:bg-baobab-700 transition">Voir les destinations</a>
                    <a href="{{ route('register') }}" class="px-6 py-3 rounded-full border border-baobab-300 text-baobab-800 font-semibold hover:bg-baobab-50 transition">Créer un compte</a>
                </div>
                <div class="mt-10 flex gap-8 text-sm text-baobab-700">
                    <div><span class="block font-display font-800 text-2xl text-baobab-800">6</span>destinations phares</div>
                    <div><span class="block font-display font-800 text-2xl text-baobab-800">100+</span>circuits sur mesure</div>
                    <div><span class="block font-display font-800 text-2xl text-baobab-800">15</span>ans d'expérience locale</div>
                </div>
            </div>

            <div class="relative animate-fadeUp" style="animation-delay:.15s">
                <div class="aspect-[4/5] rounded-[2rem] bg-gradient-to-br from-baobab-500 to-lagon-600 shadow-2xl shadow-baobab-900/20 flex items-center justify-center overflow-hidden">
                    <img src="{{ asset('images/hero.jpg') }}" alt="Paysage de Madagascar" class="w-full h-full object-cover" onerror="this.remove()">
                </div>
                <div class="absolute -bottom-6 -left-6 bg-white rounded-2xl shadow-xl px-5 py-4 hidden sm:block">
                    <p class="text-xs text-baobab-500 font-semibold uppercase tracking-wide">Observation</p>
                    <p class="font-display font-700 text-baobab-900">Baleines à Sainte Marie</p>
                </div>
            </div>
        </div>
    </section>

    {{-- DESTINATIONS --}}
    <section id="destinations" class="max-w-7xl mx-auto px-5 md:px-8 py-20">
        <div class="max-w-xl mb-12" data-reveal>
            <span class="text-xs font-semibold tracking-wide uppercase text-baobab-500">À explorer</span>
            <h2 class="font-display font-800 text-3xl md:text-4xl text-baobab-900 mt-2">Nos destinations coups de cœur</h2>
            <p class="mt-3 text-baobab-700">Des hauts plateaux volcaniques aux îles de l'Océan Indien, chaque région de Madagascar a son propre caractère.</p>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-7">
            @foreach ($destinations as $d)
                <a href="{{ route('destinations.show', $d['slug']) }}"
                   class="card-destination group block rounded-2xl overflow-hidden bg-white border border-baobab-100 shadow-sm"
                   data-reveal style="transition-delay: {{ $loop->index * 60 }}ms">
                    <div class="photo-slot h-48 {{ $d['theme'] === 'mer' ? '' : '' }}"
                         style="--slot-a:{{ $d['theme'] === 'mer' ? '#48a4c6' : '#57bb78' }}; --slot-b:{{ $d['theme'] === 'mer' ? '#173e50' : '#17492c' }};"
                         data-label="{{ $d['nom'] }}">
                        <img src="{{ asset('images/destinations/'.$d['slug'].'/1.jpg') }}" alt="{{ $d['nom'] }}" class="w-full h-full object-cover">
                    </div>
                    <div class="p-5">
                        <div class="flex items-center gap-2 mb-1">
                            <span class="h-1.5 w-1.5 rounded-full {{ $d['theme'] === 'mer' ? 'bg-lagon-500' : 'bg-baobab-500' }}"></span>
                            <span class="text-xs text-baobab-500 font-medium">{{ $d['region'] }}</span>
                        </div>
                        <h3 class="font-display font-700 text-lg text-baobab-900">{{ $d['nom'] }}</h3>
                        <p class="text-sm text-baobab-600 mt-1">{{ $d['tagline'] }}</p>
                        <span class="inline-block mt-4 text-sm font-semibold text-baobab-700 group-hover:translate-x-1 transition">Découvrir →</span>
                    </div>
                </a>
            @endforeach
        </div>
    </section>

    {{-- POURQUOI NOUS --}}
    <section id="pourquoi" class="bg-baobab-50/70 py-20">
        <div class="max-w-7xl mx-auto px-5 md:px-8 grid md:grid-cols-3 gap-10">
            <div class="md:col-span-1" data-reveal>
                <span class="text-xs font-semibold tracking-wide uppercase text-baobab-500">Pourquoi nous</span>
                <h2 class="font-display font-800 text-3xl text-baobab-900 mt-2">Un voyage préparé avec des locaux</h2>
                <p class="mt-3 text-baobab-700">Nous concevons chaque itinéraire avec des guides malgaches passionnés, au plus près des communautés et de la nature.</p>
            </div>
            <div class="md:col-span-2 grid sm:grid-cols-2 gap-6">
                @php
                    $atouts = [
                        ['titre' => 'Guides locaux experts', 'texte' => 'Naturalistes et guides francophones, natifs des régions visitées.'],
                        ['titre' => 'Circuits sur mesure', 'texte' => 'Chaque itinéraire est ajusté à votre rythme et à vos envies.'],
                        ['titre' => 'Tourisme responsable', 'texte' => 'Des partenariats avec les parcs nationaux et communautés locales.'],
                        ['titre' => 'Assistance 7j/7', 'texte' => 'Une équipe joignable avant et pendant tout votre séjour.'],
                    ];
                @endphp
                @foreach ($atouts as $a)
                    <div class="bg-white rounded-2xl p-6 border border-baobab-100" data-reveal style="transition-delay: {{ $loop->index * 60 }}ms">
                        <div class="h-9 w-9 rounded-full bg-baobab-100 text-baobab-700 flex items-center justify-center font-display font-700 text-sm mb-4">{{ $loop->iteration }}</div>
                        <h3 class="font-display font-700 text-baobab-900">{{ $a['titre'] }}</h3>
                        <p class="text-sm text-baobab-600 mt-1">{{ $a['texte'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="max-w-7xl mx-auto px-5 md:px-8 py-20">
        <div class="rounded-3xl bg-gradient-to-r from-baobab-700 to-lagon-700 px-8 py-14 text-center text-white" data-reveal>
            <h2 class="font-display font-800 text-3xl md:text-4xl">Prêt à découvrir Madagascar ?</h2>
            <p class="mt-3 text-baobab-100 max-w-lg mx-auto">Créez votre compte pour recevoir des itinéraires personnalisés et suivre vos réservations.</p>
            <a href="{{ route('register') }}" class="inline-block mt-7 px-7 py-3 rounded-full bg-white text-baobab-800 font-semibold hover:bg-baobab-50 transition">S'inscrire gratuitement</a>
        </div>
    </section>

@endsection
