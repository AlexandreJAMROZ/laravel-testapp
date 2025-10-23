@extends('layouts.app')

@section('title', 'Posts - Create')

@section('content')
<h1 class="main_title main_title-responsive main_title-style">
    Publish a Post
</h1>

<div class="form_container ml-4 mr-4 mb-4 flex justify-center items-center">
    <form class="max-w-md mx-auto" action="/posts/create" method="POST">
        @csrf

        <div class="grid grid-cols-2 gap-4">
            <div>
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="title">
                Title
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="title" name="title" type="text" placeholder="Enter title">
            </div>
            <div>
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="author">
                Author
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="author" name="author" type="text" placeholder="Enter author">
            </div>
        </div>
        <div class="mt-4">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="content">
            Content
            </label>
            <textarea class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="content" name="content" rows="5" placeholder="Enter content"></textarea>
        </div>
        <button class="mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">
            Submit
        </button>
    </form>
</div>        

@endsection