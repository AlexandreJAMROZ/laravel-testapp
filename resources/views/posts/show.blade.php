@extends('layouts.app')

@section('title', 'Posts - Post')

@section('content')
<h1 class="mb-8 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white text-center">
    Post with id : {{ $post->id }}
</h1>
<div class="post mb-8 flex flex-col items-center">
    <h2 class="text-3xl font-semibold text-gray-700 dark:text-white text-center">{{ $post->title }}</h2>
    <ul>
        <li><p class="text-lg font-normal text-gray-500 dark:text-gray-400 text-center">{{ $post->content }}</p></li>
        <li><p class="mb-4 text-lg font-normal text-gray-500 dark:text-gray-400 text-center">Écrit par : {{ $post->author }}</p></li>
    </ul>
    <a href="/posts" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-full">Retour aux posts</a>
</div>
        
@endsection