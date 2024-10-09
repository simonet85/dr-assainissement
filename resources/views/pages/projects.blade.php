@extends('layouts.app')

@section('content')
<div class="container mx-auto my-8" x-data="{ filter: 'all' }">
    <!-- Projects Page -->
    <div class="bg-gray-100">

        <!-- Hero Section for Projects -->
        <div class="bg-[#429b5f] py-12 text-center text-white">
            <h1 class="text-4xl font-bold">Nos Projets</h1>
            <p class="mt-4 text-xl">Découvrez nos initiatives pour améliorer l'assainissement et la salubrité dans la région.</p>
        </div>

        <!-- Filter Section using Alpine.js -->
        <div class="container mx-auto py-8 text-center">
            <button class="px-4 py-2 mx-2 bg-[#429b5f] text-white rounded-lg hover:bg-[#347f49]" @click="filter = 'all'">Tous</button>
            <button class="px-4 py-2 mx-2 bg-gray-200 text-[#429b5f] rounded-lg hover:bg-gray-300" @click="filter = 'assainissement'">Assainissement</button>
            <button class="px-4 py-2 mx-2 bg-gray-200 text-[#429b5f] rounded-lg hover:bg-gray-300" @click="filter = 'sensibilisation'">Sensibilisation</button>
            <button class="px-4 py-2 mx-2 bg-gray-200 text-[#429b5f] rounded-lg hover:bg-gray-300" @click="filter = 'dechets'">Déchets</button>
            <button class="px-4 py-2 mx-2 bg-gray-200 text-[#429b5f] rounded-lg hover:bg-gray-300" @click="filter = 'eau'">Eau</button>
        </div>

        <!-- Projects Grid Section -->
        <div class="container mx-auto py-12">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Project 1 (Assainissement) -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden" x-show="filter == 'all' || filter == 'assainissement'">
                    <img src="/images/project1.jpg" alt="Project 1" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h2 class="text-2xl font-semibold mb-4">Projet d'Assainissement Urbain</h2>
                        <p class="text-gray-700">Amélioration des infrastructures de gestion des eaux usées dans les zones urbaines.</p>
                        <a href="/projects/1" class="text-[#429b5f] hover:underline mt-4 block">Voir les détails</a>
                    </div>
                </div>

                <!-- Project 2 (Assainissement) -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden" x-show="filter == 'all' || filter == 'assainissement'">
                    <img src="/images/project5.jpg" alt="Project 5" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h2 class="text-2xl font-semibold mb-4">Réseau d'Assainissement</h2>
                        <p class="text-gray-700">Développement d'un réseau d'assainissement durable pour les zones rurales.</p>
                        <a href="/projects/5" class="text-[#429b5f] hover:underline mt-4 block">Voir les détails</a>
                    </div>
                </div>

                <!-- Project 3 (Sensibilisation) -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden" x-show="filter == 'all' || filter == 'sensibilisation'">
                    <img src="/images/project2.jpg" alt="Project 2" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h2 class="text-2xl font-semibold mb-4">Programme de Sensibilisation</h2>
                        <p class="text-gray-700">Éduquer la population sur l'importance de l'assainissement pour la santé publique.</p>
                        <a href="/projects/2" class="text-[#429b5f] hover:underline mt-4 block">Voir les détails</a>
                    </div>
                </div>

                <!-- Project 4 (Sensibilisation) -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden" x-show="filter == 'all' || filter == 'sensibilisation'">
                    <img src="/images/project6.jpg" alt="Project 6" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h2 class="text-2xl font-semibold mb-4">Atelier de Sensibilisation</h2>
                        <p class="text-gray-700">Organisation d'ateliers pour sensibiliser les jeunes aux enjeux de l'assainissement.</p>
                        <a href="/projects/6" class="text-[#429b5f] hover:underline mt-4 block">Voir les détails</a>
                    </div>
                </div>

                <!-- Project 5 (Déchets) -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden" x-show="filter == 'all' || filter == 'dechets'">
                    <img src="/images/project3.jpg" alt="Project 3" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h2 class="text-2xl font-semibold mb-4">Gestion des Déchets Solides</h2>
                        <p class="text-gray-700">Mise en place de systèmes efficaces pour la collecte et le traitement des déchets solides.</p>
                        <a href="/projects/3" class="text-[#429b5f] hover:underline mt-4 block">Voir les détails</a>
                    </div>
                </div>

                <!-- Project 6 (Déchets) -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden" x-show="filter == 'all' || filter == 'dechets'">
                    <img src="/images/project7.jpg" alt="Project 7" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h2 class="text-2xl font-semibold mb-4">Programme de Recyclage</h2>
                        <p class="text-gray-700">Implémentation d'un programme de recyclage pour réduire les déchets.</p>
                        <a href="/projects/7" class="text-[#429b5f] hover:underline mt-4 block">Voir les détails</a>
                    </div>
                </div>

                <!-- Project 7 (Eau) -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden" x-show="filter == 'all' || filter == 'eau'">
                    <img src="/images/project4.jpg" alt="Project 4" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h2 class="text-2xl font-semibold mb-4">Projet de Réhabilitation des Eaux</h2>
                        <p class="text-gray-700">Modernisation des systèmes de purification de l'eau dans les zones rurales.</p>
                        <a href="/projects/4" class="text-[#429b5f] hover:underline mt-4 block">Voir les détails</a>
                    </div>
                </div>

                <!-- Project 8 (Eau) -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden" x-show="filter == 'all' || filter == 'eau'">
                    <img src="/images/project8.jpg" alt="Project 8" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h2 class="text-2xl font-semibold mb-4">Accès à l'Eau Potable</h2>
                        <p class="text-gray-700">Projets pour améliorer l'accès à l'eau potable dans les villages.</p>
                        <a href="/projects/8" class="text-[#429b5f] hover:underline mt-4 block">Voir les détails</a>
                    </div>
                </div>

                <!-- Add more projects as needed -->

            </div>
        </div>

        <!-- Call to Action Section -->
        <div class="bg-[#429b5f] py-8 text-center text-white">
            <h2 class="text-3xl font-bold">Intéressé par nos projets ?</h2>
            <p class="mt-2 text-xl">Contactez-nous pour en savoir plus sur la participation et le soutien à nos initiatives.</p>
            <a href="/contact" class="mt-4 inline-block bg-white text-[#429b5f] font-bold py-3 px-6 rounded-lg hover:bg-gray-100 transition">Nous Contacter</a>
        </div>

    </div>
</div>
@endsection
