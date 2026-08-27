<?php 
$pageTitle = 'Portfolio | MIJ Digital ENT'; 
include 'header.php'; 
?>

<section class="pt-64 pb-20 px-6 text-center relative z-10">
    <h1 class="font-modernica text-6xl md:text-9xl font-black mb-4 text-black leading-none"><span x-html="text.port_title[lang]"></span></h1>
    <p class="text-gray-900 font-bold tracking-widest uppercase text-sm md:text-base max-w-2xl mx-auto mt-4" x-text="text.port_sub[lang]"></p>
</section>

<section class="max-w-7xl mx-auto px-6 pb-32">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
        
        <template x-for="(item, index) in dynamic.portfolio_items" :key="index">
            <a :href="item.link" target="_blank" class="group relative block" data-aos="fade-up" :data-aos-delay="index * 100">
                
                <div class="aspect-[4/3] bg-gray-100 rounded-[2.5rem] overflow-hidden relative mb-6 border border-gray-200 shadow-sm group-hover:shadow-2xl transition duration-500">
                    
                    <template x-if="item.images && item.images.length > 0">
                        <img :src="item.images[0]" class="w-full h-full object-cover group-hover:scale-105 transition duration-700" alt="Portfolio Image">
                    </template>

                    <template x-if="!item.images || item.images.length === 0">
                        <div class="absolute inset-0 flex items-center justify-center bg-gray-50">
                            <svg class="w-20 h-20 text-gray-300 group-hover:text-orange-600 transition duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        </div>
                    </template>
                    
                    <div class="absolute inset-0 bg-black/5 group-hover:bg-transparent transition"></div>
                    
                    <div class="absolute bottom-6 right-6 bg-black text-white px-5 py-2 rounded-full text-xs font-bold uppercase tracking-widest opacity-0 group-hover:opacity-100 transition transform translate-y-2 group-hover:translate-y-0 shadow-lg">
                        Visit Site ↗
                    </div>
                </div>
                
                <div class="flex justify-between items-end px-2">
                    <div>
                        <span class="text-orange-600 font-bold tracking-widest text-xs uppercase mb-2 block">Client Project</span>
                        <h3 class="text-3xl md:text-4xl font-display font-black leading-none mb-1 group-hover:text-orange-600 transition" x-text="item.name"></h3>
                        <p class="text-gray-500 font-medium text-lg" x-text="item.role"></p>
                    </div>
                    <div class="w-14 h-14 rounded-full border border-gray-300 flex items-center justify-center group-hover:bg-black group-hover:border-black group-hover:text-white transition shadow-sm">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </div>
                </div>
            </a>
        </template>

        <div x-show="!dynamic.portfolio_items || dynamic.portfolio_items.length === 0" class="col-span-full py-20 text-center bg-gray-50 rounded-[3rem] border-2 border-dashed border-gray-200">
            <svg class="w-16 h-16 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path></svg>
            <p class="text-gray-500 font-bold text-lg">Portfolio list is empty.</p>
            <p class="text-sm text-orange-600 mt-2">Please add projects via Admin Panel.</p>
        </div>

    </div>
</section>

<?php include 'footer.php'; ?>