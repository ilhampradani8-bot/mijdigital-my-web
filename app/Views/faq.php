<?php 
$pageTitle = 'FAQ | MIJ Digital ENT'; 
include 'header.php'; 
?>

<section class="pt-48 pb-32 min-h-screen bg-gray-50 relative" x-data="{ active: null }">
    <div class="absolute inset-0 bg-[radial-gradient(#e5e7eb_1px,transparent_1px)] [background-size:24px_24px] opacity-60 pointer-events-none"></div>
    <div class="max-w-4xl mx-auto px-6 relative z-10">
        
        <div class="text-center mb-20" data-aos="fade-up">
            <h1 class="font-modernica text-6xl md:text-8xl font-black mb-6 tracking-tighter text-black" x-text="text.faq_head[lang]"></h1>
            <p class="text-xl text-gray-500 font-medium max-w-2xl mx-auto" x-text="text.faq_sub[lang]"></p>
        </div>

        <div class="space-y-6">
            
            <div id="about-me" class="bg-white rounded-3xl overflow-hidden border border-gray-100 shadow-xl hover:shadow-2xl transition-all duration-300" 
                 :class="active === 1 ? 'border-orange-500 ring-2 ring-orange-500/20' : ''"
                 data-aos="fade-up" data-aos-delay="100">
                
                <button @click="active === 1 ? active = null : active = 1" 
                        class="w-full px-8 py-6 flex items-center justify-between text-left focus:outline-none group">
                    <div class="flex items-center gap-6">
                        <span class="text-sm font-mono text-orange-500 opacity-50">01</span>
                        <h3 class="font-bold text-xl text-gray-900 group-hover:text-orange-600 transition-colors uppercase tracking-wider" x-text="text.q1[lang]"></h3>
                    </div>
                    <span class="text-3xl font-black text-gray-300 group-hover:text-orange-600 transition-transform duration-300" :class="active === 1 ? 'rotate-45' : ''">+</span>
                </button>
                
                <div x-show="active === 1" x-collapse>
                    <div class="px-8 pb-8 pt-2 text-gray-600 leading-relaxed text-lg border-t border-gray-50">
                        <div class="pt-4">
                            <p class="mb-6" x-text="text.a1[lang]"></p>
                            
                            <div class="flex flex-wrap gap-3 items-center">
                                <a href="https://people.utm.my/ikhwanjamal" target="_blank" class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-black text-white text-sm font-bold hover:bg-orange-600 transition shadow-md h-12">
                                    <span x-show="lang === 'ENG'">View Profile</span>
                                    <span x-show="lang === 'BM'" style="display: none;">Lihat Profil</span>
                                    <span>↗</span>
                                </a>

                                <a href="https://www.strava.com/athletes/186812023" target="_blank" class="inline-flex items-center justify-center gap-2 px-6 py-3 rounded-full bg-white border border-gray-300 hover:border-[#FC4C02] hover:bg-orange-50 transition shadow-sm h-12 group">
                                    <img src="strava.png" alt="Strava" class="h-5 w-auto"> 
                                    <span class="font-bold text-sm text-gray-700 group-hover:text-[#FC4C02] transition-colors" x-text="text.btn_strava[lang]">Check My Strava</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <template x-for="i in 4" :key="i+1">
                <div class="bg-white rounded-3xl overflow-hidden border border-gray-100 shadow-xl hover:shadow-2xl transition-all duration-300" 
                     :class="active === i+1 ? 'border-orange-500 ring-2 ring-orange-500/20' : ''"
                     data-aos="fade-up" :data-aos-delay="(i+1)*100">
                    
                    <button @click="active === i+1 ? active = null : active = i+1" 
                            class="w-full px-8 py-6 flex items-center justify-between text-left focus:outline-none group">
                        <div class="flex items-center gap-6">
                            <span class="text-sm font-mono text-orange-500 opacity-50" x-text="'0' + (i+1)"></span>
                            <h3 class="font-bold text-xl text-gray-900 group-hover:text-orange-600 transition-colors uppercase tracking-wider" x-text="text['q'+(i+1)][lang]"></h3>
                        </div>
                        <span class="text-3xl font-black text-gray-300 group-hover:text-orange-600 transition-transform duration-300" :class="active === i+1 ? 'rotate-45' : ''">+</span>
                    </button>
                    
                    <div x-show="active === i+1" x-collapse>
                        <div class="px-8 pb-8 pt-2 text-gray-600 leading-relaxed text-lg border-t border-gray-50">
                            <p class="pt-4" x-text="text['a'+(i+1)][lang]"></p>
                        </div>
                    </div>
                </div>
            </template>

        </div>
    </div>
</section>

<?php include 'footer.php'; ?>