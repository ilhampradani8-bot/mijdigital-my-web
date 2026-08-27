<?php 
$pageTitle = 'Pricing | MIJ Digital ENT'; 
include 'header.php'; 
?>

<section class="pt-40 pb-32 bg-gray-50 relative">
    <div class="absolute inset-0 bg-[radial-gradient(#cbd5e1_1px,transparent_1px)] [background-size:20px_20px] opacity-30 pointer-events-none"></div>
    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <div class="text-center mb-20" data-aos="fade-up">
            <span class="inline-block py-1 px-3 rounded-full bg-orange-100 text-orange-600 text-xs font-bold tracking-widest uppercase mb-4" x-text="text.price_badge[lang]"></span>
            <h2 class="font-modernica text-6xl md:text-8xl font-black text-black leading-[0.9] tracking-tighter"><span x-text="text.price_head_1[lang]"></span><span class="text-orange-600" x-text="text.price_head_2[lang]"></span></h2>
            <p class="text-xl text-gray-500 mt-6 max-w-2xl mx-auto font-medium" x-text="text.price_sub[lang]"></p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 items-stretch">
            
            <div class="flex flex-col relative bg-white rounded-[2rem] border border-gray-200 p-8 shadow-xl hover:shadow-2xl hover:border-orange-500 transition-all duration-300 group h-full" data-aos="fade-up" data-aos-delay="100">
                <div class="absolute top-6 right-6 bg-orange-100 text-orange-700 text-[10px] font-black px-3 py-1 rounded-full uppercase tracking-widest border border-orange-200 animate-pulse" x-text="text.promo_tag[lang]"></div>
                <div class="mb-8 border-b border-gray-100 pb-8">
                    <h3 class="font-display font-black text-2xl uppercase mb-4 text-gray-900">Personal<br>Branding</h3>
                    <p class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-2" x-text="text.price_start[lang]"></p>
                    
                    <div class="flex flex-col items-start">
                        <span class="text-xl text-gray-300 line-through font-bold mb-[-5px] ml-1" x-text="text.p1_old[lang]"></span>
                        <div class="flex items-start text-orange-600 leading-none -ml-1">
                            <span class="text-3xl font-black mt-2 mr-1">RM</span>
                            <span class="text-[5rem] font-modernica font-black tracking-tighter" x-text="text.p1_new[lang]"></span>
                        </div>
                    </div>
                </div>
                <ul class="space-y-4 mb-8 flex-grow">
                    <li class="flex items-start gap-3"><div class="w-6 h-6 rounded-full bg-orange-50 flex items-center justify-center flex-shrink-0 mt-0.5"><svg class="w-3 h-3 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg></div><span class="text-gray-600 font-medium text-sm leading-tight" x-text="text.pb_feat_1[lang]"></span></li>
                    <li class="flex items-start gap-3"><div class="w-6 h-6 rounded-full bg-orange-50 flex items-center justify-center flex-shrink-0 mt-0.5"><svg class="w-3 h-3 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg></div><span class="text-gray-600 font-medium text-sm leading-tight" x-text="text.pb_feat_2[lang]"></span></li>
                    <li class="flex items-start gap-3"><div class="w-6 h-6 rounded-full bg-green-50 flex items-center justify-center flex-shrink-0 mt-0.5"><svg class="w-3 h-3 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg></div><span class="text-gray-600 font-medium text-sm leading-tight" x-text="text.pb_feat_3[lang]"></span></li>
                </ul>
                <a href="https://wa.me/601155886905?text=I'm%20interested%20in%20Personal%20Branding%20Promo" target="_blank" class="w-full py-4 rounded-xl bg-gray-50 border border-gray-200 text-gray-900 font-bold uppercase tracking-widest text-xs hover:bg-orange-600 hover:text-white hover:border-orange-600 transition-all flex justify-center items-center gap-2 group-hover:shadow-lg"><span x-text="text.price_btn[lang]"></span> →</a>
            </div>

            <div class="flex flex-col relative bg-[#0a0a0a] rounded-[2rem] border border-gray-800 p-8 shadow-2xl hover:shadow-orange-900/20 transition-all duration-300 group h-full transform md:-translate-y-4" data-aos="fade-up" data-aos-delay="200">
                <div class="mb-8 border-b border-gray-800 pb-8">
                    <h3 class="font-display font-black text-2xl uppercase mb-4 text-white">Corporate<br>Branding</h3>
                    <p class="text-xs font-bold text-gray-500 uppercase tracking-widest mb-2" x-text="text.price_start[lang]"></p>
                    
                    <div class="flex flex-col items-start">
                        <span class="text-xl text-gray-600 line-through font-bold mb-[-5px] ml-1" x-text="text.p2_old[lang]"></span>
                        <div class="flex items-start text-white leading-none -ml-1">
                            <span class="text-3xl font-black mt-2 mr-1">RM</span>
                            <span class="text-[5rem] font-modernica font-black tracking-tighter" x-text="text.p2_new[lang]"></span>
                        </div>
                    </div>
                </div>
                <ul class="space-y-4 mb-8 flex-grow">
                    <li class="flex items-start gap-3"><div class="w-6 h-6 rounded-full bg-gray-800 flex items-center justify-center flex-shrink-0 mt-0.5"><svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg></div><span class="text-gray-300 font-medium text-sm leading-tight" x-text="text.cb_feat_1[lang]"></span></li>
                    <li class="flex items-start gap-3"><div class="w-6 h-6 rounded-full bg-gray-800 flex items-center justify-center flex-shrink-0 mt-0.5"><svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg></div><span class="text-gray-300 font-medium text-sm leading-tight" x-text="text.cb_feat_2[lang]"></span></li>
                    <li class="flex items-start gap-3"><div class="w-6 h-6 rounded-full bg-gray-800 flex items-center justify-center flex-shrink-0 mt-0.5"><svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg></div><span class="text-gray-300 font-medium text-sm leading-tight" x-text="text.cb_feat_3[lang]"></span></li>
                </ul>
                <a href="https://wa.me/601155886905?text=I'm%20interested%20in%20Corporate%20Branding" target="_blank" class="w-full py-4 rounded-xl bg-orange-600 border border-orange-600 text-white font-bold uppercase tracking-widest text-xs hover:bg-white hover:text-orange-600 transition-all flex justify-center items-center gap-2 shadow-lg hover:shadow-orange-500/50"><span x-text="text.price_btn[lang]"></span> →</a>
            </div>

            <div class="flex flex-col relative bg-white rounded-[2rem] border border-gray-200 p-8 shadow-xl hover:shadow-2xl hover:border-blue-500 transition-all duration-300 group h-full" data-aos="fade-up" data-aos-delay="300">
                <div class="absolute top-6 right-6 bg-blue-100 text-blue-700 text-[10px] font-black px-3 py-1 rounded-full uppercase tracking-widest border border-blue-200 animate-pulse">SPECIAL DEAL</div>
                <div class="mb-8 border-b border-gray-100 pb-8"><h3 class="font-display font-black text-2xl uppercase mb-2 text-gray-900">Business<br>System</h3><p class="text-xs text-gray-500 font-medium mb-4 leading-relaxed" x-text="text.price_lms_desc[lang]"></p><p class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-2" x-text="text.price_start[lang]"></p><div class="flex items-baseline gap-3"><span class="text-4xl font-black text-gray-900 tracking-tighter" x-text="text.price_custom[lang]"></span></div></div>
                <ul class="space-y-4 mb-8 flex-grow">
                    <li class="flex items-start gap-3"><div class="w-6 h-6 rounded-full bg-gray-100 flex items-center justify-center flex-shrink-0 mt-0.5"><svg class="w-3 h-3 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg></div><span class="text-gray-600 font-medium text-sm leading-tight" x-text="text.lms_feat_1[lang]"></span></li>
                    <li class="flex items-start gap-3"><div class="w-6 h-6 rounded-full bg-gray-100 flex items-center justify-center flex-shrink-0 mt-0.5"><svg class="w-3 h-3 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg></div><span class="text-gray-600 font-medium text-sm leading-tight" x-text="text.lms_feat_2[lang]"></span></li>
                    <li class="flex items-start gap-3"><div class="w-6 h-6 rounded-full bg-gray-100 flex items-center justify-center flex-shrink-0 mt-0.5"><svg class="w-3 h-3 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg></div><span class="text-gray-600 font-medium text-sm leading-tight" x-text="text.lms_feat_3[lang]"></span></li>
                </ul>
                <a href="https://wa.me/601155886905?text=I'm%20interested%20in%20System" target="_blank" class="w-full py-4 rounded-xl bg-gray-900 border border-gray-900 text-white font-bold uppercase tracking-widest text-xs hover:bg-white hover:text-black transition-all flex justify-center items-center gap-2 group-hover:shadow-lg">Discuss Now →</a>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>