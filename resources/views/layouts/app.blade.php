<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Direction Régionale') }}</title>
    @vite('resources/css/app.css')
    <script src="//unpkg.com/alpinejs" defer></script>
</head>
<body class="bg-gray-100">

    <!-- Header and Navbar -->
    <header class="bg-[#429b5f] text-white sticky top-0 z-50">
        <div class="container mx-auto flex items-center justify-between py-4 px-6">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="text-3xl font-bold">
                Direction Régionale
            </a>

            <!-- Menu for desktop -->
            <nav class="hidden md:flex space-x-6">
                <a href="{{ route('home') }}" class="hover:text-gray-300">Accueil</a>
                <a href="{{ route('about') }}" class="hover:text-gray-300">À propos</a>
                <a href="{{ route('projects') }}" class="hover:text-gray-300">Projets</a>
                <a href="{{ route('services') }}" class="hover:text-gray-300">Services</a>
                <a href="{{ route('resources') }}" class="hover:text-gray-300">Ressources</a>
                <a href="{{ route('news') }}" class="hover:text-gray-300">Actualités</a>
                <a href="{{ route('contact') }}" class="hover:text-gray-300">Contact</a>
            </nav>

            <!-- Mobile menu button -->
            <div x-data="{ open: false }" class="md:hidden relative">
                <button @click="open = true" class="text-white focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>

                <!-- Offcanvas Mobile Menu -->
                <div x-show="open" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform -translate-x-full" x-transition:enter-end="opacity-100 transform translate-x-0" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 transform translate-x-0" x-transition:leave-end="opacity-0 transform -translate-x-full" class="fixed inset-0 bg-[#429b5f] bg-opacity-90 flex flex-col space-y-6 p-6 w-3/4 max-w-sm h-full z-50 shadow-lg" style="display: none;">
                    <button @click="open = false" class="absolute top-4 right-4 text-white focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>

                    <a href="{{ route('home') }}" class="text-white text-lg">Accueil</a>
                    <a href="{{ route('about') }}" class="text-white text-lg">À propos</a>
                    <a href="{{ route('projects') }}" class="text-white text-lg">Projets</a>
                    <a href="{{ route('services') }}" class="text-white text-lg">Services</a>
                    <a href="{{ route('resources') }}" class="text-white text-lg">Ressources</a>
                    <a href="{{ route('news') }}" class="text-white text-lg">Actualités</a>
                    <a href="{{ route('contact') }}" class="text-white text-lg">Contact</a>
                </div>
            </div>
        </div>
    </header>


    <!-- Main Content -->
    <main class="pb-12">
        <div class="container mx-auto px-4">
            @yield('content')
        </div>
    </main>

    <!-- Footer -->
    @include('layouts.footer')

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
