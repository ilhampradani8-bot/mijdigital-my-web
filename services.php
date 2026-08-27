<?php 
$pageTitle = 'Services | MIJ Digital ENT'; 
include 'header.php'; 
?>

<style>
    @keyframes float-slow { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-10px); } }
    .animate-float { animation: float-slow 4s ease-in-out infinite; }
    
    @keyframes orbit { from { transform: rotate(0deg) translateX(30px) rotate(0deg); } to { transform: rotate(360deg) translateX(30px) rotate(-360deg); } }
    .animate-orbit { animation: orbit 8s linear infinite; }

    @keyframes grow-bar { 0%, 100% { transform: scaleY(0.3); } 50% { transform: scaleY(1); } }
    .animate-grow-1 { animation: grow-bar 2s ease-in-out infinite; transform-origin: bottom; }
    .animate-grow-2 { animation: grow-bar 2s ease-in-out infinite 0.5s; transform-origin: bottom; }
    .animate-grow-3 { animation: grow-bar 2s ease-in-out infinite 1s; transform-origin: bottom; }

    @keyframes spin-gear { from { transform: rotate(0deg); } to { transform: rotate(360deg); } }
    .animate-spin-slow { animation: spin-gear 10s linear infinite; transform-origin: center; }
</style>

<section class="pt-48 pb-24 bg-gray-50 relative overflow-hidden">
    <div class="absolute inset-0 bg-[radial-gradient(#e5e7eb_1px,transparent_1px)] [background-size:24px_24px] opacity-60 pointer-events-none"></div>
    <div class="max-w-7xl mx-auto px-6 relative z-10 text-center">
            <span class="inline-block py-1 px-4 rounded-full bg-orange-100 text-orange-600 text-xs font-bold tracking-widest uppercase mb-6" data-aos="fade-up">
            <span x-text="text.serv_tag[lang]"></span>
        </span>
        <h1 class="font-modernica text-6xl md:text-8xl font-black mb-6 tracking-tighter text-black" data-aos="fade-up" data-aos-delay="100">
            <span x-show="lang === 'ENG'">OUR <span class="text-orange-600">SERVICES</span></span>
            <span x-show="lang === 'BM'" style="display: none;">SERVIS <span class="text-orange-600">KAMI</span></span>
        </h1>
        <p class="text-xl text-gray-500 max-w-2xl mx-auto font-medium leading-relaxed" data-aos="fade-up" data-aos-delay="200" x-text="text.serv_sub[lang]"></p>
    </div>
</section>

<section class="py-32 relative bg-white" id="services">
    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            
            <div id="personal-branding" class="group bg-white rounded-[2.5rem] p-10 border border-gray-100 hover:border-orange-500 transition-all duration-500 relative overflow-hidden shadow-xl hover:shadow-2xl hover:-translate-y-3" data-aos="fade-up" data-aos-delay="100">
                <div class="absolute inset-0 bg-gradient-to-br from-transparent via-transparent to-orange-50 opacity-0 group-hover:opacity-100 transition duration-500"></div>
                <div class="relative z-10 flex flex-col h-full items-center text-center">
                    <div class="w-32 h-32 mb-8 relative">
                        <svg class="w-full h-full" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="50" cy="50" r="40" stroke="#FED7AA" stroke-width="1" stroke-dasharray="4 4" class="animate-spin-slow" />
                            <g class="animate-orbit"><circle cx="50" cy="50" r="4" fill="#EA580C" /></g>
                            <g class="animate-float">
                                <circle cx="50" cy="45" r="18" fill="#FFEDD5" stroke="#EA580C" stroke-width="2"/>
                                <path d="M25 80 C 25 60, 75 60, 75 80" stroke="#EA580C" stroke-width="2" fill="#FFF7ED" stroke-linecap="round"/>
                                <circle cx="70" cy="35" r="8" fill="#EA580C" stroke="white" stroke-width="2"/>
                                <path d="M66 35 L 69 38 L 74 32" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </g>
                        </svg>
                    </div>
                    <h3 class="font-display font-black text-3xl mb-4 leading-tight text-gray-900 group-hover:text-orange-600 transition" x-text="text.s1_title[lang]"></h3>
                    <p class="text-gray-500 text-lg leading-relaxed font-medium mb-8" x-text="text.s1_desc[lang]"></p>
                </div>
            </div>

            <div id="corporate-branding" class="group bg-white rounded-[2.5rem] p-10 border border-gray-100 hover:border-black transition-all duration-500 relative overflow-hidden shadow-xl hover:shadow-2xl hover:-translate-y-3" data-aos="fade-up" data-aos-delay="200">
                <div class="absolute inset-0 bg-gradient-to-br from-transparent via-transparent to-gray-50 opacity-0 group-hover:opacity-100 transition duration-500"></div>
                <div class="relative z-10 flex flex-col h-full items-center text-center">
                    <div class="w-32 h-32 mb-8 relative">
                        <svg class="w-full h-full text-gray-800" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="30" y="40" width="40" height="50" rx="2" stroke="currentColor" stroke-width="2" fill="#F3F4F6"/>
                            <rect x="38" y="50" width="8" height="10" fill="currentColor" opacity="0.2"/>
                            <rect x="54" y="50" width="8" height="10" fill="currentColor" opacity="0.2"/>
                            <rect x="38" y="70" width="8" height="10" fill="currentColor" opacity="0.2"/>
                            <rect x="54" y="70" width="8" height="10" fill="currentColor" opacity="0.2"/>
                            <rect x="10" y="60" width="6" height="30" class="animate-grow-1" fill="#EA580C" rx="2"/>
                            <rect x="84" y="50" width="6" height="40" class="animate-grow-2" fill="#EA580C" rx="2"/>
                            <rect x="20" y="40" width="6" height="50" class="animate-grow-3" fill="#111827" rx="2"/>
                        </svg>
                    </div>
                    <h3 class="font-display font-black text-3xl mb-4 leading-tight text-gray-900 group-hover:text-black transition" x-text="text.s2_title[lang]"></h3>
                    <p class="text-gray-500 text-lg leading-relaxed font-medium mb-8" x-text="text.s2_desc[lang]"></p>
                </div>
            </div>

            <div id="business-system" class="group bg-white rounded-[2.5rem] p-10 border border-gray-100 hover:border-blue-600 transition-all duration-500 relative overflow-hidden shadow-xl hover:shadow-2xl hover:-translate-y-3" data-aos="fade-up" data-aos-delay="300">
                <div class="absolute inset-0 bg-gradient-to-br from-transparent via-transparent to-blue-50 opacity-0 group-hover:opacity-100 transition duration-500"></div>
                <div class="relative z-10 flex flex-col h-full items-center text-center">
                    <div class="w-32 h-32 mb-8 relative">
                        <svg class="w-full h-full text-blue-900" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="10" y="20" width="80" height="60" rx="4" stroke="currentColor" stroke-width="2" fill="#EFF6FF"/>
                            <path d="M10 35 H 90" stroke="currentColor" stroke-width="1"/>
                            <g class="animate-spin-slow" style="transform-origin: 75px 75px;">
                                <path d="M75 65 L75 85 M65 75 L85 75" stroke="#3B82F6" stroke-width="4" stroke-linecap="round"/>
                                <circle cx="75" cy="75" r="8" stroke="#3B82F6" stroke-width="2" fill="white"/>
                            </g>
                            <path d="M20 65 L 35 50 L 50 60 L 70 40" stroke="#EA580C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h3 class="font-display font-black text-3xl mb-4 leading-tight text-gray-900 group-hover:text-blue-600 transition" x-text="text.s3_title[lang]"></h3>
                    <p class="text-gray-500 text-lg leading-relaxed font-medium mb-8" x-text="text.s3_desc[lang]"></p>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include 'footer.php'; ?>