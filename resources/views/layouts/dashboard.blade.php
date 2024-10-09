<!-- resources/views/layouts/dashboard.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Dashboard</title>
    <!-- Fonts Awesome cdn links -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet">

    <!-- Tailwind CSS -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    @vite('resources/css/app.css')
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-gray-100">

    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-[#429b5f] text-white flex flex-col">
            <div class="px-6 py-4 text-2xl font-bold">
                Dashboard
            </div>
            <nav class="mt-4 flex-1">
                <ul>
                    <!-- CRUD Home Dropdown -->
                    <li x-data="{ open: false }">
                        <a @click="open = !open" href="#" class="flex items-center justify-between px-6 py-3 hover:bg-[#357a4d]">
                            <span class="flex items-center">
                                <i class="fas fa-home"></i>
                                <span class="ml-4">Accueil</span>
                            </span>
                            <span x-show="!open">▼</span>
                            <span x-show="open">▲</span>
                        </a>
                        <ul x-show="open" class="px-6">
                            <li><a href="/dashboard/home/view" class="block py-2 hover:text-[#e9f3ea] hover:bg-[#357a4d] rounded px-4">View</a></li>
                            <li><a href="/dashboard/home/create" class="block py-2 hover:text-[#e9f3ea] hover:bg-[#357a4d] rounded px-4">Create</a></li>
                            <li><a href="/dashboard/home/edit" class="block py-2 hover:text-[#e9f3ea] hover:bg-[#357a4d] rounded px-4">Edit</a></li>
                            <li><a href="/dashboard/home/delete" class="block py-2 hover:text-[#e9f3ea] hover:bg-[#357a4d] rounded px-4">Delete</a></li>
                        </ul>
                    </li>

                    <!-- Add similar sections for About, Projects, Services, etc. as per the previous structure -->

                    <!-- Example for CRUD About -->
                    <li x-data="{ open: false }">
                        <a @click="open = !open" href="#" class="flex items-center justify-between px-6 py-3 hover:bg-[#357a4d]">
                            <span class="flex items-center">
                                <i class="fas fa-info-circle"></i>
                                <span class="ml-4">À propos </span>
                            </span>
                            <span x-show="!open">▼</span>
                            <span x-show="open">▲</span>
                        </a>
                        <ul x-show="open" class="px-6">
                            <li><a href="/dashboard/about/view" class="block py-2 hover:text-[#e9f3ea] hover:bg-[#357a4d] rounded px-4">View</a></li>
                            <li><a href="/dashboard/about/create" class="block py-2 hover:text-[#e9f3ea] hover:bg-[#357a4d] rounded px-4">Create</a></li>
                            <li><a href="/dashboard/about/edit" class="block py-2 hover:text-[#e9f3ea] hover:bg-[#357a4d] rounded px-4">Edit</a></li>
                            <li><a href="/dashboard/about/delete" class="block py-2 hover:text-[#e9f3ea] hover:bg-[#357a4d] rounded px-4">Delete</a></li>
                        </ul>
                    </li>

                    <!-- Repeat for other sections (Projects, Services, Resources, etc.) -->
                    <!--CRUD Projects-->
                    <li x-data="{ open: false }">
                        <a @click="open = !open" href="#" class="flex items-center justify-between px-6 py-3 hover:bg-[#357a4d]">
                            <span class="flex items-center">
                                <i class="fas fa-project-diagram"></i>
                                <span class="ml-4">Projets </span>
                            </span>
                            <span x-show="!open">▼</span>
                            <span x-show="open">▲</span>
                        </a>
                        <ul x-show="open" class="px-6">
                            <li><a href="/dashboard/projects/view" class="block py-2 hover:text-[#e9f3ea] hover:bg-[#357a4d] rounded px-4">View</a></li>
                            <li><a href="/dashboard/projects/create" class="block py-2 hover:text-[#e9f3ea] hover:bg-[#357a4d] rounded px-4">Create</a></li>
                            <li><a href="/dashboard/projects/edit" class="block py-2 hover:text-[#e9f3ea] hover:bg-[#357a4d] rounded px-4">Edit</a></li>
                            <li><a href="/dashboard/projects/delete" class="block py-2 hover:text-[#e9f3ea] hover:bg-[#357a4d] rounded px-4">Delete</a></li>
                        </ul>
                    </li>

                    <!--CRUD Services-->
                    <li x-data="{ open: false }">
                        <a @click="open = !open" href="#" class="flex items-center justify-between px-6 py-3 hover:bg-[#357a4d]">
                            <span class="flex items-center">
                                <!--services icon-->
                                <i class="fa-solid fa-screwdriver-wrench"></i>
                                <span class="ml-4">Services </span>
                            </span>
                            <span x-show="!open">▼</span>
                            <span x-show="open">▲</span>
                        </a>
                        <ul x-show="open" class="px-6">
                            <li><a href="/dashboard/services/view" class="block py-2  hover:text-[#e9f3ea] hover:bg-[#357a4d] rounded px-4">View</a></li>
                            <li><a href="/dashboard/services/create" class="block py-2 hover:text-[#e9f3ea] hover:bg-[#357a4d] rounded px-4">Create</a></li>
                            <li><a href="/dashboard/services/edit" class="block py-2 hover:text-[#e9f3ea] hover:bg-[#357a4d] rounded px-4">Edit</a></li>
                            <li><a href="/dashboard/services/delete" class="block py-2 hover:text-[#e9f3ea] hover:bg-[#357a4d] rounded px-4">Delete</a></li>
                        </ul>
                    </li>

                    <!--CRUD Resources-->
                    <li x-data="{ open: false }">
                        <a @click="open = !open" href="#" class="flex items-center justify-between px-6 py-3 hover:bg-[#357a4d]">
                            <span class="flex items-center">
                                <i class="fa-solid fa-book"></i>
                                <span class="ml-4">Ressources </span>
                            </span>
                            <span x-show="!open">▼</span>
                            <span x-show="open">▲</span>
                        </a>
                        <ul x-show="open" class="px-6">
                            <li><a href="/dashboard/resources/view" class="block py-2 hover:text-[#e9f3ea] hover:bg-[#357a4d] rounded px-4">View</a></li>
                            <li><a href="/dashboard/resources/create" class="block py-2 hover:text-[#e9f3ea] hover:bg-[#357a4d] rounded px-4">Create</a></li>
                            <li><a href="/dashboard/resources/edit" class="block py-2 hover:text-[#e9f3ea] hover:bg-[#357a4d] rounded px-4">Edit</a></li>
                            <li><a href="/dashboard/resources/delete" class="block py-2 hover:text-[#e9f3ea] hover:bg-[#357a4d] rounded px-4">Delete</a></li>
                        </ul>
                    </li>
                    <!--CRUD News-->
                    <li x-data="{ open: false }">
                        <a @click="open = !open" href="#" class="flex items-center justify-between px-6 py-3 hover:bg-[#357a4d]">
                            <span class="flex items-center">
                                <i class="fa-solid fa-newspaper"></i>
                                <span class="ml-4">Actualités </span>
                            </span>
                            <span x-show="!open">▼</span>
                            <span x-show="open">▲</span>
                        </a>
                        <ul x-show="open" class="px-6">
                            <li><a href="/dashboard/news/view" class="block py-2 hover:text-[#e9f3ea] hover:bg-[#357a4d] rounded px-4">View</a></li>
                            <li><a href="/dashboard/news/create" class="block py-2 hover:text-[#e9f3ea] hover:bg-[#357a4d] rounded px-4">Create</a></li>
                            <li><a href="/dashboard/news/edit" class="block py-2 hover:text-[#e9f3ea] hover:bg-[#357a4d] rounded px-4">Edit</a></li>
                            <li><a href="/dashboard/news/delete" class="block py-2 hover:text-[#e9f3ea] hover:bg-[#357a4d] rounded px-4">Delete</a></li>
                        </ul>
                    </li>
                    <!--CRUD Notifications-->
                    <li x-data="{ open: false }">
                        <a @click="open = !open" href="#" class="flex items-center justify-between px-6 py-3 hover:bg-[#357a4d]">
                            <span class="flex items-center">
                                <i class="fa-solid fa-bell"></i>
                                <span class="ml-4">Notifications</span>
                            </span>
                            <span x-show="!open">▼</span>
                            <span x-show="open">▲</span>
                        </a>
                        <ul x-show="open" class="px-6">
                            <li><a href="/dashboard/notifications/view" class="block py-2 hover:text-[#e9f3ea] hover:bg-[#357a4d] rounded px-4">View</a></li>
                            <li><a href="/dashboard/notifications/create" class="block py-2 hover:text-[#e9f3ea] hover:bg-[#357a4d] rounded px-4">Create</a></li>
                            <li><a href="/dashboard/notifications/edit" class="block py-2 hover:text-[#e9f3ea] hover:bg-[#357a4d] rounded px-4">Edit</a></li>
                            <li><a href="/dashboard/notifications/delete" class="block py-2 hover:text-[#e9f3ea] hover:bg-[#357a4d] rounded px-4">Delete</a></li>
                        </ul>
                    </li>
                    <!--CRUD Messages-->
                    <li x-data="{ open: false }">
                        <a @click="open = !open" href="#" class="flex items-center justify-between px-6 py-3 hover:bg-[#357a4d]">
                            <span class="flex items-center">
                                <i class="fa-solid fa-envelope"></i>
                                <span class="ml-4">Messages </span>
                            </span>
                            <span x-show="!open">▼</span>
                            <span x-show="open">▲</span>
                        </a>
                        <ul x-show="open" class="px-6">
                            <li><a href="/dashboard/messages/view" class="block py-2 hover:text-[#e9f3ea] hover:bg-[#357a4d] rounded px-4">View</a></li>
                            <li><a href="/dashboard/messages/create" class="block py-2 hover:text-[#e9f3ea] hover:bg-[#357a4d] rounded px-4">Create</a></li>
                            <li><a href="/dashboard/messages/edit" class="block py-2 hover:text-[#e9f3ea] hover:bg-[#357a4d] rounded px-4">Edit</a></li>
                            <li><a href="/dashboard/messages/delete" class="block py-2 hover:text-[#e9f3ea] hover:bg-[#357a4d] rounded px-4">Delete</a></li>
                        </ul>
                        <ul class="bg-[#429b5f]">

                            <li class="flex items-center px-6 py-2 hover:text-[#e9f3ea] hover:bg-[#357a4d] ">
                                <i class="fa-solid fa-user mr-4"></i>
                                <a href="/dashboard/profile" class="block py-1 hover:text-[#e9f3ea] hover:bg-[#357a4d]">Profile</a>
                            </li>

                            <li class="flex items-center px-6 py-2 hover:text-[#e9f3ea] hover:bg-[#357a4d] ">
                                <i class="fa-solid fa-gear "></i>
                                <a href="/dashboard/settings" class="block py-1 hover:text-[#e9f3ea] hover:bg-[#357a4d] rounded px-4">Settings</a>
                            </li>

                            <li class="flex items-center px-6 py-2 hover:text-[#e9f3ea] hover:bg-[#357a4d] ">
                                <i class="fa-solid fa-right-from-bracket mr-4 "></i>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                                <a onclick="event.preventDefault(); document.getElementById('logout-form').submit();" href="#">Deconnexion</a>
                            </li>


                        </ul>
                    </li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content Area -->
        <div class="flex-1 p-6 bg-gray-100">
            <!-- Horizontal Navbar -->
            <header class="bg-white shadow px-6 py-4 flex justify-between items-center">
                <div class="flex items-center">
                    <form action="#" method="GET" class="relative">
                        <input type="text" name="search" placeholder="Search..." class="border rounded-lg pl-4 pr-10 py-2 focus:ring-2 focus:ring-[#429b5f] focus:outline-none w-full">

                        <!-- Search Icon Button -->
                        <button type="submit" class="absolute right-0 top-0 mt-2 mr-2 text-gray-500 hover:text-[#429b5f] focus:outline-none">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </form>
                </div>



                <!-- Navbar Right Icons -->
                <div class="flex items-center space-x-8">
                    <!-- Language Switch -->
                    <div x-data="{ open: false }" class="relative">
                        <button @click="open = !open" class="focus:outline-none">
                            <i class="fa-solid fa-globe"></i>
                            <span class="ml-2">EN</span>

                        </button>
                        <div x-show="open" @click.outside="open = false" class="absolute mt-2 right-0 bg-white border rounded-lg shadow-lg py-2">
                            <a href="#" class="block px-4 py-2 hover:text-[#e9f3ea] hover:bg-[#357a4d]">EN</a>
                            <a href="#" class="block px-4 py-2 hover:text-[#e9f3ea] hover:bg-[#357a4d]">FR</a>
                            <a href="#" class="block px-4 py-2 hover:text-[#e9f3ea] hover:bg-[#357a4d]">ES</a>
                        </div>
                    </div>
                    <!-- Notifications -->
                    <div x-data="{ open: false }" class="relative">
                        <button @click="open = !open" class="relative focus:outline-none">
                            <!-- Notification Bell Icon -->
                            <i class="fa-solid fa-bell text-gray-600"></i>

                            <!-- Notification Count -->
                            <span class="absolute top-[-6px] right-[-6px] transform translate-x-1/2 -translate-y-1/2 bg-red-500 text-white text-xs rounded-full px-1 py-0.5">3</span>
                        </button>

                        <!-- Dropdown Notifications Menu -->
                        <div x-show="open" @click.outside="open = false" class="absolute mt-2 right-0 bg-white border rounded-lg shadow-lg py-2 w-64">
                            <a href="#" class="block px-4 py-2 hover:text-[#e9f3ea] hover:bg-[#357a4d]">New message received</a>
                            <a href="#" class="block px-4 py-2 hover:text-[#e9f3ea] hover:bg-[#357a4d]">New comment on project</a>
                            <a href="#" class="block px-4 py-2 hover:text-[#e9f3ea] hover:bg-[#357a4d]">Server maintenance</a>
                        </div>
                    </div>

                    <!-- User Profile Dropdown -->
                    <div x-data="{ open: false }" class="relative">
                        <button @click="open = !open" class="focus:outline-none flex items-center space-x-2">
                            <img src="{{ asset('images/team-1.jpg') }}" alt="Profile Picture" class="w-8 h-8 rounded-full">
                            <span>John Doe</span>
                        </button>
                        <div x-show="open" @click.outside="open = false" class="absolute mt-2 right-0 bg-white border rounded-lg shadow-lg py-2  px-2">
                            <a href="#" class="block px-4 py-2 hover:text-[#e9f3ea] hover:bg-[#357a4d]">Profile</a>
                            <a href="#" class="block px-4 py-2 hover:text-[#e9f3ea] hover:bg-[#357a4d]">Settings</a>
                            <!-- Logout Form -->
                            <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">
                                @csrf
                            </form>
                            <!-- Logout Link -->
                            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="block px-2 py-2 hover:text-[#e9f3ea] hover:bg-[#357a4d]">
                                Deconnexion
                            </a>
                        </div>
                    </div>
                </div>
            </header>
            <!-- Breadcrumbs -->
            <nav class="text-gray-500 mb-4">
                <ol class="list-reset flex">
                    <li><a href="/dashboard" class="text-[#429b5f]">Dashboard</a></li>
                    <li><span class="mx-2">/</span></li>
                    <li>@yield('breadcrumb')</li>
                </ol>
            </nav>

            <!-- Page Content -->
            <div class="bg-white shadow-md rounded-lg p-6">
                @yield('content')
            </div>
        </div>
    </div>

</body>
</html>
