@extends('layouts.app')

@section('content')
<div class="container mx-auto my-8">
    <!-- Resources Page -->
    <div class="bg-gray-100">

        <!-- Hero Section for Resources -->
        <div class="bg-[#429b5f] py-12 text-center text-white">
            <h1 class="text-4xl font-bold">Ressources</h1>
            <p class="mt-4 text-xl">Accédez à une variété de ressources pour vous informer et agir en matière d’assainissement et de salubrité.</p>
        </div>

        <!-- Resources Grid Section -->
        <div class="container mx-auto py-12">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Resource Category 1 -->
                <div class="bg-white shadow-lg hover:shadow-xl transition-shadow duration-300 rounded-lg overflow-hidden">
                    <img src="/images/resource1.jpg" alt="Guides et Manuels" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h2 class="text-2xl font-semibold mb-4 text-gray-800">Guides et Manuels</h2>
                        <p class="text-gray-600">Téléchargez nos guides et manuels pour mieux comprendre les pratiques d’assainissement.</p>
                        <a href="/resources/guides" class="text-[#429b5f] hover:text-[#2b7c4e] hover:underline mt-4 block">Accéder aux guides</a>
                    </div>
                </div>

                <!-- Resource Category 2 -->
                <div class="bg-white shadow-lg hover:shadow-xl transition-shadow duration-300 rounded-lg overflow-hidden">
                    <img src="/images/resource2.jpg" alt="Rapports" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h2 class="text-2xl font-semibold mb-4 text-gray-800">Rapports</h2>
                        <p class="text-gray-600">Consultez nos rapports détaillés sur l’état de l’assainissement et des projets en cours.</p>
                        <a href="/resources/reports" class="text-[#429b5f] hover:text-[#2b7c4e] hover:underline mt-4 block">Voir les rapports</a>
                    </div>
                </div>

                <!-- Resource Category 3 -->
                <div class="bg-white shadow-lg hover:shadow-xl transition-shadow duration-300 rounded-lg overflow-hidden">
                    <img src="/images/resource3.jpg" alt="Articles et Recherches" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h2 class="text-2xl font-semibold mb-4 text-gray-800">Articles et Recherches</h2>
                        <p class="text-gray-600">Lisez nos articles et recherches sur les innovations en matière de salubrité.</p>
                        <a href="/resources/articles" class="text-[#429b5f] hover:text-[#2b7c4e] hover:underline mt-4 block">Voir les articles</a>
                    </div>
                </div>

                <!-- Resource Category 4 -->
                <div class="bg-white shadow-lg hover:shadow-xl transition-shadow duration-300 rounded-lg overflow-hidden">
                    <img src="/images/resource4.jpg" alt="Formulaires" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h2 class="text-2xl font-semibold mb-4 text-gray-800">Formulaires</h2>
                        <p class="text-gray-600">Téléchargez des formulaires pour vos demandes liées à l’assainissement.</p>
                        <a href="/resources/forms" class="text-[#429b5f] hover:text-[#2b7c4e] hover:underline mt-4 block">Accéder aux formulaires</a>
                    </div>
                </div>

                <!-- Resource Category 5 -->
                <div class="bg-white shadow-lg hover:shadow-xl transition-shadow duration-300 rounded-lg overflow-hidden">
                    <img src="/images/resource5.jpg" alt="Vidéos" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h2 class="text-2xl font-semibold mb-4 text-gray-800">Vidéos</h2>
                        <p class="text-gray-600">Regardez des vidéos éducatives et informatives sur nos projets et initiatives.</p>
                        <a href="/resources/videos" class="text-[#429b5f] hover:text-[#2b7c4e] hover:underline mt-4 block">Voir les vidéos</a>
                    </div>
                </div>

                <!-- Resource Category 6 -->
                <div class="bg-white shadow-lg hover:shadow-xl transition-shadow duration-300 rounded-lg overflow-hidden">
                    <img src="/images/resource6.jpg" alt="Normes et Réglementations" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h2 class="text-2xl font-semibold mb-4 text-gray-800">Normes et Réglementations</h2>
                        <p class="text-gray-600">Consultez les normes et réglementations en vigueur pour les projets d’assainissement.</p>
                        <a href="/resources/regulations" class="text-[#429b5f] hover:text-[#2b7c4e] hover:underline mt-4 block">Voir les normes</a>
                    </div>
                </div>

            </div>
        </div>

        <!-- Call to Action Section -->
        <div class="bg-[#429b5f] py-8 text-center text-white">
            <h2 class="text-3xl font-bold">Besoin de plus d'informations ?</h2>
            <p class="mt-2 text-xl">Contactez-nous pour obtenir des renseignements supplémentaires sur les ressources disponibles.</p>
            <a href="/contact" class="mt-4 inline-block bg-white text-[#429b5f] font-bold py-3 px-6 rounded-lg hover:bg-gray-100 transition">Nous Contacter</a>
        </div>

    </div>

</div>
@endsection
