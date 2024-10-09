@extends('layouts.app')

@section('content')
<div class="relative">
    <!-- Hero Section with Background Image -->
    <div class="w-full h-screen bg-cover bg-center w-full" style="background-image: url('{{asset('/images/hero-image.jpg')}}');">
        <div class="bg-black bg-opacity-50 w-full h-full flex items-center justify-center">
            <div class="text-center text-white px-6">
                <h1 class="text-5xl md:text-6xl font-bold mb-6">Bienvenue à la Direction Régionale</h1>
                <p class="text-lg md:text-xl mb-8">Découvrez nos projets, services et actualités pour améliorer l'assainissement dans la région du Sud-Comoé.</p>
                <a href="#projects" class="bg-[#429b5f] text-white py-3 px-6 rounded-lg hover:bg-[#066f36] transition">Voir Nos Projets</a>
            </div>
        </div>
    </div>


    <!-- Featured Sections with Images -->
    <div class="container mx-auto px-4 py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="p-6 bg-[#e5e5e5] rounded-lg text-center">
                <img src="{{ asset('images/project.png') }}" alt="Projets" class="w-full h-40 object-cover mb-4 rounded-lg">
                <h2 class="text-2xl font-semibold mb-4">Nos Projets</h2>
                <p>Apprenez-en plus sur nos projets en cours et futurs pour améliorer l'assainissement dans notre région.</p>
                <a href="/projects" class="text-[#010101] hover:underline mt-4 block">Voir nos projets</a>
            </div>

            <div class="p-6 bg-[#e5e5e5] rounded-lg text-center">
                <img src="{{asset('images/services.png')}}" alt="Services" class="w-full h-40 object-cover mb-4 rounded-lg">
                <h2 class="text-2xl font-semibold mb-4">Nos Services</h2>
                <p>Découvrez les services que nous offrons en matière d'assainissement et de salubrité.</p>
                <a href="/services" class="text-[#010101] hover:underline mt-4 block">Voir nos services</a>
            </div>

            <div class="p-6 bg-[#e5e5e5] rounded-lg text-center">
                <img src="{{ asset('images/news.png') }}" alt="Actualités" class="w-full h-40 object-cover mb-4 rounded-lg">
                <h2 class="text-2xl font-semibold mb-4">Actualités</h2>
                <p>Restez informé des dernières nouvelles et annonces concernant nos activités.</p>
                <a href="/news" class="text-[#010101] hover:underline mt-4 block">Voir les actualités</a>
            </div>
        </div>
    </div>

    <!-- Call to Action Section -->
    <div class="container mx-auto px-4 py-12">
        <div class="bg-[#429b5f] rounded-lg p-8 text-center">
            <h2 class="text-3xl font-semibold mb-4 text-white">Vous avez des questions ?</h2>
            <p class="text-white m-3">Contactez-nous pour discuter avec nous.</p>
            <a href="/contact" class="bg-white text-[#429b5f] font-bold px-4 py-2 rounded-lg hover:bg-gray-100 transition">Contactez-nous</a>
        </div>
    </div>

    <!-- Projects Section -->
    <div class="container mx-auto px-4 py-12" id="projects">
        <h2 class="text-3xl font-semibold mb-6">Nos Projets</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- html code for Projets title, description, image -->
            <div class="p-6 bg-[#e5e5e5] rounded-lg">
                <h3 class="text-xl font-semibold mb-4">Nos Projets</h3>
                <!-- image of project -->
                <img src="{{ asset('images/project.png') }}" alt="Projets" class="w-full h-40 object-cover mb-4 rounded-lg">
                <p class="text-gray-700">Apprenez-en plus sur nos projets en cours et futurs pour amesubir l'assainissement dans notrewegian.</p>
                <!--button to go to projects page-->
                <a href="/projects" class="text-[#010101] hover:underline mt-4 block">Voir nos projets</a>
            </div>

            <div class="p-6 bg-[#e5e5e5] rounded-lg">
                <h3 class="text-xl font-semibold mb-4">Nos Projets</h3>
                <!-- image of project -->
                <img src="{{ asset('images/project.png') }}" alt="Projets" class="w-full h-40 object-cover mb-4 rounded-lg">
                <p class="text-gray-700">Apprenez-en plus sur nos projets en cours et futurs pour amesubir l'assainissement dans notrewegian.</p>
                <!--button to go to projects page-->
                <a href="/projects" class="text-[#010101] hover:underline mt-4 block">Voir nos projets</a>
            </div>

            <div class="p-6 bg-[#e5e5e5] rounded-lg">
                <h3 class="text-xl font-semibold mb-4">Nos Projets</h3>
                <!-- image of project -->
                <img src="{{ asset('images/project.png') }}" alt="Projets" class="w-full h-40 object-cover mb-4 rounded-lg">
                <p class="text-gray-700">Apprenez-en plus sur nos projets en cours et futurs pour amesubir l'assainissement dans notrewegian.</p>
                <!--button to go to projects page-->
                <a href="/projects" class="text-[#010101] hover:underline mt-4 block">Voir nos projets</a>
            </div>


        </div>
    </div>

    <!-- Services Section -->
    <div class="container mx-auto px-4 py-12" id="services">
        <h2 class="text-3xl font-semibold mb-6">Nos Services</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- html code for Services title, description, image -->
            <div class="p-6 bg-[#e5e5e5] rounded-lg">
                <h3 class="text-xl font-semibold mb-4">Nos Services</h3>
                <!-- image of service -->
                <img src="{{ asset('images/services.png') }}" alt="Services" class="w-full h-40 object-cover mb-4 rounded-lg">
                <p class="text-gray-700">Découvrez les services que nous offrons en matière d'assainissement et de salubrité.</p>
                <!--button to go to services page-->
                <a href="/services" class="text-[#010101] hover:underline mt-4 block">Voir nos services</a>
            </div>

            <div class="p-6 bg-[#e5e5e5] rounded-lg">
                <h3 class="text-xl font-semibold mb-4">Nos Services</h3>
                <!-- image of service -->
                <img src="{{ asset('images/services.png') }}" alt="Services" class="w-full h-40 object-cover mb-4 rounded-lg">
                <p class="text-gray-700">Découvrez les services que nous offrons en matière d'assainissance et de salubrité.</p>
                <!--button to go to services page-->
                <a href="/services" class="text-[#010101] hover:underline mt-4 block">Voir nos services</a>
            </div>

            <div class="p-6 bg-[#e5e5e5] rounded-lg">
                <h3 class="text-xl font-semibold mb-4">Nos Services</h3>
                <!-- image of service -->
                <img src="{{ asset('images/services.png') }}" alt="Services" class="w-full h-40 object-cover mb-4 rounded-lg">
                <p class="text-gray-700">Découvrez les services que nous offrons en matière d'assainissance et de salubrité.</p>
                <!--button to go to services page-->
                <a href="/services" class="text-[#010101] hover:underline mt-4 block">Voir nos services</a>
            </div>
        </div>
    </div>

    <!-- News Section -->
    <div class="container mx-auto px-4 py-12" id="news">
        <h2 class="text-3xl font-semibold mb-6">Actualités</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- html code for Actualités title, description, image -->
            <div class="p-6 bg-[#e5e5e5] rounded-lg">
                <h3 class="text-xl font-semibold mb-4">Actualités</h3>
                <!-- image of news -->
                <img src="{{ asset('images/news.png') }}" alt="Actualités" class="w-full h-40 object-cover mb-4 rounded-lg">
                <p class="text-gray-700">Restez informé des dernières nouvelles et annonces concernant nos activités.</p>
                <!--button to go to news page-->
                <a href="/news" class="text-[#010101] hover:underline mt-4 block">Voir les actualités</a>
            </div>
            <div class="p-6 bg-[#e5e5e5] rounded-lg">
                <h3 class="text-xl font-semibold mb-4">Actualités</h3>
                <!-- image of news -->
                <img src="{{ asset('images/news.png') }}" alt="Actualités" class="w-full h-40 object-cover mb-4 rounded-lg">
                <p class="text-gray-700">Restez informé des dernières nouvelles et annonces concernant nos activités.</p>
                <!--button to go to news page-->
                <a href="/news" class="text-[#010101] hover:underline mt-4 block">Voir les actualités</a>
            </div>
            <div class="p-6 bg-[#e5e5e5] rounded-lg">
                <h3 class="text-xl font-semibold mb-4">Actualités</h3>
                <!-- image of news -->
                <img src="{{ asset('images/news.png') }}" alt="Actualités" class="w-full h-40 object-cover mb-4 rounded-lg">
                <p class="text-gray-700">Restez informé des dernières nouvelles et annonces concernant nos activités.</p>
                <!--button to go to news page-->
                <a href="/news" class="text-[#010101] hover:underline mt-4 block">Voir les actualités</a>
            </div>
        </div>
    </div>

    <!-- Call to Action Section -->
    <div class="container mx-auto px-4 py-12">
        <div class="bg-[#429b5f] rounded-lg p-8 text-center">
            <h2 class="text-3xl font-semibold mb-4 text-white">Vous avez des questions ?</h2>
            <p class="text-white m-3">Contactez-nous pour discuter avec nous.</p>
            <a href="/contact" class="bg-white text-[#429b5f] font-bold px-4 py-2 rounded-lg hover:bg-gray-100 transition">Contactez-nous</a>
        </div>
    </div>

</div>
@endsection
