<!-- Top Announcement Bar / Running Text -->
<div class="bg-black text-white py-2 overflow-hidden border-b border-gray-800 text-[11px] sm:text-xs tracking-wider uppercase font-bold z-50 relative">
    <div class="flex whitespace-nowrap animate-marquee">
        <span class="mx-4 flex items-center gap-2">
            <span class="w-2 h-2 rounded-full bg-orange-500 animate-pulse"></span>
            <span x-text="data.promo_text_eng && lang==='ENG' ? data.promo_text_eng : (data.promo_text_bm && lang==='BM' ? data.promo_text_bm : (lang==='ENG' ? '🔥 PROMO SPECIAL: 50% DISCOUNT FOR FIRST 10 CLIENTS THIS MONTH!' : '🔥 PROMO KHAS: DISKAUN 50% UNTUK 10 KLIEN PERTAMA BULAN INI!'))"></span>
        </span>
        <span class="mx-4 text-orange-500">★</span>
        <span class="mx-4 flex items-center gap-2">
            <span x-text="lang === 'ENG' ? '🚀 FREE 1 YEAR HOSTING & DOMAIN INCLUDED' : '🚀 PERCUMA 1 TAHUN HOSTING & DOMAIN'"></span>
        </span>
        <span class="mx-4 text-orange-500">★</span>
        <span class="mx-4 flex items-center gap-2">
            <span x-text="lang === 'ENG' ? '⚡ RAPID 3-7 DAYS DEVELOPMENT HANDOVER' : '⚡ SIAP PANTAS DALAM 3-7 HARI'"></span>
        </span>
        <span class="mx-4 text-orange-500">★</span>
    </div>
</div>

<!-- Main Navigation Header -->
<header class="fixed top-0 inset-x-0 z-40 transition-all duration-300"
        :class="scrolled ? 'bg-black/90 backdrop-blur-md py-4 shadow-xl border-b border-white/10' : 'bg-transparent py-6'">
    <div class="max-w-7xl mx-auto px-6 flex items-center justify-between">
        
        <!-- Brand Logo -->
        <a href="{{ route('home') }}" class="flex items-center gap-3 group">
            <img src="{{ asset('mij-logo.png') }}" alt="MIJ Logo" class="h-10 w-auto transition duration-300 group-hover:scale-105">
            <span class="font-modernica font-black text-xl sm:text-2xl tracking-tighter" :class="scrolled ? 'text-white' : 'text-gray-900'">
                MIJ<span class="text-orange-600">.</span>DIGITAL
            </span>
        </a>

        <!-- Desktop Navigation Menu -->
        <nav class="hidden lg:flex items-center gap-8 font-modernica text-xs font-bold tracking-[0.15em] uppercase" :class="scrolled ? 'text-gray-300' : 'text-gray-800'">
            <a href="{{ route('home') }}" class="hover:text-orange-600 transition" x-text="text.nav_home ? text.nav_home[lang] : 'Home'"></a>
            <a href="{{ route('home') }}#home" class="hover:text-orange-600 transition" x-text="text.nav_about ? text.nav_about[lang] : 'About'"></a>
            <a href="{{ route('services') }}" class="hover:text-orange-600 transition" x-text="text.nav_services ? text.nav_services[lang] : 'Services'"></a>
            <a href="{{ route('portfolio') }}" class="hover:text-orange-600 transition" x-text="text.nav_portfolio ? text.nav_portfolio[lang] : 'Portfolio'"></a>
            <a href="{{ route('pricing') }}" class="hover:text-orange-600 transition" x-text="text.price_badge ? text.price_badge[lang] : 'Pricing'"></a>
            <a href="{{ route('faq') }}" class="hover:text-orange-600 transition" x-text="text.nav_faq ? text.nav_faq[lang] : 'FAQ'"></a>
        </nav>

        <!-- Right Action Controls -->
        <div class="flex items-center gap-4">
            
            <!-- Language Switcher Toggle -->
            <div class="flex items-center bg-black/10 rounded-full p-1 border border-black/20" :class="scrolled ? 'bg-white/10 border-white/20' : ''">
                <button @click="setLang('ENG')" :class="lang === 'ENG' ? 'bg-orange-600 text-white' : (scrolled ? 'text-gray-300' : 'text-gray-700')" class="px-3 py-1 text-[10px] font-bold rounded-full transition-all">ENG</button>
                <button @click="setLang('BM')" :class="lang === 'BM' ? 'bg-orange-600 text-white' : (scrolled ? 'text-gray-300' : 'text-gray-700')" class="px-3 py-1 text-[10px] font-bold rounded-full transition-all">BM</button>
            </div>

            <!-- WhatsApp Chat CTA -->
            <a href="https://wa.me/601110051787?text=Hi%20MIJ%20Digital,%20saya%20berminat%20nak%20bina%20website" target="_blank" class="hidden sm:flex items-center gap-2 px-5 py-2.5 bg-orange-600 hover:bg-orange-700 text-white font-modernica font-bold text-xs tracking-wider uppercase rounded-full shadow-lg transition duration-300 hover:scale-105">
                <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-0.999 3.648 3.742-0.981z"/></svg>
                <span x-text="text.nav_chat ? text.nav_chat[lang] : 'Chat With Me'"></span>
            </a>

            <!-- Mobile Hamburger Button -->
            <button @click="mobileMenu = !mobileMenu" class="lg:hidden p-2 rounded-lg" :class="scrolled ? 'text-white' : 'text-gray-900'">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
            </button>
        </div>
    </div>

    <!-- Mobile Drawer Navigation -->
    <div x-show="mobileMenu" x-cloak class="lg:hidden fixed inset-0 bg-black/95 text-white z-50 p-8 flex flex-col justify-between">
        <div class="flex items-center justify-between">
            <span class="font-modernica font-black text-2xl">MIJ<span class="text-orange-600">.</span>DIGITAL</span>
            <button @click="mobileMenu = false" class="text-white text-3xl">&times;</button>
        </div>
        
        <nav class="flex flex-col gap-6 text-center font-modernica text-lg font-bold tracking-widest uppercase">
            <a @click="mobileMenu = false" href="{{ route('home') }}" class="hover:text-orange-500">Home</a>
            <a @click="mobileMenu = false" href="{{ route('services') }}" class="hover:text-orange-500">Services</a>
            <a @click="mobileMenu = false" href="{{ route('portfolio') }}" class="hover:text-orange-500">Portfolio</a>
            <a @click="mobileMenu = false" href="{{ route('pricing') }}" class="hover:text-orange-500">Pricing</a>
            <a @click="mobileMenu = false" href="{{ route('faq') }}" class="hover:text-orange-500">FAQ</a>
            <a @click="mobileMenu = false" href="{{ route('admin') }}" class="text-xs text-gray-500 hover:text-orange-500">Admin Portal</a>
        </nav>

        <a href="https://wa.me/601110051787" target="_blank" class="w-full py-4 bg-orange-600 text-white text-center font-bold uppercase rounded-full tracking-wider">
            WhatsApp Us
        </a>
    </div>
</header>
