@extends('layouts.app')

@section('content')
<div class="container mx-auto my-8">
    <!-- Regulations Page -->
    <div class="bg-gray-100">
        
        <!-- Hero Section -->
        <div class="bg-[#429b5f] py-12 text-center text-white">
            <h1 class="text-4xl font-bold">Normes et Réglementations</h1>
            <p class="mt-4 text-xl">Consultez les normes et réglementations en vigueur pour les projets d’assainissement.</p>
        </div>

        <!-- Regulations Section -->
        <div class="container mx-auto py-12">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <!-- Regulation 1 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="/images/regulation1.jpg" alt="Réglementation sur l'évacuation des eaux" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h2 class="text-2xl font-semibold mb-4">Évacuation des Eaux Usées</h2>
                        <p class="text-gray-700">Les règles et normes pour l'évacuation sécurisée des eaux usées.</p>
                        <a href="#" class="text-[#429b5f] hover:underline mt-4 block">Lire la réglementation</a>
                    </div>
                </div>

                <!-- Regulation 2 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="/images/regulation2.jpg" alt="Réglementation sur la qualité de l'eau" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h2 class="text-2xl font-semibold mb-4">Qualité de l'Eau</h2>
                        <p class="text-gray-700">Réglementations sur la qualité des eaux dans les systèmes d’assainissement.</p>
                        <a href="#" class="text-[#429b5f] hover:underline mt-4 block">Lire la réglementation</a>
                    </div>
                </div>

                <!-- More Regulations -->
                <!-- Add similar blocks for more regulations -->

            </div>
        </div>

    </div>
</div>
@endsection
