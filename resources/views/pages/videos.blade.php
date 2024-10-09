@extends('layouts.app')

@section('content')
<div class="container mx-auto my-8">
    <!-- Videos Page -->
    <div class="bg-gray-100">
        
        <!-- Hero Section -->
        <div class="bg-[#429b5f] py-12 text-center text-white">
            <h1 class="text-4xl font-bold">Vidéos</h1>
            <p class="mt-4 text-xl">Regardez des vidéos éducatives et informatives sur nos projets et initiatives.</p>
        </div>

        <!-- Videos Section -->
        <div class="container mx-auto py-12">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <!-- Video 1 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="/images/video1.jpg" alt="Vidéo sur la gestion des déchets" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h2 class="text-2xl font-semibold mb-4">Gestion des Déchets</h2>
                        <p class="text-gray-700">Découvrez nos initiatives pour un meilleur système de gestion des déchets.</p>
                        <a href="#" class="text-[#429b5f] hover:underline mt-4 block">Regarder la vidéo</a>
                    </div>
                </div>

                <!-- Video 2 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="/images/video2.jpg" alt="Vidéo sur l'urbanisme" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h2 class="text-2xl font-semibold mb-4">Urbanisme et Assainissement</h2>
                        <p class="text-gray-700">Comment planifier des villes durables avec des systèmes d'assainissement efficaces.</p>
                        <a href="#" class="text-[#429b5f] hover:underline mt-4 block">Regarder la vidéo</a>
                    </div>
                </div>

                <!-- More Videos -->
                <!-- Add similar blocks for more videos -->

            </div>
        </div>

    </div>
</div>
@endsection
