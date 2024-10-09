@extends('layouts.app')

@section('content')
<div class="container mx-auto my-8">
    <!-- Contact Page -->
    <div class="bg-gray-100">

        <!-- Hero Section for Contact -->
        <div class="bg-[#429b5f] py-12 text-center text-white">
            <h1 class="text-4xl font-bold">Contactez-nous</h1>
            <p class="mt-4 text-xl">Nous serons ravis de répondre à toutes vos questions.</p>
        </div>

        <!-- Contact Form Section -->
        <div class="container mx-auto py-12">
            <div class="bg-white shadow-lg rounded-lg p-8 max-w-2xl mx-auto">
                <h2 class="text-3xl font-semibold mb-6">Formulaire de Contact</h2>
                <form action="#" method="POST">
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700">Nom</label>
                        <input type="text" id="name" name="name" required class="mt-1 block w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#429b5f]">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" id="email" name="email" required class="mt-1 block w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#429b5f]">
                    </div>
                    <div class="mb-4">
                        <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                        <textarea id="message" name="message" rows="4" required class="mt-1 block w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#429b5f]"></textarea>
                    </div>
                    <button type="submit" class="w-full bg-[#429b5f] text-white font-bold py-3 rounded-md hover:bg-[#357a4d] transition">Envoyer</button>
                </form>
            </div>
        </div>

        <!-- Contact Information Section -->
        <div class="container mx-auto py-12">
            <h2 class="text-3xl font-semibold mb-6 text-center">Informations de Contact</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Address -->
                <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                    <h3 class="text-xl font-semibold">Adresse</h3>
                    <p class="mt-2 text-gray-700">123 Rue de l'Assainissement,<br> Abidjan, Côte d'Ivoire</p>
                </div>
                <!-- Phone -->
                <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                    <h3 class="text-xl font-semibold">Téléphone</h3>
                    <p class="mt-2 text-gray-700">+225 01 23 45 67</p>
                </div>
                <!-- Email -->
                <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                    <h3 class="text-xl font-semibold">Email</h3>
                    <p class="mt-2 text-gray-700">contact@direction-assainissement.ci</p>
                </div>
            </div>
        </div>

        <!-- Call to Action Section -->
        <div class="bg-[#429b5f] py-8 text-center text-white">
            <h2 class="text-3xl font-bold">Suivez-nous sur les réseaux sociaux</h2>
            <p class="mt-2 text-xl">Restez à jour avec nos projets et initiatives.</p>
            <div class="mt-4 flex justify-center space-x-6">
                <a href="#" class="text-white hover:underline">Facebook</a>
                <a href="#" class="text-white hover:underline">Twitter</a>
                <a href="#" class="text-white hover:underline">Instagram</a>
            </div>
        </div>

    </div>
</div>
@endsection
