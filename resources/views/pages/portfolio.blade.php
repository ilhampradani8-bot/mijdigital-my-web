@extends('layouts.app')

@section('content')

<section class="pt-36 pb-24 bg-black text-white min-h-screen relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 relative z-10">
        
        <!-- Header -->
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="text-orange-500 font-bold tracking-[0.3em] text-xs uppercase mb-3 block" x-text="text.work_head ? text.work_head[lang] : 'OUR PORTFOLIO'"></span>
            <h1 class="font-modernica text-4xl sm:text-6xl font-black uppercase tracking-tight mb-4" x-html="text.port_title ? text.port_title[lang] : 'SELECTED WORKS'"></h1>
            <p class="text-gray-400 text-sm max-w-xl mx-auto" x-text="text.port_sub ? text.port_sub[lang] : 'Real Results for Real Clients'"></p>
        </div>

        <!-- Portfolio Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <template x-for="(item, index) in data.portfolio_items" :key="index">
                <div class="bg-[#121215] border border-gray-800 rounded-3xl overflow-hidden group hover:border-orange-500/50 transition-all duration-300 shadow-xl" data-aos="fade-up">
                    <div class="relative h-64 overflow-hidden bg-gray-900">
                        <img :src="item.images && item.images.length ? item.images[0] : '{{ asset('hero.jpg') }}'" :alt="item.name" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#121215] via-transparent to-transparent opacity-80"></div>
                        <span class="absolute top-4 left-4 px-3 py-1 bg-black/60 backdrop-blur-md text-orange-400 text-[10px] font-bold uppercase tracking-wider rounded-full border border-orange-500/30" x-text="item.role"></span>
                    </div>

                    <div class="p-6">
                        <h3 class="font-modernica font-bold text-xl text-white mb-3" x-text="item.name"></h3>
                        <div class="flex items-center justify-between pt-4 border-t border-gray-800">
                            <a :href="item.link" target="_blank" class="px-5 py-2.5 bg-orange-600 hover:bg-orange-700 text-white font-bold text-xs uppercase tracking-wider rounded-full transition duration-300 flex items-center gap-2">
                                <span x-text="text.view_details ? text.view_details[lang] : 'Visit Site'"></span>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </template>
        </div>

    </div>
</section>

@endsection
