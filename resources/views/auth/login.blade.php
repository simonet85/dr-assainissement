@extends('layouts.app')

@section('content')
<div class="container mx-auto my-8">
    <!-- Login Page -->
    <div class="bg-gray-100">

        <!-- Hero Section for Login -->
        <div class="bg-[#429b5f] py-12 text-center text-white">
            <h1 class="text-4xl font-bold">Connexion</h1>
            <p class="mt-4 text-xl">Connectez-vous pour accéder à votre compte.</p>
        </div>

        <!-- Login Form Section -->
        <div class="container mx-auto py-12 flex justify-center">
            <div class="bg-white shadow-xl rounded-lg p-8 w-full max-w-md">
                <h2 class="text-2xl font-semibold text-center mb-6">Bienvenue de retour</h2>
                <p class="text-gray-600 text-center mb-8">Veuillez vous connecter pour continuer</p>

                <form action="{{ route('login') }}" method="POST">
                    @csrf

                    <!-- Email Input -->
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" required class="mt-1 block w-full p-2.5 border @error('email') border-red-500 @else border-gray-300 @enderror rounded-md focus:outline-none focus:ring-2 focus:ring-[#429b5f] focus:border-[#429b5f]">
                        
                        @error('email')
                        <span class="text-red-500 text-sm mt-2">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Password Input -->
                    <div class="mb-4">
                        <label for="password" class="block text-sm font-medium text-gray-700">Mot de Passe</label>
                        <input type="password" id="password" name="password" required class="mt-1 block w-full p-2.5 border @error('password') border-red-500 @else border-gray-300 @enderror rounded-md focus:outline-none focus:ring-2 focus:ring-[#429b5f] focus:border-[#429b5f]">
                        
                        @error('password')
                        <span class="text-red-500 text-sm mt-2">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Remember Me Checkbox & Forgot Password Link -->
                    <div class="flex items-center justify-between mb-6">
                        <div class="flex items-center">
                            <input type="checkbox" id="remember_me" name="remember" class="h-4 w-4 text-[#429b5f] border-gray-300 rounded">
                            <label for="remember_me" class="ml-2 block text-sm text-gray-900">Se souvenir de moi</label>
                        </div>
                        <a href="{{ route('password.request') }}" class="text-sm text-[#429b5f] hover:underline">Mot de passe oublié?</a>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="w-full bg-[#429b5f] text-white font-bold py-3 rounded-md hover:bg-[#357a4d] transition shadow-md">Se connecter</button>
                </form>
            </div>
        </div>

        <!-- Call to Action Section -->
        <div class="bg-[#429b5f] py-8 text-center text-white">
            <h2 class="text-3xl font-bold">Pas encore de compte?</h2>
            <p class="mt-2 text-xl pb-8">Créez un compte pour accéder à nos services.</p>
            <a href="{{ route('register') }}" class="bg-white text-[#429b5f] font-bold py-3 px-6 rounded-md hover:bg-gray-100 transition">S'inscrire</a>
        </div>

    </div>
</div>
@endsection
