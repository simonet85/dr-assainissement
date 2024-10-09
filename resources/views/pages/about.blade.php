@extends('layouts.app')

@section('content')
<div class="container mx-auto my-8">
    <!-- À propos de nous -->
    <main class="py-8 bg-gray-100">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Introduction Section -->
            <section class="text-center mb-12 px-2">
                <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold text-[#429b5f] mb-4">À Propos de Nous</h1>
                <p class="text-base sm:text-lg md:text-xl text-gray-700">Découvrez notre engagement pour l'amélioration de l'assainissement et la salubrité dans la région du Sud-Comoé.</p>
            </section>

            <!-- Mission and Vision Section with Alpine.js Toggle -->
            <section class="bg-white p-6 md:p-8 rounded-lg shadow-lg mb-12">
                <h2 class="text-2xl md:text-3xl font-bold text-[#429b5f] mb-4">Notre Mission et Vision</h2>
                <div x-data="{ open: true }">
                    <button @click="open = !open" class="text-sm text-[#429b5f] underline focus:outline-none">
                        <span x-text="open ? 'Cacher' : 'Montrer'"></span> les détails
                    </button>
                    <div x-show="open" x-transition class="mt-4">
                        <p class="text-base sm:text-lg text-gray-700 mb-6">Notre mission est d'améliorer la qualité de vie des résidents en mettant en œuvre des projets d'assainissement durable, tout en préservant les ressources naturelles et en sensibilisant les populations.</p>
                        <p class="text-base sm:text-lg text-gray-700">Notre vision est de faire de la région du Sud-Comoé un modèle de gestion environnementale, avec des communautés résilientes et des infrastructures respectueuses de l'environnement.</p>
                    </div>
                </div>
            </section>

            <!-- Our History Section -->
            <section class="mb-12">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8">
                    <div>
                        <h2 class="text-2xl md:text-3xl font-bold text-[#429b5f] mb-4">Notre Histoire</h2>
                        <p class="text-base sm:text-lg text-gray-700 mb-6">Depuis notre création en 2005, nous avons réalisé plus de 100 projets d'assainissement à travers la région. Grâce à la collaboration avec les autorités locales, les ONG et les partenaires internationaux, nous avons transformé des centaines de communautés en améliorant leur accès à des infrastructures sanitaires.</p>
                        <p class="text-base sm:text-lg text-gray-700">Chaque projet que nous entreprenons repose sur une analyse approfondie des besoins locaux, garantissant que nos solutions soient à la fois durables et adaptées aux réalités socio-économiques de chaque localité.</p>
                    </div>
                    <div>
                        <img src="/images/history.jpg" alt="Notre Histoire" class="rounded-lg shadow-lg w-full object-cover">
                    </div>
                </div>
            </section>

            <!-- Our Values Section with Alpine.js Toggle -->
            <section class="bg-white p-6 md:p-8 rounded-lg shadow-lg mb-12">
                <h2 class="text-2xl md:text-3xl font-bold text-[#429b5f] mb-4">Nos Valeurs</h2>
                <div x-data="{ open: true }">
                    <button @click="open = !open" class="text-sm text-[#429b5f] underline focus:outline-none">
                        <span x-text="open ? 'Cacher' : 'Montrer'"></span> les valeurs
                    </button>
                    <div x-show="open" x-transition class="mt-4">
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                            <div class="text-center">
                                <h3 class="text-xl font-semibold text-gray-800 mb-2">Durabilité</h3>
                                <p class="text-gray-700">Nos projets sont conçus pour offrir des solutions pérennes qui contribuent à la protection de l'environnement et des ressources naturelles.</p>
                            </div>
                            <div class="text-center">
                                <h3 class="text-xl font-semibold text-gray-800 mb-2">Innovation</h3>
                                <p class="text-gray-700">Nous mettons l'innovation au cœur de nos projets pour développer des solutions techniques adaptées aux défis locaux.</p>
                            </div>
                            <div class="text-center">
                                <h3 class="text-xl font-semibold text-gray-800 mb-2">Engagement Communautaire</h3>
                                <p class="text-gray-700">Nous croyons fermement que l'implication des communautés locales est essentielle au succès et à la durabilité de nos projets.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Our Team Section with Alpine.js Modal -->
            <section class="mb-12">
                <h2 class="text-2xl md:text-3xl font-bold text-[#429b5f] mb-8 text-center">Notre Équipe</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                    <!-- Team Member 1 -->
                    <div class="bg-white p-6 rounded-lg shadow-lg text-center" x-data="{ showDetails: false }">
                        <img src="/images/team1.jpg" alt="Jean Dupont" class="w-24 h-24 sm:w-28 sm:h-28 md:w-32 md:h-32 object-cover rounded-full mx-auto mb-4">
                        <h3 class="text-lg sm:text-xl font-bold text-gray-800">Jean Dupont</h3>
                        <p class="text-gray-700">Directeur Général</p>
                        <button @click="showDetails = true" class="text-sm text-[#429b5f] underline">Voir plus</button>
                        <!-- Modal for Team Details -->
                        <div x-show="showDetails" x-transition class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 p-4">
                            <div class="bg-white rounded-lg shadow-lg p-8 text-center w-full max-w-md">
                                <h3 class="text-lg sm:text-xl font-bold text-gray-800 mb-4">Jean Dupont - Directeur Général</h3>
                                <p class="text-gray-700">Jean supervise toutes les opérations de l'organisation et s'assure que nous restons alignés sur notre mission et vision.</p>
                                <button @click="showDetails = false" class="mt-4 text-[#429b5f] underline">Fermer</button>
                            </div>
                        </div>
                    </div>
                    <!-- Repeat for other team members -->
                </div>
            </section>

            <!-- Gallery Section -->
            <section class="mb-12">
                <h2 class="text-2xl md:text-3xl font-bold text-[#429b5f] mb-8 text-center">Galerie</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                    <img src="/images/gallery1.jpg" alt="Galerie 1" class="rounded-lg shadow-lg object-cover w-full">
                    <img src="/images/gallery2.jpg" alt="Galerie 2" class="rounded-lg shadow-lg object-cover w-full">
                    <img src="/images/gallery3.jpg" alt="Galerie 3" class="rounded-lg shadow-lg object-cover w-full">
                    <img src="/images/gallery4.jpg" alt="Galerie 4" class="rounded-lg shadow-lg object-cover w-full">
                </div>
            </section>
        </div>
    </main>
</div>
@endsection
