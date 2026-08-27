@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section class="relative w-full min-h-[100vh] flex flex-col lg:flex-row items-stretch bg-[#FFFBF5] overflow-hidden" id="home">
    <div class="relative w-full lg:w-5/12 order-2 lg:order-1 flex-1 min-h-[40vh] lg:min-h-full z-10">
         <div class="hidden lg:block absolute top-20 bottom-20 -right-32 w-64 bg-black/30 blur-[120px] -z-10 pointer-events-none"></div>
         <div class="w-full h-full bg-[#0a0a0a] overflow-hidden group relative z-10 min-h-[300px] lg:min-h-full">
            <img src="{{ asset('hero.jpg') }}" alt="Profile" class="w-full h-full object-cover object-center transition duration-1000 group-hover:scale-105">
            <div class="absolute inset-x-0 bottom-0 h-40 bg-gradient-to-t from-[#0a0a0a] via-transparent to-transparent opacity-80 lg:hidden"></div>
         </div>
    </div>

    <div class="w-full lg:w-7/12 flex flex-col justify-center px-6 sm:px-12 pt-32 sm:pt-40 lg:pt-36 pb-16 lg:pb-20 z-20 order-1 lg:order-2 text-left relative text-gray-900">
        <div class="mx-auto max-w-3xl w-full flex flex-col justify-center">
            <div class="mb-4 flex items-center" data-aos="fade-up"> 
                <p class="text-orange-600 font-display font-bold tracking-[0.25em] uppercase text-[10px] sm:text-xs flex items-center gap-3">
                    <span class="w-8 h-[2px] bg-orange-600 inline-block"></span> 
                    <span x-text="text.hero_badge ? text.hero_badge[lang] : 'About Me'"></span>
                </p>
            </div>

            <h2 class="font-modernica text-xl sm:text-2xl lg:text-3xl font-bold text-gray-500 mb-2 leading-tight tracking-wide flex items-center" 
                data-aos="fade-up" data-aos-delay="100" 
                x-text="text.hero_sub ? text.hero_sub[lang] : 'I HIKE. I RUN.'">
            </h2>
            
            <h1 class="font-modernica text-3xl sm:text-5xl lg:text-6xl xl:text-7xl font-black leading-[1.05] mb-6 tracking-tighter text-gray-900">
                <span class="block" data-aos="fade-up" data-aos-delay="200" x-text="text.hero_and ? text.hero_and[lang] : 'AND'"></span>
                <span class="block text-gray-900" data-aos="fade-up" data-aos-delay="300" x-text="text.hero_build ? text.hero_build[lang] : 'I CAN BUILD'"></span>
                <span class="block" data-aos="fade-up" data-aos-delay="400">
                    <span class="text-gray-900" x-text="text.hero_a ? text.hero_a[lang] : 'A'"></span>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-600 via-orange-500 to-yellow-500" x-text="text.hero_beautiful ? text.hero_beautiful[lang] : 'BEAUTIFUL WEBSITE'"></span>
                </span>
                <span class="block text-gray-900" data-aos="fade-up" data-aos-delay="500" x-text="text.hero_foryou ? text.hero_foryou[lang] : 'FOR YOU.'"></span>
            </h1>

            <div class="mb-8 pl-5 border-l-4 border-orange-600 flex items-center pr-4" data-aos="fade-up" data-aos-delay="600">
                <p class="text-xs sm:text-sm md:text-base text-gray-600 font-sans font-medium leading-relaxed max-w-xl" x-text="text.hero_desc ? text.hero_desc[lang] : 'The discipline of the outdoors applied to pixel-perfect code.'"></p>
            </div>

            <div class="flex flex-wrap gap-4 justify-start items-center pb-2">
                <a href="{{ route('pricing') }}" class="px-8 py-4 bg-black text-white font-modernica font-bold text-xs tracking-[0.2em] uppercase hover:bg-orange-600 transition rounded-full shadow-xl flex items-center gap-3 whitespace-nowrap">
                    <span x-text="text.btn_start ? text.btn_start[lang] : 'Explore More'"></span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
                <a href="{{ route('portfolio') }}" class="group px-8 py-4 bg-white border-2 border-gray-200 text-black font-modernica font-bold text-xs tracking-[0.2em] uppercase hover:border-black transition rounded-full flex items-center gap-2 whitespace-nowrap hover:shadow-lg">
                    <span x-text="text.nav_portfolio ? text.nav_portfolio[lang] : 'Portfolio'"></span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio 3D Carousel Section -->
<section id="portfolio" class="py-24 bg-black text-white relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 relative z-10 text-center" data-aos="fade-up">
        <span class="text-orange-500 font-bold tracking-[0.3em] text-xs uppercase mb-3 block" x-text="text.work_head ? text.work_head[lang] : 'OUR BEST WORKS'"></span>
        <h2 class="font-modernica text-4xl md:text-6xl font-black text-white uppercase tracking-tight mb-4" x-html="text.port_title ? text.port_title[lang] : 'SELECTED WORKS'"></h2>
        <p class="text-gray-400 text-sm max-w-xl mx-auto mb-12" x-text="text.work_desc ? text.work_desc[lang] : 'We do not just build websites. We build digital assets.'"></p>
    </div>

    <!-- 3D Swiper Slider -->
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <template x-for="(item, index) in data.portfolio_items" :key="index">
                <div class="swiper-slide">
                    <div class="card-wrap-3d">
                        <div class="card-3d">
                            <div class="card-3d-bg" :style="'background-image: url(' + (item.images && item.images.length ? item.images[0] : '{{ asset('hero.jpg') }}') + ')'"></div>
                            <div class="card-3d-info">
                                <span class="text-[10px] font-bold text-orange-400 uppercase tracking-widest block" x-text="item.role"></span>
                                <h3 class="font-modernica font-bold text-lg text-white mb-2" x-text="item.name"></h3>
                                <a :href="item.link" target="_blank" class="inline-block px-4 py-2 bg-orange-600 hover:bg-orange-700 text-white font-bold text-[10px] uppercase rounded-full tracking-wider transition">
                                    <span x-text="text.view_details ? text.view_details[lang] : 'View Details'"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </template>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section id="testimonials" class="py-24 bg-[#0a0a0c] text-white relative">
    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <div class="mb-16 text-center" data-aos="fade-up">
            <span class="text-orange-500 font-bold tracking-[0.3em] text-xs uppercase mb-3 block" x-text="text.testi_badge ? text.testi_badge[lang] : 'TESTIMONIALS'"></span>
            <h2 class="font-modernica text-4xl md:text-6xl font-black text-white uppercase tracking-tight" x-text="text.testi_head ? text.testi_head[lang] : 'What they say about us.'"></h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-[#121215] border border-gray-800 p-8 rounded-2xl hover:border-orange-500/50 transition duration-300">
                <div class="flex items-center gap-1 text-amber-400 mb-4">
                    <span class="text-sm font-bold">★★★★★</span>
                    <span class="text-xs text-gray-400 ml-2">5.0</span>
                </div>
                <p class="text-gray-300 text-sm italic mb-6">"The response was incredibly fast! The website creation was lightning speed and I felt very safe handing over my data."</p>
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-orange-600 text-white font-bold flex items-center justify-center">NR</div>
                    <div>
                        <h4 class="font-bold text-sm text-white">Naqiuddin Razak</h4>
                        <p class="text-xs text-gray-500">Financial Adviser</p>
                    </div>
                </div>
            </div>

            <div class="bg-[#121215] border border-gray-800 p-8 rounded-2xl hover:border-orange-500/50 transition duration-300">
                <div class="flex items-center gap-1 text-amber-400 mb-4">
                    <span class="text-sm font-bold">★★★★★</span>
                    <span class="text-xs text-gray-400 ml-2">5.0</span>
                </div>
                <p class="text-gray-300 text-sm italic mb-6">"Sangat profesional dan faham apa yang syarikat perlukan. Rekabentuk yang diberikan jauh melampaui jangkaan kami!"</p>
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-orange-600 text-white font-bold flex items-center justify-center">AB</div>
                    <div>
                        <h4 class="font-bold text-sm text-white">Abmalaya Management</h4>
                        <p class="text-xs text-gray-500">Corporate Client</p>
                    </div>
                </div>
            </div>

            <div class="bg-[#121215] border border-gray-800 p-8 rounded-2xl hover:border-orange-500/50 transition duration-300">
                <div class="flex items-center gap-1 text-amber-400 mb-4">
                    <span class="text-sm font-bold">★★★★★</span>
                    <span class="text-xs text-gray-400 ml-2">5.0</span>
                </div>
                <p class="text-gray-300 text-sm italic mb-6">"Web3 and dApp integration were executed flawlessly. Highly recommended for custom business systems."</p>
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-orange-600 text-white font-bold flex items-center justify-center">IP</div>
                    <div>
                        <h4 class="font-bold text-sm text-white">Ilham Pradani</h4>
                        <p class="text-xs text-gray-500">Portfolio Dev</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
