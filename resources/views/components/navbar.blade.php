<header class=" bg-[#159E9E] text-white py-6 px-4 relative overflow-hidden">
    <div class="container mx-auto max-w-6xl relative z-10">
        <div class="flex items-center justify-between">
            <div class="flex items-center space-x-4">
                <img src="images/logos.png" alt="Logo Bali Kuliner Finder" class="w-16 h-16 rounded-full shadow-lg">
                <div>
                    <h1 class="text-3xl font-bold">Bali Kuliner Finder</h1>
                    <p class="text-blue-100 italic">Kuliner Bali di Ujung Jari</p>
                </div>
            </div>
            <nav class="hidden md:block">
                <ul class="flex space-x-6">
                    <li><a href="/" class="hover:text-blue-200 transition">Home</a></li>
                    <li><a href="/about" class="hover:text-blue-200 transition">About Us</a></li>
                    <li><a href="/service" class="hover:text-blue-200 transition">Services</a></li>
                </ul>
            </nav>
            <button id="menuToggle" class="md:hidden text-white">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
        <div id="mobileMenu" class="hidden md:hidden mt-4 bg-blue-700 rounded-lg p-4">
            <ul class="space-y-2">
                <li><a href="/" class="block hover:text-blue-200 transition">Home</a></li>
                <li><a href="/about" class="block hover:text-blue-200 transition">About Us</a></li>
                <li><a href="/service" class="block hover:text-blue-200 transition">Services</a></li>
            </ul>
        </div>
    </div>
    <div class="absolute inset-0 bg-gradient-to-b from-blue-500/20 to-transparent"></div>
</header>
