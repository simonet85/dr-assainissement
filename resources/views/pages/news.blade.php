@extends('layouts.app')

@section('content')
<div class="container mx-auto my-8">
    <!-- News Page -->
    <div class="bg-gray-100">

        <!-- Hero Section for News -->
        <div class="bg-[#429b5f] py-12 text-center text-white">
            <h1 class="text-4xl font-bold">Actualités</h1>
            <p class="mt-4 text-xl">Restez informé des dernières nouvelles et annonces concernant nos activités.</p>
        </div>

        <!-- News Articles Grid Section -->
        <div class="container mx-auto py-12">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- News Article 1 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="/images/news1.jpg" alt="Actualité 1" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h2 class="text-2xl font-semibold mb-2">Titre de l'actualité 1</h2>
                        <p class="text-gray-500 text-sm mb-4">Publié le 10 Octobre 2024</p>
                        <p class="text-gray-700">Un aperçu de l'actualité avec des détails rapides.</p>
                        <a href="/news/article1" class="text-[#429b5f] hover:underline mt-4 block">Lire la suite</a>
                    </div>
                </div>

                <!-- News Article 2 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="/images/news2.jpg" alt="Actualité 2" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h2 class="text-2xl font-semibold mb-2">Titre de l'actualité 2</h2>
                        <p class="text-gray-500 text-sm mb-4">Publié le 15 Octobre 2024</p>
                        <p class="text-gray-700">Brève description de la nouvelle pour donner plus d'informations.</p>
                        <a href="/news/article2" class="text-[#429b5f] hover:underline mt-4 block">Lire la suite</a>
                    </div>
                </div>

                <!-- News Article 3 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="/images/news3.jpg" alt="Actualité 3" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h2 class="text-2xl font-semibold mb-2">Titre de l'actualité 3</h2>
                        <p class="text-gray-500 text-sm mb-4">Publié le 20 Octobre 2024</p>
                        <p class="text-gray-700">Une description de l'actualité avec des détails succincts.</p>
                        <a href="/news/article3" class="text-[#429b5f] hover:underline mt-4 block">Lire la suite</a>
                    </div>
                </div>

                <!-- Additional news articles can be added in the same structure -->

            </div>
        </div>

        <!-- Call to Action Section -->
        <div class="bg-[#429b5f] py-8 text-center text-white">
            <h2 class="text-3xl font-bold">Restez connecté</h2>
            <p class="mt-2 text-xl">Abonnez-vous à notre newsletter pour recevoir les dernières nouvelles directement dans votre boîte mail.</p>
            <a href="/subscribe" class="mt-4 inline-block bg-white text-[#429b5f] font-bold py-3 px-6 rounded-lg hover:bg-gray-100 transition">S'abonner</a>
        </div>

    </div>
</div>
@endsection
