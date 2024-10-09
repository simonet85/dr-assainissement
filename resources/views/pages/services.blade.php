@extends('layouts.app')

@section('content')
<div class="container mx-auto my-8">
    <!-- Services Page -->
    <div class="bg-gray-100">

        <!-- Hero Section for Services -->
        <div class="bg-[#429b5f] py-12 text-center text-white">
            <h1 class="text-4xl font-bold">Nos Services</h1>
            <p class="mt-4 text-xl">Explorez les services que nous offrons pour assurer la salubrité et l'assainissement dans la région.</p>
        </div>

        <!-- Services Grid Section -->
        <div class="container mx-auto py-12">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Service 1 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="/images/service1.jpg" alt="Gestion des Eaux Usées" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h2 class="text-2xl font-semibold mb-4">Gestion des Eaux Usées</h2>
                        <p class="text-gray-700">Nous assurons la gestion des eaux usées pour préserver la santé publique et l'environnement.</p>
                        <a href="/services/1" class="text-[#429b5f] hover:underline mt-4 block">En savoir plus</a>
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="/images/service2.jpg" alt="Collecte des Déchets" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h2 class="text-2xl font-semibold mb-4">Collecte des Déchets</h2>
                        <p class="text-gray-700">Service de collecte et traitement des déchets pour un environnement propre et sain.</p>
                        <a href="/services/2" class="text-[#429b5f] hover:underline mt-4 block">En savoir plus</a>
                    </div>
                </div>

                <!-- Service 3 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="/images/service3.jpg" alt="Planification Urbaine" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h2 class="text-2xl font-semibold mb-4">Planification Urbaine</h2>
                        <p class="text-gray-700">Nous aidons à la planification des infrastructures d'assainissement dans les zones urbaines.</p>
                        <a href="/services/3" class="text-[#429b5f] hover:underline mt-4 block">En savoir plus</a>
                    </div>
                </div>

                <!-- Service 4 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="/images/service4.jpg" alt="Réhabilitation des Réseaux" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h2 class="text-2xl font-semibold mb-4">Réhabilitation des Réseaux</h2>
                        <p class="text-gray-700">Modernisation des réseaux d'égouts et d'infrastructures d'assainissement.</p>
                        <a href="/services/4" class="text-[#429b5f] hover:underline mt-4 block">En savoir plus</a>
                    </div>
                </div>

                <!-- Service 5 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="/images/service5.jpg" alt="Sensibilisation Publique" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h2 class="text-2xl font-semibold mb-4">Sensibilisation Publique</h2>
                        <p class="text-gray-700">Campagnes de sensibilisation pour éduquer le public sur les pratiques d'hygiène et d'assainissement.</p>
                        <a href="/services/5" class="text-[#429b5f] hover:underline mt-4 block">En savoir plus</a>
                    </div>
                </div>

                <!-- Service 6 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="/images/service6.jpg" alt="Contrôle de la Pollution" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h2 class="text-2xl font-semibold mb-4">Contrôle de la Pollution</h2>
                        <p class="text-gray-700">Surveillance et contrôle des sources de pollution pour préserver l'environnement.</p>
                        <a href="/services/6" class="text-[#429b5f] hover:underline mt-4 block">En savoir plus</a>
                    </div>
                </div>

            </div>
        </div>

        <!-- Call to Action Section -->
        <div class="bg-[#429b5f] py-8 text-center text-white">
            <h2 class="text-3xl font-bold">Intéressé par nos services ?</h2>
            <p class="mt-2 text-xl">Contactez-nous pour en savoir plus sur la façon dont nous pouvons vous aider.</p>
            <a href="/contact" class="mt-4 inline-block bg-white text-[#429b5f] font-bold py-3 px-6 rounded-lg hover:bg-gray-100 transition">Nous Contacter</a>
        </div>

    </div>

</div>
@endsection
