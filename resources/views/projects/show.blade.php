@extends('layouts.app')

@section('content')
<div class="container mx-auto py-12">
    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        @if($project->image)
            <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" class="w-full h-64 object-cover">
        @else
            <img src="{{ asset('images/default-project.jpg') }}" alt="Default Image" class="w-full h-64 object-cover">
        @endif

        <div class="p-6">
            <h1 class="text-4xl font-bold mb-6">{{ $project->title }}</h1>
            <p class="text-gray-700">{{ $project->description }}</p>
            <a href="{{ route('projects.index') }}" class="block mt-8 bg-[#429b5f] text-white text-center py-2 rounded hover:bg-[#357a4d] transition">Retour à la liste des projets</a>
        </div>
    </div>
</div>
@endsection
