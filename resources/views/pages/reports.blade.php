@extends('layouts.app')

@section('content')
<div class="container mx-auto my-8">
    <!-- Reports Page -->
    <div class="bg-gray-100">
        
        <!-- Hero Section -->
        <div class="bg-[#429b5f] py-12 text-center text-white">
            <h1 class="text-4xl font-bold">Rapports</h1>
            <p class="mt-4 text-xl">Consultez nos rapports détaillés sur l’état de l’assainissement et des projets en cours.</p>
        </div>

        <!-- Reports Section -->
        <div class="container mx-auto py-12">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <!-- Report 1 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="/images/report1.jpg" alt="Rapport annuel" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h2 class="text-2xl font-semibold mb-4">Rapport Annuel 2023</h2>
                        <p class="text-gray-700">Un aperçu des activités, des projets et des résultats de l'année 2023.</p>
                        <a href="#" class="text-[#429b5f] hover:underline mt-4 block">Télécharger le rapport</a>
                    </div>
                </div>

                <!-- Report 2 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="/images/report2.jpg" alt="Rapport sur les infrastructures" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h2 class="text-2xl font-semibold mb-4">Infrastructures d'Assainissement</h2>
                        <p class="text-gray-700">État des infrastructures d'assainissement dans les zones urbaines.</p>
                        <a href="#" class="text-[#429b5f] hover:underline mt-4 block">Télécharger le rapport</a>
                    </div>
                </div>

                <!-- More Reports -->
                <!-- Add similar blocks for more reports -->

            </div>
        </div>

    </div>
</div>
@endsection
