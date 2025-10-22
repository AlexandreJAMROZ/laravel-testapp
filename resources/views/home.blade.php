@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
<div class="flex flex-col items-center">
    <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl text-center">
        Bienvenue sur la page d'accueil
    </h1>
    <p class="mb-4 text-lg font-normal text-gray-500 text-center">
        Contenu de la page d'accueil
    </p>
    <a href="/posts" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-full">
        Voir les posts
    </a>
</div>
@endsection