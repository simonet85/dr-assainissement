@extends('layouts.app')

@section('content')
<div class="container mx-auto my-8">
    <!-- Forms Page -->
    <div class="bg-gray-100">
        
        <!-- Hero Section -->
        <div class="bg-[#429b5f] py-12 text-center text-white">
            <h1 class="text-4xl font-bold">Formulaires</h1>
            <p class="mt-4 text-xl">Téléchargez des formulaires pour vos demandes liées à l’assainissement.</p>
        </div>

        <!-- Forms Section -->
        <div class="container mx-auto py-12">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <!-- Form 1 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="/images/form1.jpg" alt="Formulaire de demande de service" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h2 class="text-2xl font-semibold mb-4">Demande de Service</h2>
                        <p class="text-gray-700">Remplissez ce formulaire pour toute demande de service d'assainissement.</p>
                        <a href="#" class="text-[#429b5f] hover:underline mt-4 block">Télécharger le formulaire</a>
                    </div>
                </div>

                <!-- Form 2 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="/images/form2.jpg" alt="Formulaire de réclamation" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h2 class="text-2xl font-semibold mb-4">Formulaire de Réclamation</h2>
                        <p class="text-gray-700">Déposez une réclamation concernant les services d'assainissement.</p>
                        <a href="#" class="text-[#429b5f] hover:underline mt-4 block">Télécharger le formulaire</a>
                    </div>
                </div>

                <!-- More Forms -->
                <!-- Add similar blocks for more forms -->

            </div>
        </div>

    </div>
</div>
@endsection
