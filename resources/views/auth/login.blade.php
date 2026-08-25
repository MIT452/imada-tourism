@extends('layouts.app')

@section('title', 'Connexion')

@section('content')
<section class="max-w-md mx-auto px-5 py-20">
    <div class="text-center mb-8" data-reveal>
        <h1 class="font-display font-800 text-3xl text-baobab-900">Content de vous revoir</h1>
        <p class="text-baobab-600 mt-2 text-sm">Connectez-vous pour retrouver vos voyages.</p>
    </div>

    <div class="bg-white border border-baobab-100 rounded-2xl shadow-sm p-8" data-reveal>
        @if ($errors->any())
            <div class="mb-5 text-sm text-red-700 bg-red-50 border border-red-100 rounded-lg px-4 py-3">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}" class="space-y-5">
            @csrf
            <div>
                <label for="email" class="block text-sm font-medium text-baobab-800 mb-1.5">Adresse e-mail</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                       class="w-full rounded-xl border border-baobab-200 px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-baobab-500 focus:border-transparent">
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-baobab-800 mb-1.5">Mot de passe</label>
                <input id="password" type="password" name="password" required
                       class="w-full rounded-xl border border-baobab-200 px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-baobab-500 focus:border-transparent">
            </div>
            <label class="flex items-center gap-2 text-sm text-baobab-700">
                <input type="checkbox" name="remember" class="rounded border-baobab-300 text-baobab-600 focus:ring-baobab-500">
                Se souvenir de moi
            </label>
            <button type="submit" class="w-full py-3 rounded-xl bg-baobab-600 text-white font-semibold hover:bg-baobab-700 transition">Se connecter</button>
        </form>
    </div>

    <p class="text-center text-sm text-baobab-600 mt-6">
        Pas encore de compte ?
        <a href="{{ route('register') }}" class="font-semibold text-baobab-700 hover:underline">Inscrivez-vous</a>
    </p>
</section>
@endsection
