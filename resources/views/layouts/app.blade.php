<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/style.css')
    <title>@yield('title', 'Mon site')</title>
</head>
<body class="min-h-screen flex flex-col">

    {{-- HEADER --}}
    <header class="header">
        <nav class="nav">
            <div class="nav_container">
                <ul class="mb-8 flex w-full divide-x divide-gray-300">
                    <li class="flex w-full hover:bg-gray-100 cursor-pointer">
                        <a class="flex-1 text-center py-5" href="/">Accueil</a>
                    </li>
                    <li class="flex w-full hover:bg-gray-100 cursor-pointer">
                        <a class="flex-1 text-center py-5" href="/posts">Posts</a>
                    </li>
                    <li class="flex w-full hover:bg-gray-100 cursor-pointer">
                        <a class="flex-1 text-center py-5" href="/contact">Nous contacter</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    {{-- CONTENU DE LA PAGE --}}
    <main class="main flex-1">
        <div class="page">
            @yield('content')
        </div>
    </main>

    {{-- FOOTER --}}
    <footer class="footer bg-gray-100 text-center p-4">
        <div class="container">
            <p class="text-lg font-normal text-gray-500 dark:text-gray-400 text-center p-4 bg-gray-100">
                &copy; 2025 Alexandre JAMROZ. Tous droits réservés.
            </p>
        </div>
    </footer>
</body>
</html>
