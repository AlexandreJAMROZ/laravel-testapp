@extends('layouts.app')

@section('title', 'Posts - All posts')

@section('content')
<div class="top-banner mb-8 flex justify-center items-center">
    <h1 class="main_title main_title-responsive main_title-style">
        Latest posts
    </h1>

    <a href="/posts/create"
        class="flex items-center justify-center ml-3
        w-9 h-9 
        bg-blue-500 hover:bg-blue-700 text-white text-3xl font-bold rounded-full shadow-lg transition-all duration-300 ease-in-out transform hover:scale-110">
        +
    </a>

</div>

<div class="posts
md:grid md:grid-cols-2
xl:grid-cols-3">
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