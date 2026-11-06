<?php 
// Metadata SEO Khusus Halaman FAQ
$pageTitle = 'Soalan Lazim (FAQ) Web Development & Sistem | MIJ Digital ENT'; 
$pageDescription = 'Jawapan lengkap kepada soalan lazim mengenai tempoh siap website, kaedah bayaran, sokongan teknikal 1 tahun percuma, dan teknologi pembangunan laman web MIJ Digital.';
$pageKeywords = 'soalan lazim website, faq web design, tempoh bina website, kos web developer malaysia, waranti website';

include 'header.php'; 
?>

<section class="pt-40 pb-28 bg-[#f8fafc] relative min-h-screen" x-data="{ active: null }">
    <div class="max-w-7xl mx-auto px-6 relative z-10">
        
        <!-- Left-Aligned Section Header -->
        <div class="text-left mb-12" data-aos="fade-right">
            <div class="flex items-center gap-2.5 mb-3">
                <span class="w-8 h-[2px] bg-orange-600 inline-block"></span>
                <span class="text-orange-600 font-bold tracking-[0.25em] text-xs uppercase" x-text="text.faq_head ? text.faq_head[lang] : 'FAQ'">FAQ</span>
            </div>
            <h1 class="font-modernica text-4xl sm:text-5xl md:text-7xl font-black text-gray-900 uppercase tracking-tight leading-none">
                <span x-show="lang === 'ENG'">FREQUENTLY <span class="text-orange-600">ASKED</span></span>
                <span x-show="lang === 'BM'">SOALAN <span class="text-orange-600">LAZIM</span></span>
            </h1>
            <p class="text-gray-600 font-medium text-sm sm:text-base leading-relaxed mt-3 max-w-xl" x-text="text.faq_sub[lang]"></p>
        </div>

        <!-- Compact FAQ Accordion Box (Full Width) -->
        <div class="faq bg-white rounded-xl shadow-lg border border-slate-200/80 divide-y divide-dashed divide-slate-200 overflow-hidden w-full" data-aos="fade-up">
            
            <!-- Question 1: Personal Bio & Profile -->
            <div id="about-me" class="card bg-transparent border-0">
                <div class="card-header p-0">
                    <button @click="active === 1 ? active = null : active = 1" 
                            class="w-full px-6 py-4.5 flex items-center justify-between text-left focus:outline-none hover:bg-orange-500/10 hover:pl-8 transition-all duration-300 group cursor-pointer">
                        <div class="flex items-center gap-4">
                            <span class="inline-flex items-center justify-center w-7 h-7 rounded-full bg-orange-600 text-white font-bold text-xs shrink-0 shadow-sm">1</span>
                            <h3 class="font-bold text-base md:text-lg text-slate-800 group-hover:text-orange-600 transition-colors uppercase tracking-wide" x-text="text.q1[lang]"></h3>
                        </div>
                        <span class="text-2xl font-black text-slate-400 group-hover:text-orange-600 transition-transform duration-300 ml-4 shrink-0" :class="active === 1 ? 'rotate-45 text-orange-600' : ''">+</span>
                    </button>
                </div>
                
                <div x-show="active === 1" x-collapse>
                    <div class="px-7 py-5 text-slate-600 text-sm md:text-base leading-relaxed bg-slate-50/80 border-t border-slate-100">
                        <p class="mb-4" x-text="text.a1[lang]"></p>
                        
                        <div class="flex flex-wrap gap-3 items-center pt-1">
                            <a href="https://people.utm.my/ikhwanjamal" target="_blank" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full bg-black text-white text-xs font-bold hover:bg-orange-600 transition shadow-md">
                                <span x-show="lang === 'ENG'">View Profile</span>
                                <span x-show="lang === 'BM'" style="display: none;">Lihat Profil</span>
                                <span>↗</span>
                            </a>

                            <a href="https://www.strava.com/athletes/186812023" target="_blank" class="inline-flex items-center justify-center gap-2 px-5 py-2.5 rounded-full bg-white border border-gray-300 hover:border-[#FC4C02] hover:bg-orange-50 transition shadow-sm group">
                                <img src="strava.png" alt="Strava" class="h-4 w-auto"> 
                                <span class="font-bold text-xs text-gray-700 group-hover:text-[#FC4C02] transition-colors" x-text="text.btn_strava[lang]">Check My Strava</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Questions 2 to 7 Loop -->
            <template x-for="i in [2, 3, 4, 5, 6, 7]" :key="i">
                <div class="card bg-transparent border-0">
                    <div class="card-header p-0">
                        <button @click="active === i ? active = null : active = i" 
                                class="w-full px-6 py-4.5 flex items-center justify-between text-left focus:outline-none hover:bg-orange-500/10 hover:pl-8 transition-all duration-300 group cursor-pointer">
                            <div class="flex items-center gap-4">
                                <span class="inline-flex items-center justify-center w-7 h-7 rounded-full bg-orange-600 text-white font-bold text-xs shrink-0 shadow-sm" x-text="i"></span>
                                <h3 class="font-bold text-base md:text-lg text-slate-800 group-hover:text-orange-600 transition-colors uppercase tracking-wide" x-text="text['q'+i] ? text['q'+i][lang] : ''"></h3>
                            </div>
                            <span class="text-2xl font-black text-slate-400 group-hover:text-orange-600 transition-transform duration-300 ml-4 shrink-0" :class="active === i ? 'rotate-45 text-orange-600' : ''">+</span>
                        </button>
                    </div>
                    
                    <div x-show="active === i" x-collapse>
                        <div class="px-7 py-5 text-slate-600 text-sm md:text-base leading-relaxed bg-slate-50/80 border-t border-slate-100">
                            <p x-text="text['a'+i] ? text['a'+i][lang] : ''"></p>
                        </div>
                    </div>
                </div>
            </template>

        </div>
    </div>
</section>

<?php include 'footer.php'; ?>