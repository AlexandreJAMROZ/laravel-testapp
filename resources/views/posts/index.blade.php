@extends('layouts.app')

@section('title', 'Posts - All posts')

@section('content')
<div class="top-banner mb-8 pl-6 pr-6 flex justify-center">
    <h1 class="mr-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
        Latest posts
    </h1>

    <div class="create-button flex items-center bg-white p-2 pl-4 pr-4 border-solid border-1 border-gray-100 rounded-lg shadow-lg">
        <a href="/posts/create">
            +
        </a>
    </div>
</div>

<div class="posts">
    @foreach ($post_list as $post)
        <div class="post mb-8 rounded-xl flex bg-white w-11/12 mx-auto shadow-lg">
            <div class="w-3/4 p-4">
                <h2 class="mb-2 text-3xl font-semibold text-gray-700 dark:text-white">{{ $post->title }}</h2>
                <p class="text-lg font-medium text-gray-500 dark:text-gray-400">Écrit par : {{ $post->author }}</p></li>
            </div>

            <div class="w-1/4 p-4 flex justify-center items-center">
                <a href="posts/{{ $post->id }}" class="text-xl font-medium bg-gray-200 p-2 rounded-xl">
                    Détails
                </a>
            </div>
        </div>
    @endforeach 
</div>
        
@endsection