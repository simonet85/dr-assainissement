@extends('layouts.app')

@section('content')
<div class="container mx-auto my-8">
    <div class="flex flex-col lg:flex-row">
        <!-- Sidebar Navigation -->
        <nav class="bg-white shadow-lg rounded-lg mb-8 lg:w-1/4 lg:mr-8">
            <div class="py-4">
                <h2 class="text-xl font-bold text-center mb-4">Menu</h2>
                <ul class="flex flex-col space-y-2">
                    <li><a href="/home" class="block py-2 px-4 text-[#429b5f] hover:bg-gray-100 rounded">Accueil</a></li>
                    <li><a href="/about" class="block py-2 px-4 text-[#429b5f] hover:bg-gray-100 rounded">À propos</a></li>
                    <li><a href="/projects" class="block py-2 px-4 text-[#429b5f] hover:bg-gray-100 rounded">Projets</a></li>
                    <li><a href="/services" class="block py-2 px-4 text-[#429b5f] hover:bg-gray-100 rounded">Services</a></li>
                    <li><a href="/resources" class="block py-2 px-4 text-[#429b5f] hover:bg-gray-100 rounded">Ressources</a></li>
                    <li><a href="/news" class="block py-2 px-4 text-[#429b5f] hover:bg-gray-100 rounded">Actualités</a></li>
                    <li><a href="/notifications" class="block py-2 px-4 text-[#429b5f] hover:bg-gray-100 rounded">Notifications</a></li>
                    <li><a href="/messages" class="block py-2 px-4 text-[#429b5f] hover:bg-gray-100 rounded">Messages</a></li>
                </ul>
            </div>
        </nav>

        <!-- Main Dashboard Content -->
        <div class="bg-gray-100 rounded-lg flex-grow">
            <!-- Hero Section for Dashboard -->
            <div class="bg-[#429b5f] py-12 text-center text-white">
                <h1 class="text-4xl font-bold">Tableau de Bord</h1>
                <p class="mt-4 text-xl">Votre point de référence pour toutes les activités.</p>
            </div>

            <!-- Overview Cards Section -->
            <div class="container mx-auto py-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Card 1: Total Projects -->
                <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                    <h3 class="text-2xl font-semibold">Projets Totaux</h3>
                    <p class="mt-2 text-4xl font-bold">150</p>
                    <p class="text-gray-700">Projets en cours</p>
                </div>

                <!-- Card 2: Completed Tasks -->
                <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                    <h3 class="text-2xl font-semibold">Tâches Complètes</h3>
                    <p class="mt-2 text-4xl font-bold">75</p>
                    <p class="text-gray-700">Tâches réalisées cette semaine</p>
                </div>

                <!-- Card 3: New Messages -->
                <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                    <h3 class="text-2xl font-semibold">Nouveaux Messages</h3>
                    <p class="mt-2 text-4xl font-bold">10</p>
                    <p class="text-gray-700">Messages non lus</p>
                </div>
            </div>

            <!-- Recent Activities Section -->
            <div class="container mx-auto py-12">
                <h2 class="text-3xl font-semibold mb-6">Activités Récentes</h2>
                <table class="min-w-full bg-white shadow-lg rounded-lg">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="py-3 px-4 text-left">Date</th>
                            <th class="py-3 px-4 text-left">Activité</th>
                            <th class="py-3 px-4 text-left">Statut</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="py-3 px-4">1 Octobre 2024</td>
                            <td class="py-3 px-4">Démarrage du projet A</td>
                            <td class="py-3 px-4 text-green-600">En cours</td>
                        </tr>
                        <tr class="bg-gray-100">
                            <td class="py-3 px-4">5 Octobre 2024</td>
                            <td class="py-3 px-4">Réunion d'équipe</td>
                            <td class="py-3 px-4 text-green-600">Terminée</td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4">10 Octobre 2024</td>
                            <td class="py-3 px-4">Soumission du rapport B</td>
                            <td class="py-3 px-4 text-red-600">À revoir</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Quick Actions Section -->
            <div class="bg-gray-200 py-8">
                <h2 class="text-3xl font-semibold text-center">Actions Rapides</h2>
                <div class="container mx-auto py-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                        <h3 class="text-xl font-semibold">Créer un Nouveau Projet</h3>
                        <a href="/projects/create" class="mt-4 inline-block bg-[#429b5f] text-white font-bold py-2 px-4 rounded hover:bg-[#357a4d] transition">Créer</a>
                    </div>
                    <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                        <h3 class="text-xl font-semibold">Voir les Messages</h3>
                        <a href="/messages" class="mt-4 inline-block bg-[#429b5f] text-white font-bold py-2 px-4 rounded hover:bg-[#357a4d] transition">Voir</a>
                    </div>
                    <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                        <h3 class="text-xl font-semibold">Gérer les Tâches</h3>
                        <a href="/tasks" class="mt-4 inline-block bg-[#429b5f] text-white font-bold py-2 px-4 rounded hover:bg-[#357a4d] transition">Gérer</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
