<nav class="bg-white container mx-auto">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex justify-between h-16">
            <div class="flex items-center">
                <a href="/" class="text-xl font-bold">Homecare</a>
            </div>

            <!-- Mobile menu button -->
            <div class="flex items-center md:hidden">
                <button id="mobile-menu-button" class="p-2" onclick="toggleMenu()">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>

            <!-- Desktop menu -->
            <div class="hidden md:flex md:items-center md:space-x-4">
                <!-- Products Dropdown -->
                <div class="relative group/sub">
                    <button
                        class="w-full text-left px-4 py-2 hover:bg-gray-100 inline-flex items-center justify-between">
                        Services
                        <svg class="w-4 h-4 transform transition-transform" id="products-arrow" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="absolute left-full top-0 hidden group-hover/sub:block w-48 bg-white shadow-lg py-2">
                        @foreach ($categories as $id => $category)
                            <a href="/job/create?category={{ $category->name }}"
                                class="block px-3 py-2 hover:bg-gray-100">{{ $category->name }}</a>
                        @endforeach
                    </div>
                </div>

                <a href="/user/register" class="px-3 py-2 hover:text-gray-700">Register/login</a>
            </div>
        </div>
    </div>

    <!-- Mobile menu -->
    <div id="mobile-menu" class="hidden md:hidden">
        <div class="px-2 pt-2 pb-3 space-y-1">

            <!-- Mobile Products Dropdown -->
            <div class="relative">
                <button onclick="toggleSubmenu('products-submenu')"
                    class="w-full text-left px-3 py-2 hover:bg-gray-100 inline-flex items-center justify-between">
                    Services
                    <svg class="w-4 h-4 transform transition-transform" id="products-arrow" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div id="products-submenu" class="hidden pl-4">
                    @foreach ($categories as $id => $category)
                        <a href="/job/create?category={{ $category->name }}"
                            class="block px-3 py-2 hover:bg-gray-100">{{ $category->name }}</a>
                    @endforeach
                </div>
            </div>
            <a href="/user/register" class="px-3 py-2 hover:text-gray-100">Register/login</a>
        </div>
    </div>
</nav>

<script>
    function toggleMenu() {
        const mobileMenu = document.getElementById('mobile-menu');
        mobileMenu.classList.toggle('hidden');
    }

    function toggleSubmenu(submenuId) {
        const submenu = document.getElementById(submenuId);
        const arrow = document.getElementById(submenuId.replace('-submenu', '-arrow'));
        submenu.classList.toggle('hidden');
        if (submenu.classList.contains('hidden')) {
            arrow.style.transform = 'rotate(0deg)';
        } else {
            arrow.style.transform = 'rotate(180deg)';
        }
    }
</script>

<style>
    @media (max-width: 768px) {
        #mobile-menu {
            transition: all 0.3s ease-in-out;
        }

        #mobile-menu:not(.hidden) {
            display: block;
            animation: slideDown 0.3s ease-in-out;
        }

        /* Submenu animations */
        #mobile-menu [id$="-submenu"]:not(.hidden) {
            animation: slideDown 0.2s ease-in-out;
        }
    }

    @keyframes slideDown {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Desktop dropdown hover effects */
    @media (min-width: 768px) {

        .group:hover>div,
        .group/sub:hover>div {
            animation: fadeIn 0.2s ease-in-out;
        }
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(5px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>
