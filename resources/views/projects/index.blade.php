@extends('layouts.app')

@section('content')
<div class="container mx-auto my-8" x-data="{ filter: 'all' }">
    <!-- Projects Page -->
    <div class="bg-gray-100">

        <!-- Hero Section for Projects -->
        <div class="bg-[#429b5f] py-12 text-center text-white">
            <h1 class="text-4xl font-bold">Nos Projets</h1>
            <p class="mt-4 text-xl">Découvrez nos initiatives pour améliorer l'assainissement et la salubrité dans la région.</p>
        </div>

        <!-- Filter Section using Alpine.js -->
        <div class="container mx-auto py-8 text-center">
            <button class="px-4 py-2 mx-2 bg-[#429b5f] text-white rounded-lg hover:bg-[#347f49]" @click="filter = 'all'">Tous</button>
            <button class="px-4 py-2 mx-2 bg-gray-200 text-[#429b5f] rounded-lg hover:bg-gray-300" @click="filter = 'assainissement'">Assainissement</button>
            <button class="px-4 py-2 mx-2 bg-gray-200 text-[#429b5f] rounded-lg hover:bg-gray-300" @click="filter = 'sensibilisation'">Sensibilisation</button>
            <button class="px-4 py-2 mx-2 bg-gray-200 text-[#429b5f] rounded-lg hover:bg-gray-300" @click="filter = 'dechets'">Déchets</button>
            <button class="px-4 py-2 mx-2 bg-gray-200 text-[#429b5f] rounded-lg hover:bg-gray-300" @click="filter = 'eau'">Eau</button>
        </div>

        <!-- Projects Grid Section -->
        <div class="container mx-auto py-12">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($projects as $project)
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden" 
                        x-show="filter == 'all' || filter == '{{ strtolower($project->category) }}'">
                        <!-- Project Image -->
                        @if($project->image)
                            <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" class="w-full h-48 object-cover">
                        @else
                            <img src="{{ asset('images/default-project.jpg') }}" alt="Default Image" class="w-full h-48 object-cover">
                        @endif
                        
                        <!-- Project Details -->
                        <div class="p-6">
                            <h2 class="text-2xl font-semibold mb-4">{{ $project->title }}</h2>
                            <p class="text-gray-700">{{ Str::limit($project->description, 100) }}</p>
                            <a href="{{ route('projects.show', $project->id) }}" class="text-[#429b5f] hover:underline mt-4 block">Voir les détails</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Call to Action Section -->
        <div class="bg-[#429b5f] py-8 text-center text-white">
            <h2 class="text-3xl font-bold">Intéressé par nos projets ?</h2>
            <p class="mt-2 text-xl">Contactez-nous pour en savoir plus sur la participation et le soutien à nos initiatives.</p>
            <a href="/contact" class="mt-4 inline-block bg-white text-[#429b5f] font-bold py-3 px-6 rounded-lg hover:bg-gray-100 transition">Nous Contacter</a>
        </div>
    </div>
</div>
@endsection
