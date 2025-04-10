<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Deaf Pro - Home</title>

    <!-- Add Google Font link -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    @vite('resources/css/app.css')
</head>
<body class="bg-[#121212] text-white" style="font-family: 'Roboto', sans-serif;">
<!-- Applying the custom font here -->

<!-- Sidebar -->
<aside class="fixed top-0 left-0 h-full w-64 bg-[#121212] border-r border-gray-700 p-6 flex flex-col justify-between z-50">
    <!-- Logo -->
    <div class="mb-6 flex justify-center">
        <svg width="280" height="50" viewBox="0 0 185 50" fill="none" xmlns="http://www.w3.org/2000/svg">
            <text x="0" y="35" font-family="Arial, sans-serif" font-size="40" fill="white" font-weight="bold">
                Deaf
                <tspan fill="#3B82F6">Pro</tspan>
            </text>
        </svg>
    </div>

    <!-- Content: Search & Navigation centered -->
    <div class="flex flex-col justify-center flex-grow space-y-6">

        <div class="flex items-center justify-center bg-[#121212] text-gray-300  p-4 space-x-6">
            <!-- Profile Image -->
            <img src="{{ asset('images/profile.jpg') }}" alt="Profile" class="w-8 h-8 rounded-full">

            <!-- Matches Icon -->
            <button class="relative hover:text-white">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="icon icon-tabler icons-tabler-outline icon-tabler-vs">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M2 12c0 5.523 4.477 10 10 10s10 -4.477 10 -10s-4.477 -10 -10 -10s-10 4.477 -10 10"/>
                    <path
                        d="M14 14.25c0 .414 .336 .75 .75 .75h1.25a1 1 0 0 0 1 -1v-1a1 1 0 0 0 -1 -1h-1a1 1 0 0 1 -1 -1v-1a1 1 0 0 1 1 -1h1.25a.75 .75 0 0 1 .75 .75"/>
                    <path d="M7 9l2 6l2 -6"/>
                </svg>
            </button>

            <!-- Notification Icon -->
            <button class="relative hover:text-white">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="icon icon-tabler icons-tabler-outline icon-tabler-bell">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6"/>
                    <path d="M9 17v1a3 3 0 0 0 6 0v-1"/>
                </svg>
            </button>

            <!-- Group Icon with Badge -->
            <button class="relative hover:text-white">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="icon icon-tabler icons-tabler-outline icon-tabler-user">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"/>
                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"/>
                </svg>
                <span
                    class="absolute bottom-3 right-9 inline-flex items-center justify-center px-1.5 py-0.5 text-xs font-bold leading-none text-white bg-red-600 rounded-full">4</span>
            </button>

            <!-- Message Icon -->
            <button>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="hover:text-white icon icon-tabler icons-tabler-outline icon-tabler-message">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M8 9h8"/>
                    <path d="M8 13h6"/>
                    <path d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z"/>
                </svg>
            </button>
        </div>


        <!-- Search -->
        <div class="w-full flex justify-center">
            <input
                type="text"
                placeholder="Search..."
                class="w-full bg-[#1e1e1e] text-white placeholder-gray-400 px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
            />
        </div>

        <!-- Navigation -->
        <nav class="flex flex-col items-start space-y-4">
            <!-- Home -->
            <a href="{{ route('home') }}" class="text-gray-300 hover:text-white flex items-center space-x-8">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="icon icon-tabler icons-tabler-outline icon-tabler-home">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M5 12l-2 0l9 -9l9 9l-2 0"/>
                    <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"/>
                    <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6"/>
                </svg>
                <span>Home</span>
            </a>
            <!-- Tournament -->
            <a href="{{ route('tournament') }}" class="text-gray-300 hover:text-white flex items-center space-x-8">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor"
                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="icon icon-tabler icons-tabler-outline icon-tabler-tournament">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M4 4m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"/>
                    <path d="M20 10m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"/>
                    <path d="M4 12m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"/>
                    <path d="M4 20m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"/>
                    <path d="M6 12h3a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-3"/>
                    <path d="M6 4h7a1 1 0 0 1 1 1v10a1 1 0 0 1 -1 1h-2"/>
                    <path d="M14 10h4"/>
                </svg>
                <span>Tournament</span>
            </a>
            <!-- Rank -->
            <a href="{{ route('rank') }}" class="text-gray-300 hover:text-white flex items-center space-x-8">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="icon icon-tabler icons-tabler-outline icon-tabler-circle-chevrons-up">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M9 15l3 -3l3 3"/>
                    <path d="M9 11l3 -3l3 3"/>
                    <path d="M12 21a9 9 0 1 0 -.265 0l.265 0z"/>
                </svg>
                <span>Rank</span>
            </a>
            <!-- Players -->
            <a href="{{ route('players') }}" class="text-gray-300 hover:text-white flex items-center space-x-8">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="icon icon-tabler icons-tabler-outline icon-tabler-users">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"/>
                    <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"/>
                    <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                    <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"/>
                </svg>
                <span>Players</span>
            </a>
            <!-- Rules -->
            <a href="{{ route('rules') }}" class="text-gray-300 hover:text-white flex items-center space-x-8">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="icon icon-tabler icons-tabler-outline icon-tabler-gavel">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M13 10l7.383 7.418c.823 .82 .823 2.148 0 2.967a2.11 2.11 0 0 1 -2.976 0l-7.407 -7.385"/>
                    <path d="M6 9l4 4"/>
                    <path d="M13 10l-4 -4"/>
                    <path d="M3 21h7"/>
                    <path
                        d="M6.793 15.793l-3.586 -3.586a1 1 0 0 1 0 -1.414l2.293 -2.293l.5 .5l3 -3l-.5 -.5l2.293 -2.293a1 1 0 0 1 1.414 0l3.586 3.586a1 1 0 0 1 0 1.414l-2.293 2.293l-.5 -.5l-3 3l.5 .5l-2.293 2.293a1 1 0 0 1 -1.414 0z"/>
                </svg>
                <span>Rules</span>
            </a>
            <!-- Contact -->
            <a href="{{ route('contact') }}" class="text-gray-300 hover:text-white flex items-center space-x-8">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="icon icon-tabler icons-tabler-outline icon-tabler-contract">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M8 21h-2a3 3 0 0 1 -3 -3v-1h5.5"/>
                    <path d="M17 8.5v-3.5a2 2 0 1 1 2 2h-2"/>
                    <path d="M19 3h-11a3 3 0 0 0 -3 3v11"/>
                    <path d="M9 7h4"/>
                    <path d="M9 11h4"/>
                    <path d="M18.42 12.61a2.1 2.1 0 0 1 2.97 2.97l-6.39 6.42h-3v-3z"/>
                </svg>
                <span>Contact</span>
            </a>
        </nav>
    </div>
</aside>

<!-- Main Content -->
<main class="ml-64 h-screen overflow-y-auto bg-[#121212]">
    @yield('content')  <!-- This is where the content from home.blade.php will appear -->
</main>

</body>
</html>
