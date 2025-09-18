<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>

    {{-- Tailwind CSS CDN --}}
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- Warna Dark Red --}}
    <style>
        .bg-darkred {
            background-color: #660000;
        }
        .bg-darkred-light {
            background-color: #530404;
        }
        .text-darkred {
            color: #5a0f0f;
        }
        .border-darkred {
            border-color: #4b0202;
        }
    </style>

    {{-- Tempat tambahan CSS dari halaman --}}
    @stack('styles')
</head>
<body class="bg-gradient-to-br from-gray-100 to-gray-300 min-h-screen font-sans">

    <div class="flex min-h-screen">

        {{-- Sidebar --}}
        <aside class="w-64 bg-darkred text-white flex-shrink-0 shadow-xl">
            <div class="p-6 text-center border-b border-white/20">
                <img src="{{ asset('images/download.jpeg') }}" alt="Tower" class="mx-auto w-20 h-20 object-cover rounded-full shadow-lg border-4 border-white/50">
                <h1 class="mt-4 text-xl font-bold tracking-wide">Dashboard</h1>
            </div>

            <nav class="mt-6">
                <ul class="space-y-2">
                    <li>
                        <a href="{{ route('tyson.index') }}" 
                           class="flex items-center gap-3 px-6 py-3 rounded-lg transition duration-200 
                           hover:bg-darkred-light hover:shadow-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 opacity-80" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7h18M3 12h18M3 17h18" />
                            </svg>
                            <span class="font-medium">Tyson</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('paasxl.index') }}" 
                           class="flex items-center gap-3 px-6 py-3 rounded-lg transition duration-200 
                           hover:bg-darkred-light hover:shadow-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 opacity-80" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7h18M3 12h18M3 17h18" />
                            </svg>
                            <span class="font-medium">PaasXL</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('smartlock.index') }}" 
                           class="flex items-center gap-3 px-6 py-3 rounded-lg transition duration-200 
                           hover:bg-darkred-light hover:shadow-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 opacity-80" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7h18M3 12h18M3 17h18" />
                            </svg>
                            <span class="font-medium">Smartlock</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('swl.index') }}" 
                           class="flex items-center gap-3 px-6 py-3 rounded-lg transition duration-200 
                           hover:bg-darkred-light hover:shadow-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 opacity-80" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7h18M3 12h18M3 17h18" />
                            </svg>
                            <span class="font-medium">Swl</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('weplan.index') }}" 
                           class="flex items-center gap-3 px-6 py-3 rounded-lg transition duration-200 
                           hover:bg-darkred-light hover:shadow-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 opacity-80" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7h18M3 12h18M3 17h18" />
                            </svg>
                            <span class="font-medium">Weplan</span>
                        </a>
                    </li>
                    {{-- Tambahkan menu lain --}}
                </ul>
            </nav>
        </aside>

        {{-- Main Content --}}
        <div class="flex-1 flex flex-col">
            {{-- Header --}}
            <header class="bg-white/80 backdrop-blur shadow-md px-6 py-4 flex justify-between items-center sticky top-0 z-10 border-b border-darkred/30">
                <h2 class="text-2xl font-semibold text-darkred">@yield('header', 'Dashboard')</h2>
                <div class="flex items-center gap-4">
                    <button class="bg-darkred text-white px-4 py-2 rounded-full hover:bg-darkred-light transition shadow-lg">
                        Logout
                    </button>
                </div>
            </header>

            {{-- Content --}}
            <main class="p-8 bg-gradient-to-br from-white/70 to-gray-100/50 min-h-screen">
                <div class="bg-white/90 rounded-2xl shadow-xl p-8 border border-gray-200/30">
                    @yield('content')
                </div>
            </main>
        </div>
    </div>

    {{-- Tempat tambahan script JS dari halaman --}}
    @stack('scripts')
</body>
</html>
