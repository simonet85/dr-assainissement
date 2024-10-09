@extends('layouts.app')

@section('content')
<div class="container mx-auto my-8">
    <!-- Register Page -->
    <div class="bg-gray-100">

        <!-- Hero Section for Registration -->
        <div class="bg-[#429b5f] py-12 text-center text-white">
            <h1 class="text-4xl font-bold">Inscription</h1>
            <p class="mt-4 text-xl">Créez votre compte pour accéder à nos services.</p>
        </div>

        <!-- Registration Form Section -->
        <div class="container mx-auto py-12">
            <div class="bg-white shadow-lg rounded-lg p-8">
                <h2 class="text-3xl font-semibold mb-6">Formulaire d'Inscription</h2>
                <form action="#" method="POST">
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700">Nom Complet</label>
                        <input type="text" id="name" name="name" required class="mt-1 block w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#429b5f]">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" id="email" name="email" required class="mt-1 block w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#429b5f]">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="block text-sm font-medium text-gray-700">Mot de Passe</label>
                        <input type="password" id="password" name="password" required class="mt-1 block w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#429b5f]">
                    </div>
                    <div class="mb-4">
                        <label for="confirm-password" class="block text-sm font-medium text-gray-700">Confirmer le Mot de Passe</label>
                        <input type="password" id="confirm-password" name="confirm-password" required class="mt-1 block w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#429b5f]">
                    </div>
                    <button type="submit" class="w-full bg-[#429b5f] text-white font-bold py-3 rounded-md hover:bg-[#357a4d] transition">S'inscrire</button>
                </form>
            </div>
        </div>

        <!-- Information Section -->
        <div class="container mx-auto py-12">
            <h2 class="text-3xl font-semibold mb-6 text-center">Pourquoi S'inscrire?</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                    <h3 class="text-xl font-semibold">Accès aux Services</h3>
                    <p class="mt-2 text-gray-700">Bénéficiez d'un accès complet à tous nos services et ressources.</p>
                </div>
                <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                    <h3 class="text-xl font-semibold">Restez Informé</h3>
                    <p class="mt-2 text-gray-700">Recevez des mises à jour et des nouvelles directement dans votre boîte mail.</p>
                </div>
                <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                    <h3 class="text-xl font-semibold">Communauté</h3>
                    <p class="mt-2 text-gray-700">Rejoignez notre communauté et participez à nos initiatives.</p>
                </div>
            </div>
        </div>

        <!-- Call to Action Section -->
        <div class="bg-[#429b5f] py-8 text-center text-white">
            <h2 class="text-3xl font-bold">Déjà un compte?</h2>
            <p class="mt-2 text-xl pb-8">Connectez-vous pour accéder à votre compte.</p>
            <a href="{{ route('login') }}" class="bg-white text-[#429b5f] font-bold py-3 px-6 rounded-md hover:bg-gray-100 transition">Se connecter</a>
        </div>

    </div>

</div>
@endsection
