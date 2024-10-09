<footer class="bg-[#429b5f] text-white py-8">
    <div class="container mx-auto px-4">
        <!-- Footer content -->
        <div class="flex flex-col md:flex-row justify-between items-center">
            <!-- Logo and tagline -->
            <div class="mb-6 md:mb-0 text-center md:text-left">
                <a href="{{ route('home') }}" class="text-2xl font-bold">Direction Régionale</a>
                <p class="mt-2">Assurer l'assainissement durable pour tous.</p>
            </div>

            <!-- Navigation links, stacked on mobile, horizontal on larger screens -->
            <div class="flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-6 text-center md:text-left">
                <a href="{{ route('home') }}" class="hover:text-gray-400">Accueil</a>
                <a href="{{ route('about') }}" class="hover:text-gray-400">À propos</a>
                <a href="{{ route('projects') }}" class="hover:text-gray-400">Projets</a>
                <a href="{{ route('services') }}" class="hover:text-gray-400">Services</a>
                <a href="{{ route('resources') }}" class="hover:text-gray-400">Ressources</a>
                <a href="{{ route('news') }}" class="hover:text-gray-400">Actualités</a>
                <a href="{{ route('contact') }}" class="hover:text-gray-400">Contact</a>
            </div>
        </div>

        <!-- Copyright -->
        <div class="mt-8 text-center text-sm text-white">
            &copy; {{ date('Y') }} Direction Régionale de l'Assainissement. Tous droits réservés.
        </div>
    </div>
</footer>
