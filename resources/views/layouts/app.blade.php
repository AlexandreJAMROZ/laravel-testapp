<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/style.css') <!-- Tailwind est importé ici -->
    <title>@yield('title', 'Mon site')</title>
</head>
<body>

    <div id="app" class="bg-gray-100 min-h-screen flex flex-col">
    {{-- HEADER --}}
    <header class="header bg-white mb-8 shadow-md">
        <nav class="nav">
            <div class="nav_container">
                <ul class="flex w-full divide-x divide-gray-300">
                    <li class="flex w-full hover:bg-gray-100 cursor-pointer">
                        <a class="flex-1 text-center py-5" href="/">Accueil</a>
                    </li>
                    <li class="flex w-full hover:bg-gray-100 cursor-pointer">
                        <a class="flex-1 text-center py-5" href="/posts">Posts</a>
                    </li>
                    <li class="flex w-full hover:bg-gray-100 cursor-pointer">
                        <a class="flex-1 text-center py-5" href="/contact">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    {{-- CONTENU DE LA PAGE --}}
    <main class="main flex-1">
        <div class="main_container">
            @yield('content')
        </div>
    </main>

    {{-- FOOTER --}}
    <footer class="footer bg-white text-center p-4">
        <div class="container">
            <p class="text-lg font-normal text-gray-500 dark:text-gray-400 text-center p-4">
                &copy; 2025 Alexandre JAMROZ. Tous droits réservés.
            </p>
        </div>
    </footer>
    </div>
</body>
</html>
