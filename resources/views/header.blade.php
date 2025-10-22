<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/style.css') <!-- tailwind is imported here -->
    <title>@yield('title', 'Mon site')</title>
</head>
<body>
    <header class="header">
        <nav class="nav">
            <div class="nav_container">
                <ul class="flex w-full divide-x divide-gray-300">
                    <li class="flex w-full divide-x hover:bg-gray-100 cursor-pointer"><a class="flex-1 text-center py-5" href="/">Home</a></li>
                    <li class="flex w-full divide-x hover:bg-gray-100 cursor-pointer"><a class="flex-1 text-center py-5" href="/posts">Posts</a></li>
                    <li class="flex w-full divide-x hover:bg-gray-100 cursor-pointer"><a class="flex-1 text-center py-5" href="/">Home</a></li>
                    <li class="flex w-full divide-x hover:bg-gray-100 cursor-pointer"><a class="flex-1 text-center py-5" href="/">Nous contacter</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main class="main">
        <div class="page">