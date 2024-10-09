@extends('layouts.app')

@section('content')
<div class="container mx-auto my-8">
    <!-- Articles Page -->
    <div class="bg-gray-100">
        
        <!-- Hero Section -->
        <div class="bg-[#429b5f] py-12 text-center text-white">
            <h1 class="text-4xl font-bold">Articles et Recherches</h1>
            <p class="mt-4 text-xl">Lisez nos articles et recherches sur les innovations en matière de salubrité.</p>
        </div>

        <!-- Articles Section -->
        <div class="container mx-auto py-12">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <!-- Article 1 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="/images/article1.jpg" alt="Article sur l'innovation" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h2 class="text-2xl font-semibold mb-4">L'Innovation en Assainissement</h2>
                        <p class="text-gray-700">Exploration des nouvelles technologies pour la gestion des eaux usées.</p>
                        <a href="#" class="text-[#429b5f] hover:underline mt-4 block">Lire l'article</a>
                    </div>
                </div>

                <!-- Article 2 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="/images/article2.jpg" alt="Recherche sur la salubrité" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h2 class="text-2xl font-semibold mb-4">Recherches sur la Salubrité</h2>
                        <p class="text-gray-700">Étude sur l'impact des initiatives de salubrité sur la santé publique.</p>
                        <a href="#" class="text-[#429b5f] hover:underline mt-4 block">Lire l'article</a>
                    </div>
                </div>

                <!-- More Articles -->
                <!-- Add similar blocks for more articles -->

            </div>
        </div>

    </div>
</div>
@endsection
