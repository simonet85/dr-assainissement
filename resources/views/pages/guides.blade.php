@extends('layouts.app')

@section('content')
<div class="container mx-auto my-8">
    <!-- Guides Page -->
    <div class="bg-gray-100">
        
        <!-- Hero Section -->
        <div class="bg-[#429b5f] py-12 text-center text-white">
            <h1 class="text-4xl font-bold">Guides et Manuels</h1>
            <p class="mt-4 text-xl">Téléchargez nos guides et manuels pour mieux comprendre les pratiques d’assainissement.</p>
        </div>

        <!-- Guides Section -->
        <div class="container mx-auto py-12">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <!-- Guide 1 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="/images/guide1.jpg" alt="Guide sur la gestion des eaux" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h2 class="text-2xl font-semibold mb-4">Gestion des Eaux Usées</h2>
                        <p class="text-gray-700">Un guide complet sur la gestion des eaux usées pour les systèmes d'assainissement.</p>
                        <a href="#" class="text-[#429b5f] hover:underline mt-4 block">Télécharger le guide</a>
                    </div>
                </div>

                <!-- Guide 2 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="/images/guide2.jpg" alt="Guide sur la collecte des déchets" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h2 class="text-2xl font-semibold mb-4">Collecte des Déchets</h2>
                        <p class="text-gray-700">Un manuel pour améliorer les processus de collecte et gestion des déchets.</p>
                        <a href="#" class="text-[#429b5f] hover:underline mt-4 block">Télécharger le manuel</a>
                    </div>
                </div>

                <!-- Guide 3 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="/images/guide3.jpg" alt="Guide sur le traitement des eaux" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h2 class="text-2xl font-semibold mb-4">Traitement des Eaux</h2>
                        <p class="text-gray-700">Ce guide offre des solutions pour le traitement des eaux usées en milieu urbain.</p>
                        <a href="#" class="text-[#429b5f] hover:underline mt-4 block">Télécharger le guide</a>
                    </div>
                </div>

                <!-- More Guides -->
                <!-- Add similar blocks for more guides -->

            </div>
        </div>

    </div>
</div>
@endsection
