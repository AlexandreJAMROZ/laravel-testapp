@extends('layouts.app')

@section('title', 'Posts - All posts')

@section('content')

{{-- Main title of the page --}}
<div class="top-banner mb-4 flex flex-col justify-center items-center">
    <h1 class="main_title main_title-responsive main_title-style">
        Latest posts
    </h1>

    <p class="home_content w-9/10
    text-lg md:text-xl lg:text-2xl font-normal text-gray-500 text-center">
        To add a post, click on the blue button in the bottom left
    </p>
</div>

{{-- Lists of all posts, responsive --}}
<div class="posts
md:grid md:grid-cols-2
xl:grid-cols-3">
    @foreach ($post_list as $post)
        <div class="post mb-8 rounded-xl flex bg-white w-11/12 mx-auto shadow-lg">
            <div class="w-3/4 p-4">
                <h2 class="mb-2 text-2xl font-semibold text-gray-700 dark:text-white">{{ $post->title }}</h2>
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

{{-- Sticky button in bottom left --}}
<a href="{{ url('/posts/create') }}"
    class="fixed bottom-6 left-6 
    w-14 h-14 md:w-16 md:h-16 lg:w-20 lg:h-20   
    flex items-center justify-center 
    bg-blue-500 hover:bg-blue-700 
    text-white text-4xl font-bold 
    rounded-full shadow-lg 
    transition-all duration-300 ease-in-out transform hover:scale-110 z-50">
    +
</a>
        
@endsection