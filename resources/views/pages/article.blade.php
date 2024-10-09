@extends('layouts.app')

@section('content')
<div class="container mx-auto my-8">
    <!-- Single News Article Page -->
    <div class="bg-gray-100">

        <!-- Hero Section for News Article -->
        <div class="bg-[#429b5f] py-12 text-center text-white">
            <h1 class="text-4xl font-bold">Titre de l'actualité 1</h1>
            <p class="mt-4 text-sm">Publié le 10 Octobre 2024</p>
        </div>

        <!-- Article Content -->
        <div class="container mx-auto py-12 max-w-4xl">
            <img src="/images/news1.jpg" alt="Image d'actualité" class="w-full h-auto mb-6 rounded-lg shadow-lg">
            <p class="text-gray-700 text-lg leading-relaxed mb-4">
                Voici le contenu complet de l'actualité. Il comprend les détails approfondis, les informations pertinentes, et les éléments importants sur cette nouvelle. Vous pouvez lire et rester informé des derniers développements.
            </p>

            <p class="text-gray-700 text-lg leading-relaxed mb-4">
                Des paragraphes supplémentaires fournissent un contexte plus large, des citations, et des informations qui permettent d’approfondir le sujet couvert par cette actualité.
            </p>

            <!-- Call to Action Section -->
            <div class="bg-[#429b5f] py-8 text-center text-white mt-12">
                <h2 class="text-3xl font-bold">Partagez cette actualité</h2>
                <p class="mt-2 text-xl">Faites passer le message et partagez cette actualité avec votre réseau.</p>
                <a href="#" class="mt-4 inline-block bg-white text-[#429b5f] font-bold py-3 px-6 rounded-lg hover:bg-gray-100 transition">Partager</a>
            </div>
        </div>

    </div>
</div>
@endsection
