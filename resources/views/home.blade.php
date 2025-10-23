@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
<div class="flex flex-col items-center">
    <h1 class="main_title main_title-responsive main_title-style">
        Welcome to our blog !
    </h1>
    <p class="home_content 
    mb-4 text-lg md:text-xl lg:text-2xl font-normal text-gray-500 text-center">
        Some text in the homepage.
    </p>
    <a href="/posts" class="home_button 
    mb-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-full">
        Go see the posts !
    </a>

    <img 
        class="mb-4 rounded-lg shadow-lg"
        src="https://www.searchenginejournal.com/wp-content/uploads/2020/08/7-ways-a-blog-can-help-your-business-right-now-5f3c06b9eb24e.png"
        alt="Decoration blog picture"
        width="85%"
    >
</div>
@endsection