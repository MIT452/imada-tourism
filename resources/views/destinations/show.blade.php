@extends('layouts.app')

@section('title', $destination['nom'])
@section('description', $destination['tagline'])

@section('content')

    @php
        $couleurA = $destination['theme'] === 'mer' ? '#48a4c6' : '#57bb78';
        $couleurB = $destination['theme'] === 'mer' ? '#173e50' : '#17492c';
        $accent = $destination['theme'] === 'mer' ? 'lagon' : 'baobab';
    @endphp

    {{-- HERO DESTINATION --}}
    <section class="relative">
        <div class="photo-slot h-[52vh] min-h-[320px]" style="--slot-a:{{ $couleurA }}; --slot-b:{{ $couleurB }};" data-label="{{ $destination['nom'] }}">
            <img src="{{ asset('images/destinations/'.$destination['slug'].'/1.jpg') }}" alt="{{ $destination['nom'] }}" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/10 to-transparent"></div>
        </div>
        <div class="absolute inset-0 flex items-end">
            <div class="max-w-7xl mx-auto px-5 md:px-8 pb-10 w-full text-white">
                <a href="{{ route('accueil') }}#destinations" class="text-sm text-white/80 hover:text-white transition">← Toutes les destinations</a>
                <p class="text-xs uppercase tracking-wide font-semibold mt-3 text-white/80">{{ $destination['region'] }}</p>
                <h1 class="font-display font-800 text-4xl md:text-5xl mt-1">{{ $destination['nom'] }}</h1>
                <p class="mt-2 text-white/90 text-lg">{{ $destination['tagline'] }}</p>
            </div>
        </div>
    </section>

    {{-- DESCRIPTION + POINTS FORTS --}}
    <section class="max-w-7xl mx-auto px-5 md:px-8 py-16 grid md:grid-cols-3 gap-12">
        <div class="md:col-span-2" data-reveal>
            <h2 class="font-display font-800 text-2xl text-baobab-900 mb-4">À propos</h2>
            <p class="text-baobab-700 leading-relaxed">{{ $destination['description'] }}</p>
        </div>
        <div data-reveal>
            <h2 class="font-display font-800 text-2xl text-baobab-900 mb-4">Points forts</h2>
            <ul class="space-y-3">
                @foreach ($destination['points_forts'] as $point)
                    <li class="flex items-start gap-3 text-sm text-baobab-700">
                        <span class="mt-1 h-1.5 w-1.5 rounded-full bg-{{ $accent }}-500 shrink-0"></span>
                        {{ $point }}
                    </li>
                @endforeach
            </ul>
        </div>
    </section>

    {{-- GALERIE 4 PHOTOS --}}
    <section class="max-w-7xl mx-auto px-5 md:px-8 pb-16" data-reveal>
        <h2 class="font-display font-800 text-2xl text-baobab-900 mb-6">Galerie photo</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            @for ($i = 1; $i <= 4; $i++)
                <div class="photo-slot aspect-square rounded-2xl" style="--slot-a:{{ $couleurA }}; --slot-b:{{ $couleurB }};" data-label="Photo {{ $i }}">
                    <img src="{{ asset('images/destinations/'.$destination['slug'].'/'.$i.'.jpg') }}" alt="{{ $destination['nom'] }} — photo {{ $i }}" class="w-full h-full object-cover rounded-2xl">
                </div>
            @endfor
        </div>
         

    {{-- AUTRES DESTINATIONS --}}
    <section class="bg-baobab-50/70 py-16">
        <div class="max-w-7xl mx-auto px-5 md:px-8">
            <h2 class="font-display font-800 text-2xl text-baobab-900 mb-6">Continuer l'exploration</h2>
            <div class="grid sm:grid-cols-3 gap-6">
                @foreach ($autresDestinations as $d)
                    <a href="{{ route('destinations.show', $d['slug']) }}" class="card-destination block rounded-2xl overflow-hidden bg-white border border-baobab-100">
                        <div class="photo-slot h-36" style="--slot-a:{{ $d['theme'] === 'mer' ? '#48a4c6' : '#57bb78' }}; --slot-b:{{ $d['theme'] === 'mer' ? '#173e50' : '#17492c' }};" data-label="{{ $d['nom'] }}">
                            <img src="{{ asset('images/destinations/'.$d['slug'].'/1.jpg') }}" alt="{{ $d['nom'] }}" class="w-full h-full object-cover">
                        </div>
                        <div class="p-4">
                            <h3 class="font-display font-700 text-baobab-900">{{ $d['nom'] }}</h3>
                            <p class="text-sm text-baobab-600">{{ $d['tagline'] }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

@endsection
