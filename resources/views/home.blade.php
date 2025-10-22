@include('header')

<div class="flex flex-col items-center">
    <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white text-center">
        Bienvenue sur la page d'accueil
    </h1>
    <p class="mb-4 text-lg font-normal text-gray-500 dark:text-gray-400 texte-center">
        Contenu de la page d'accueil
    </p>
    <button>
        <a href="/posts" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-full">
            Voir les posts
        </a>
    </button>
</div>

@include('footer')