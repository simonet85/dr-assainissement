@extends('layouts.app')

@section('content')
<div class="container mx-auto py-12">
    <div class="bg-white shadow-lg rounded-lg p-8">
        <h2 class="text-3xl font-semibold mb-6">Create New Project</h2>

        <!-- Form for creating a new project -->
        <form action="{{ route('dashboard.projects.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text" id="title" name="title" class="block w-full mt-1 p-3 border border-gray-300 rounded-md focus:ring-[#429b5f]" required>
            </div>

            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea id="description" name="description" class="block w-full mt-1 p-3 border border-gray-300 rounded-md focus:ring-[#429b5f]" rows="5" required></textarea>
            </div>

            <div x-data="{ imageUrl: null }" class="mb-4">
                <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                <input type="file" id="image" name="image" class="block w-full mt-1 p-3 border border-gray-300 rounded-md focus:ring-[#429b5f]" @change="imageUrl = URL.createObjectURL($event.target.files[0])">

                <!-- Preview Image -->
                <div x-show="imageUrl" class="mt-4">
                    <img :src="imageUrl" alt="Image Preview" class="max-w-xs rounded-lg">
                </div>
            </div>


            <button type="submit" class="bg-[#429b5f] text-white font-bold py-3 px-6 rounded-md hover:bg-[#357a4d] transition">Create Project</button>
        </form>
    </div>
</div>
@endsection
