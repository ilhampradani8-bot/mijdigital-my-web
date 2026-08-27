<!-- FontAwesome Icons for Footer -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

<!-- Footer Call to Action Banner -->
<section class="py-20 bg-gradient-to-br from-black via-[#0d0d0f] to-orange-950 text-white relative overflow-hidden border-t border-gray-800">
    <div class="max-w-5xl mx-auto px-6 text-center relative z-10" data-aos="fade-up">
        <span class="text-orange-500 font-bold tracking-[0.3em] text-xs uppercase mb-4 block" x-text="text.footer_head ? text.footer_head[lang] : 'READY TO LAUNCH?'"></span>
        <h2 class="font-modernica text-4xl sm:text-6xl font-black mb-6 leading-tight tracking-tight" x-text="text.footer_sub ? text.footer_sub[lang] : 'Tell us what you need.'"></h2>
        <div class="flex flex-wrap gap-4 justify-center items-center pt-4">
            <a href="https://wa.me/601110051787" target="_blank" class="px-8 py-4 bg-orange-600 hover:bg-orange-700 text-white font-modernica font-bold text-xs tracking-widest uppercase rounded-full shadow-2xl transition-all duration-300 hover:scale-105 flex items-center gap-3">
                <i class="fab fa-whatsapp text-lg"></i>
                <span x-text="text.btn_wa ? text.btn_wa[lang] : 'WhatsApp Now'"></span>
            </a>
            <a href="{{ route('pricing') }}" class="px-8 py-4 bg-white/10 hover:bg-white/20 border border-white/20 text-white font-modernica font-bold text-xs tracking-widest uppercase rounded-full transition-all duration-300">
                <span x-text="text.price_badge ? text.price_badge[lang] : 'View Pricing'"></span>
            </a>
        </div>
    </div>
</section>

<!-- Footer Main Links & Copyright -->
<footer class="bg-[#09090b] text-gray-400 py-16 border-t border-gray-900 text-sm font-sans">
    <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-12 mb-16">
        
        <!-- Col 1: Brand Info -->
        <div class="md:col-span-2 space-y-4">
            <a href="{{ route('home') }}" class="flex items-center gap-3">
                <img src="{{ asset('mij-logo.png') }}" alt="MIJ Logo" class="h-8 w-auto">
                <span class="font-modernica font-black text-2xl text-white">MIJ<span class="text-orange-600">.</span>DIGITAL</span>
            </a>
            <p class="text-xs leading-relaxed text-gray-400 max-w-md" x-text="text.hero_desc ? text.hero_desc[lang] : 'High performance web development & digital assets tailored for your business growth.'"></p>
            <div class="flex gap-3 pt-2">
                <a href="https://strava.app.link/profile" target="_blank" class="w-9 h-9 rounded-full bg-orange-600/20 text-orange-500 hover:bg-orange-600 hover:text-white flex items-center gap-0 justify-center transition"><i class="fab fa-strava text-sm"></i></a>
                <a href="https://wa.me/601110051787" target="_blank" class="w-9 h-9 rounded-full bg-emerald-600/20 text-emerald-500 hover:bg-emerald-600 hover:text-white flex items-center justify-center transition"><i class="fab fa-whatsapp text-sm"></i></a>
                <a href="{{ route('admin') }}" class="w-9 h-9 rounded-full bg-gray-800 text-gray-400 hover:bg-gray-700 hover:text-white flex items-center justify-center transition" title="Admin Login"><i class="fas fa-lock text-xs"></i></a>
            </div>
        </div>

        <!-- Col 2: Navigation Links -->
        <div>
            <h4 class="font-modernica text-xs font-bold uppercase tracking-widest text-white mb-6" x-text="text.ft_links ? text.ft_links[lang] : 'Quick Links'"></h4>
            <ul class="space-y-3 text-xs">
                <li><a href="{{ route('home') }}" class="hover:text-orange-500 transition">Home</a></li>
                <li><a href="{{ route('services') }}" class="hover:text-orange-500 transition">Services</a></li>
                <li><a href="{{ route('portfolio') }}" class="hover:text-orange-500 transition">Portfolio Showcase</a></li>
                <li><a href="{{ route('pricing') }}" class="hover:text-orange-500 transition">Pricing Packages</a></li>
                <li><a href="{{ route('faq') }}" class="hover:text-orange-500 transition">Frequently Asked Questions</a></li>
            </ul>
        </div>

        <!-- Col 3: Legal Links -->
        <div>
            <h4 class="font-modernica text-xs font-bold uppercase tracking-widest text-white mb-6" x-text="text.ft_legal_col ? text.ft_legal_col[lang] : 'Legal & Policies'"></h4>
            <ul class="space-y-3 text-xs">
                <li><a href="{{ route('privacy') }}" class="hover:text-orange-500 transition">Privacy Policy</a></li>
                <li><a href="{{ route('terms') }}" class="hover:text-orange-500 transition">Terms of Service</a></li>
                <li><a href="{{ route('cookies') }}" class="hover:text-orange-500 transition">Cookie Policy</a></li>
            </ul>
        </div>

    </div>

    <!-- Copyright Bar -->
    <div class="max-w-7xl mx-auto px-6 border-t border-gray-900 pt-8 flex flex-col sm:flex-row justify-between items-center text-xs text-gray-500 gap-4">
        <p x-text="text.ft_copy ? text.ft_copy[lang] : '© 2026 MIJ Digital ENT. All Rights Reserved.'"></p>
        <button @click="window.scrollTo({ top: 0, behavior: 'smooth' })" class="hover:text-white transition flex items-center gap-2">
            <span x-text="text.ft_back ? text.ft_back[lang] : 'Back to Top ↑'"></span>
        </button>
    </div>
</footer>
