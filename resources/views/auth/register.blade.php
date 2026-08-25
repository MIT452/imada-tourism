@extends('layouts.app')

@section('title', 'Inscription')

@section('content')
<section class="max-w-md mx-auto px-5 py-20">
    <div class="text-center mb-8" data-reveal>
        <h1 class="font-display font-800 text-3xl text-baobab-900">Créer un compte</h1>
        <p class="text-baobab-600 mt-2 text-sm">Rejoignez-nous pour préparer votre voyage à Madagascar.</p>
    </div>

    <div class="bg-white border border-baobab-100 rounded-2xl shadow-sm p-8" data-reveal>
        @if ($errors->any())
            <div class="mb-5 text-sm text-red-700 bg-red-50 border border-red-100 rounded-lg px-4 py-3">
                <ul class="list-disc list-inside space-y-1">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}" class="space-y-5">
            @csrf
            <div>
                <label for="name" class="block text-sm font-medium text-baobab-800 mb-1.5">Nom complet</label>
                <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus
                       class="w-full rounded-xl border border-baobab-200 px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-baobab-500 focus:border-transparent">
            </div>
            <div>
                <label for="email" class="block text-sm font-medium text-baobab-800 mb-1.5">Adresse e-mail</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required
                       class="w-full rounded-xl border border-baobab-200 px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-baobab-500 focus:border-transparent">
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-baobab-800 mb-1.5">Mot de passe</label>
                <input id="password" type="password" name="password" required
                       class="w-full rounded-xl border border-baobab-200 px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-baobab-500 focus:border-transparent">
            </div>
            <div>
                <label for="password_confirmation" class="block text-sm font-medium text-baobab-800 mb-1.5">Confirmer le mot de passe</label>
                <input id="password_confirmation" type="password" name="password_confirmation" required
                       class="w-full rounded-xl border border-baobab-200 px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-baobab-500 focus:border-transparent">
            </div>
            <button type="submit" class="w-full py-3 rounded-xl bg-baobab-600 text-white font-semibold hover:bg-baobab-700 transition">Créer mon compte</button>
        </form>
    </div>

    <p class="text-center text-sm text-baobab-600 mt-6">
        Déjà inscrit ?
        <a href="{{ route('login') }}" class="font-semibold text-baobab-700 hover:underline">Connectez-vous</a>
    </p>
</section>
@endsection
