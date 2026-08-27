<?php 
// Judul Halaman Spesifik untuk Tab Browser
$pageTitle = 'MIJ Digital - Professional Web Solutions'; 
// Memanggil bagian atas website (Meta tag, CSS, Menu Navigasi)
include 'header.php'; 
?>

<section class="relative w-full min-h-[100vh] flex flex-col lg:flex-row items-stretch bg-[#FFFBF5] overflow-hidden" id="home">
    
    <div class="relative w-full lg:w-5/12 order-2 lg:order-1 flex-1 min-h-[40vh] lg:min-h-full z-10">
         <div class="hidden lg:block absolute top-20 bottom-20 -right-32 w-64 bg-black/30 blur-[120px] -z-10 pointer-events-none"></div>
         <div class="w-full h-full bg-[#0a0a0a] overflow-hidden group relative z-10 min-h-[300px] lg:min-h-full">
            <img src="hero.jpg" alt="Profile" class="w-full h-full object-cover object-center transition duration-1000 group-hover:scale-105">
            <div class="absolute inset-x-0 bottom-0 h-40 bg-gradient-to-t from-[#0a0a0a] via-transparent to-transparent opacity-80 lg:hidden"></div>
         </div>
    </div>

    <div class="w-full lg:w-7/12 flex flex-col justify-center px-6 sm:px-12 pt-32 sm:pt-40 lg:pt-36 pb-16 lg:pb-20 z-20 order-1 lg:order-2 text-left relative text-gray-900">
        
        <div class="mx-auto max-w-3xl w-full flex flex-col justify-center">

            <div class="mb-4 flex items-center" data-aos="fade-up"> 
                <p class="text-orange-600 font-display font-bold tracking-[0.25em] uppercase text-[10px] sm:text-xs flex items-center gap-3">
                    <span class="w-8 h-[2px] bg-orange-600 inline-block"></span> 
                    <span x-text="text.hero_badge[lang]"></span>
                </p>
            </div>

            <h2 class="font-modernica text-xl sm:text-2xl lg:text-3xl font-bold text-gray-500 mb-2 leading-tight tracking-wide flex items-center" 
                data-aos="fade-up" data-aos-delay="100" 
                x-text="text.hero_sub[lang]">
            </h2>
            
            <h1 class="font-modernica text-3xl sm:text-5xl lg:text-6xl xl:text-7xl font-black leading-[1.05] mb-6 tracking-tighter text-gray-900">
                <span class="block" data-aos="fade-up" data-aos-delay="200" x-text="text.hero_and[lang]"></span>
                <span class="block text-gray-900" data-aos="fade-up" data-aos-delay="300" x-text="text.hero_build[lang]"></span>
                <span class="block" data-aos="fade-up" data-aos-delay="400">
                    <span class="text-gray-900" x-text="text.hero_a[lang]"></span>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-600 via-orange-500 to-yellow-500" x-text="text.hero_beautiful[lang]"></span>
                </span>
                <span class="block text-gray-900" data-aos="fade-up" data-aos-delay="500" x-text="text.hero_foryou[lang]"></span>
            </h1>

            <div class="mb-8 pl-5 border-l-4 border-orange-600 flex items-center pr-4" data-aos="fade-up" data-aos-delay="600">
                <p class="text-xs sm:text-sm md:text-base text-gray-600 font-sans font-medium leading-relaxed max-w-xl" x-text="text.hero_desc[lang]"></p>
            </div>

            <div class="flex flex-wrap gap-4 justify-start items-center pb-2">
                <a href="#pricing" class="px-8 py-4 bg-black text-white font-modernica font-bold text-xs tracking-[0.2em] uppercase hover:bg-orange-600 transition rounded-full shadow-xl flex items-center gap-3 whitespace-nowrap">
                    <span x-text="text.btn_start[lang]"></span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
                
                <a href="portfolio.php" class="group px-8 py-4 bg-white border-2 border-gray-200 text-black font-modernica font-bold text-xs tracking-[0.2em] uppercase hover:border-black transition rounded-full flex items-center gap-2 whitespace-nowrap hover:shadow-lg">
                    <span x-text="text.nav_portfolio[lang]"></span>
                </a>
            </div>

        </div>
    </div>
</section>


<section id="testimonials" class="py-24 bg-black text-white relative overflow-hidden">
    
    <div class="absolute inset-0 bg-[radial-gradient(#333_1px,transparent_1px)] [background-size:20px_20px] opacity-30 pointer-events-none"></div>
    <div class="absolute top-0 right-0 w-[400px] h-[400px] bg-orange-600/10 blur-[120px] rounded-full"></div>

    <div class="max-w-7xl mx-auto px-6 relative z-10">
        
        <div class="mb-16 text-center" data-aos="fade-up">
            <span class="text-orange-500 font-bold tracking-[0.3em] text-xs uppercase mb-3 block" x-text="text.testi_badge[lang]"></span>
            <h2 class="font-modernica text-4xl md:text-6xl font-black text-white leading-none uppercase tracking-tight max-w-4xl mx-auto" x-text="text.testi_head[lang]"></h2>
        </div>

        <div class="swiper testimonialSwiper pb-12" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
                
                <div class="swiper-slide h-auto">
                    <div class="bg-[#121212] border border-gray-800 p-8 rounded-none h-full flex flex-col relative hover:border-orange-500/50 hover:shadow-2xl hover:shadow-orange-500/10 transition-all duration-300 group">
                        <div class="flex items-center justify-between mb-4 pb-3 border-b border-gray-800/60">
                            <div class="flex items-center gap-1 text-amber-400">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <span class="text-xs font-bold text-gray-400 ml-1">5.0</span>
                            </div>
                            <svg class="w-5 h-5 shrink-0 opacity-80 group-hover:opacity-100 transition-opacity" viewBox="0 0 24 24">
                                <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                                <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                                <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.06H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.94l2.85-2.22.81-.63z"/>
                                <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.06l3.66 2.84c.87-2.6 3.3-4.52 6.16-4.52z"/>
                            </svg>
                        </div>

                        <p class="text-gray-300 text-sm leading-relaxed mb-6 italic flex-grow">
                            <span x-show="lang === 'ENG'">"The response was incredibly fast! The website creation was lightning speed and I felt very safe handing over my data."</span>
                            <span x-show="lang === 'BM'">"Respon sangat cepat sekali! Pembuatannya kilat dan rasa sangat aman serahkan data pada mereka."</span>
                        </p>

                        <div class="mt-auto pt-4 border-t border-gray-800/80">
                            <h4 class="font-bold text-white text-base tracking-wide">Ahmad Zulfikar</h4>
                            <p class="text-xs text-orange-500 font-semibold tracking-wide">Financial Consultant</p>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide h-auto">
                    <div class="bg-[#121212] border border-gray-800 p-8 rounded-none h-full flex flex-col relative hover:border-orange-500/50 hover:shadow-2xl hover:shadow-orange-500/10 transition-all duration-300 group">
                        <div class="flex items-center justify-between mb-4 pb-3 border-b border-gray-800/60">
                            <div class="flex items-center gap-1 text-amber-400">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <span class="text-xs font-bold text-gray-400 ml-1">5.0</span>
                            </div>
                            <svg class="w-5 h-5 shrink-0 opacity-80 group-hover:opacity-100 transition-opacity" viewBox="0 0 24 24">
                                <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                                <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                                <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.06H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.94l2.85-2.22.81-.63z"/>
                                <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.06l3.66 2.84c.87-2.6 3.3-4.52 6.16-4.52z"/>
                            </svg>
                        </div>

                        <p class="text-gray-300 text-sm leading-relaxed mb-6 italic flex-grow">
                            <span x-show="lang === 'ENG'">"Secure and fast. I was worried about my customer data, but MIJ's security setup is top notch. Highly recommended!"</span>
                            <span x-show="lang === 'BM'">"Cepat dan selamat. Mula-mula risau pasal data pelanggan, tapi sekuriti MIJ memang terbaik. Sangat rekomen!"</span>
                        </p>

                        <div class="mt-auto pt-4 border-t border-gray-800/80">
                            <h4 class="font-bold text-white text-base tracking-wide">Sarah Kamilia</h4>
                            <p class="text-xs text-orange-500 font-semibold tracking-wide">Founder Hijab Brand</p>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide h-auto">
                    <div class="bg-[#121212] border border-gray-800 p-8 rounded-none h-full flex flex-col relative hover:border-orange-500/50 hover:shadow-2xl hover:shadow-orange-500/10 transition-all duration-300 group">
                        <div class="flex items-center justify-between mb-4 pb-3 border-b border-gray-800/60">
                            <div class="flex items-center gap-1 text-amber-400">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <span class="text-xs font-bold text-gray-400 ml-1">5.0</span>
                            </div>
                            <svg class="w-5 h-5 shrink-0 opacity-80 group-hover:opacity-100 transition-opacity" viewBox="0 0 24 24">
                                <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                                <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                                <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.06H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.94l2.85-2.22.81-.63z"/>
                                <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.06l3.66 2.84c.87-2.6 3.3-4.52 6.16-4.52z"/>
                            </svg>
                        </div>

                        <p class="text-gray-300 text-sm leading-relaxed mb-6 italic flex-grow">
                            <span x-show="lang === 'ENG'">"Professional, safe, and fast delivery. I don't worry about hackers because MIJ handles everything perfectly."</span>
                            <span x-show="lang === 'BM'">"Profesional, selamat, dan siap cepat. Saya tak risau pasal hacker sebab MIJ uruskan semuanya dengan sempurna."</span>
                        </p>

                        <div class="mt-auto pt-4 border-t border-gray-800/80">
                            <h4 class="font-bold text-white text-base tracking-wide">Dr. Razak</h4>
                            <p class="text-xs text-orange-500 font-semibold tracking-wide">Dental Clinic</p>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide h-auto">
                    <div class="bg-[#121212] border border-gray-800 p-8 rounded-none h-full flex flex-col relative hover:border-orange-500/50 hover:shadow-2xl hover:shadow-orange-500/10 transition-all duration-300 group">
                        <div class="flex items-center justify-between mb-4 pb-3 border-b border-gray-800/60">
                            <div class="flex items-center gap-1 text-amber-400">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <span class="text-xs font-bold text-gray-400 ml-1">5.0</span>
                            </div>
                            <svg class="w-5 h-5 shrink-0 opacity-80 group-hover:opacity-100 transition-opacity" viewBox="0 0 24 24">
                                <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                                <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                                <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.06H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.94l2.85-2.22.81-.63z"/>
                                <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.06l3.66 2.84c.87-2.6 3.3-4.52 6.16-4.52z"/>
                            </svg>
                        </div>

                        <p class="text-gray-300 text-sm leading-relaxed mb-6 italic flex-grow">
                            <span x-show="lang === 'ENG'">"The fastest developer I've worked with. The system is stable and the admin panel is very secure."</span>
                            <span x-show="lang === 'BM'">"Developer paling laju saya pernah jumpa. Sistem stabil dan panel admin sangat selamat (secure)."</span>
                        </p>

                        <div class="mt-auto pt-4 border-t border-gray-800/80">
                            <h4 class="font-bold text-white text-base tracking-wide">Maya R.</h4>
                            <p class="text-xs text-orange-500 font-semibold tracking-wide">Agency Owner</p>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide h-auto">
                    <div class="bg-[#121212] border border-gray-800 p-8 rounded-none h-full flex flex-col relative hover:border-orange-500/50 hover:shadow-2xl hover:shadow-orange-500/10 transition-all duration-300 group">
                        <div class="flex items-center justify-between mb-4 pb-3 border-b border-gray-800/60">
                            <div class="flex items-center gap-1 text-amber-400">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <span class="text-xs font-bold text-gray-400 ml-1">5.0</span>
                            </div>
                            <svg class="w-5 h-5 shrink-0 opacity-80 group-hover:opacity-100 transition-opacity" viewBox="0 0 24 24">
                                <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                                <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                                <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.06H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.94l2.85-2.22.81-.63z"/>
                                <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.06l3.66 2.84c.87-2.6 3.3-4.52 6.16-4.52z"/>
                            </svg>
                        </div>

                        <p class="text-gray-300 text-sm leading-relaxed mb-6 italic flex-grow">
                            <span x-show="lang === 'ENG'">"Trustworthy service. Handed over my login details and they set up everything securely within 48 hours."</span>
                            <span x-show="lang === 'BM'">"Servis yang boleh dipercayai. Saya bagi login detail dan mereka setup semua dengan selamat dalam 48 jam."</span>
                        </p>

                        <div class="mt-auto pt-4 border-t border-gray-800/80">
                            <h4 class="font-bold text-white text-base tracking-wide">Khairul A.</h4>
                            <p class="text-xs text-orange-500 font-semibold tracking-wide">Property Agent</p>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide h-auto">
                    <div class="bg-[#121212] border border-gray-800 p-8 rounded-none h-full flex flex-col relative hover:border-orange-500/50 hover:shadow-2xl hover:shadow-orange-500/10 transition-all duration-300 group">
                        <div class="flex items-center justify-between mb-4 pb-3 border-b border-gray-800/60">
                            <div class="flex items-center gap-1 text-amber-400">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <span class="text-xs font-bold text-gray-400 ml-1">5.0</span>
                            </div>
                            <svg class="w-5 h-5 shrink-0 opacity-80 group-hover:opacity-100 transition-opacity" viewBox="0 0 24 24">
                                <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                                <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                                <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.06H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.94l2.85-2.22.81-.63z"/>
                                <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.06l3.66 2.84c.87-2.6 3.3-4.52 6.16-4.52z"/>
                            </svg>
                        </div>

                        <p class="text-gray-300 text-sm leading-relaxed mb-6 italic flex-grow">
                            <span x-show="lang === 'ENG'">"Super responsive support! Whenever I have a question, they reply instantly. The site is running perfectly."</span>
                            <span x-show="lang === 'BM'">"Support sangat responsif! Bila tanya soalan, terus jawab. Website berjalan lancar tanpa masalah."</span>
                        </p>

                        <div class="mt-auto pt-4 border-t border-gray-800/80">
                            <h4 class="font-bold text-white text-base tracking-wide">Fatima H.</h4>
                            <p class="text-xs text-orange-500 font-semibold tracking-wide">Entrepreneur</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>
</section>

<section class="py-32 bg-gray-50 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 relative z-10">
        
        <div class="text-center max-w-3xl mx-auto mb-20" data-aos="fade-up">
            <h2 class="font-modernica text-6xl md:text-8xl font-black text-black leading-none mb-6" x-text="text.work_head[lang]"></h2>
            <p class="text-xl text-orange-600 font-bold leading-relaxed" x-text="text.work_desc[lang]"></p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            
            <a href="portfolio.php" class="group bg-white rounded-[2.5rem] p-10 shadow-xl border border-gray-100 hover:border-orange-500 hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 flex flex-col items-center text-center h-full relative overflow-hidden" data-aos="fade-up" data-aos-delay="100">
                
                <div class="w-28 h-28 bg-orange-50 rounded-full flex items-center justify-center mb-8 relative">
                    <svg class="w-14 h-14 text-gray-800" fill="currentColor" viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
                    
                    <div class="absolute top-0 -right-4 bg-white text-orange-600 border border-orange-200 text-[10px] font-bold px-3 py-1.5 rounded-full shadow-lg animate-float-1 flex items-center gap-1 z-20">
                        <span class="text-xs">+</span> 1.5k Followers
                    </div>

                    <div class="absolute bottom-0 -left-2 bg-orange-600 text-white p-1.5 rounded-full shadow-md animate-float-2 z-10">
                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>
                    </div>
                </div>

                <h3 class="font-display font-black text-3xl mb-4 text-gray-900 leading-tight" x-text="text.work_1_title[lang]"></h3>
                <p class="text-gray-500 font-medium leading-relaxed mb-8 text-sm" x-text="text.work_1_desc[lang]"></p>
                
                <div class="mt-auto flex items-center gap-2 text-sm font-black uppercase tracking-widest text-orange-600 group-hover:text-black transition-colors">
                    <span x-text="text.view_details[lang]"></span> <span>→</span>
                </div>
            </a>

            <a href="portfolio.php" class="group bg-white rounded-[2.5rem] p-10 shadow-xl border border-gray-100 hover:border-orange-500 hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 flex flex-col items-center text-center h-full relative overflow-hidden" data-aos="fade-up" data-aos-delay="200">
                
                <div class="w-28 h-28 bg-gray-50 rounded-full flex items-center justify-center mb-8 relative">
                    <svg class="w-16 h-16 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 20h16" />
                        <rect x="6" y="10" width="3" height="10" class="fill-current text-gray-400 animate-bar-1" />
                        <rect x="11" y="6" width="3" height="14" class="fill-current text-gray-600 animate-bar-2" />
                        <rect x="16" y="3" width="3" height="17" class="fill-current text-orange-600 animate-bar-3" />
                    </svg>
                </div>

                <h3 class="font-display font-black text-3xl mb-4 text-gray-900 leading-tight" x-text="text.work_2_title[lang]"></h3>
                <p class="text-gray-500 font-medium leading-relaxed mb-8 text-sm" x-text="text.work_2_desc[lang]"></p>
                
                <div class="mt-auto flex items-center gap-2 text-sm font-black uppercase tracking-widest text-orange-600 group-hover:text-black transition-colors">
                    <span x-text="text.view_details[lang]"></span> <span>→</span>
                </div>
            </a>

            <a href="https://wa.me/601155886905" target="_blank" class="group bg-white rounded-[2.5rem] p-10 shadow-xl border border-gray-100 hover:border-orange-500 hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 flex flex-col items-center text-center h-full relative overflow-hidden" data-aos="fade-up" data-aos-delay="300">
                
                <div class="w-28 h-28 bg-blue-50 rounded-full flex items-center justify-center mb-8 relative overflow-hidden">
                    <svg class="w-14 h-14 text-blue-900 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v14a1 1 0 01-1 1H5a1 1 0 01-1-1V5z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 9h16M9 9v11"></path></svg>
                    <svg class="w-20 h-20 text-blue-200 absolute -bottom-4 -right-4 animate-spin-slow opacity-50" fill="currentColor" viewBox="0 0 24 24"><path d="M19.14 12.94c.04-.3.06-.61.06-.94 0-.32-.02-.64-.07-.94l2.03-1.58a.49.49 0 0 0 .12-.61l-1.92-3.32a.488.488 0 0 0-.59-.22l-2.39.96c-.5-.38-1.03-.7-1.62-.94l-.36-2.54a.484.484 0 0 0-.48-.41h-3.84c-.24 0-.43.17-.47.41l-.36 2.54c-.59.24-1.13.57-1.62.94l-2.39-.96c-.22-.08-.47 0-.59.22L3.16 8.87c-.09.16-.06.41.12.61l2.03 1.58c-.05.3-.09.63-.09.94s.02.64.07.94l-2.03 1.58a.49.49 0 0 0-.12.61l1.92 3.32c.12.22.37.29.59.22l2.39-.96c.5.38 1.03.7 1.62.94l.36 2.54c.05.24.24.41.48.41h3.84c.24 0 .44-.17.47-.41l.36-2.54c.59-.24 1.13-.58 1.62-.94l2.39.96c.22.08.47 0 .59-.22l1.92-3.32c.09-.16.06-.41-.12-.61l-2.01-1.58zM12 15.6c-1.98 0-3.6-1.62-3.6-3.6s1.62-3.6 3.6-3.6 3.6 1.62 3.6 3.6-1.62 3.6-3.6 3.6z"></path></svg>
                </div>

                <h3 class="font-display font-black text-3xl mb-4 text-gray-900 leading-tight" x-text="text.work_3_title[lang]"></h3>
                <p class="text-gray-500 font-medium leading-relaxed mb-8 text-sm" x-text="text.work_3_desc[lang]"></p>
                
                <div class="mt-auto flex items-center gap-2 text-sm font-black uppercase tracking-widest text-orange-600 group-hover:text-black transition-colors">
                    <span x-text="text.view_details[lang]"></span> <span>→</span>
                </div>
            </a>

        </div>
    </div>
</section>

<section class="py-24 bg-black text-white relative overflow-hidden">
    
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] bg-orange-600/10 rounded-full blur-[120px] pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-6 relative z-10 text-center">
        
        <div class="mb-12" data-aos="fade-down">
            <span class="text-orange-600 font-bold tracking-widest text-xs uppercase mb-3 block" x-text="text.doubt_badge[lang]"></span>
            <h2 class="text-4xl md:text-6xl font-display font-black uppercase tracking-tighter" x-text="text.doubt_head[lang]"></h2>
        </div>

        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                
                <!-- Set 1 -->
                <div class="swiper-slide">
                    <div class="card-wrap-3d">
                        <div class="card-3d">
                            <div class="card-3d-bg" style="background-image: url('https://images.unsplash.com/photo-1563986768609-322da13575f3?auto=format&fit=crop&w=800&q=80');"></div>
                            <div class="card-3d-info">
                                <svg class="w-8 h-8 text-orange-500 mb-3 stroke-current drop-shadow-md" fill="none" viewBox="0 0 24 24" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
                                </svg>
                                <h3 class="card-3d-title mb-2" x-text="text.d1_q[lang]"></h3>
                                <p class="text-xs text-gray-300 font-medium leading-relaxed" x-text="text.d1_a[lang]"></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="card-wrap-3d">
                        <div class="card-3d">
                            <div class="card-3d-bg" style="background-image: url('https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=800&q=80');"></div>
                            <div class="card-3d-info">
                                <svg class="w-8 h-8 text-orange-500 mb-3 stroke-current drop-shadow-md" fill="none" viewBox="0 0 24 24" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5" />
                                </svg>
                                <h3 class="card-3d-title mb-2" x-text="text.d2_q[lang]"></h3>
                                <p class="text-xs text-gray-300 font-medium leading-relaxed" x-text="text.d2_a[lang]"></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="card-wrap-3d">
                        <div class="card-3d">
                            <div class="card-3d-bg" style="background-image: url('https://images.unsplash.com/photo-1559526324-4b87b5e36e44?auto=format&fit=crop&w=800&q=80');"></div>
                            <div class="card-3d-info">
                                <svg class="w-8 h-8 text-orange-500 mb-3 stroke-current drop-shadow-md" fill="none" viewBox="0 0 24 24" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5z" />
                                </svg>
                                <h3 class="card-3d-title mb-2" x-text="text.d3_q[lang]"></h3>
                                <p class="text-xs text-gray-300 font-medium leading-relaxed" x-text="text.d3_a[lang]"></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="card-wrap-3d">
                        <div class="card-3d">
                            <div class="card-3d-bg" style="background-image: url('https://images.unsplash.com/photo-1581092921461-eab62e97a780?auto=format&fit=crop&w=800&q=80');"></div>
                            <div class="card-3d-info">
                                <svg class="w-8 h-8 text-orange-500 mb-3 stroke-current drop-shadow-md" fill="none" viewBox="0 0 24 24" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766l6.182-1.854a.75.75 0 00.32-1.258l-3.32-3.32a.75.75 0 00-1.258.32l-1.854 6.182c-.14.468-.382.891-.766 1.208l-3.03 2.496zm0 0l-2.784 2.784a2.25 2.25 0 01-3.182 0l-2.88-2.88a2.25 2.25 0 010-3.182l2.784-2.784m0 0l3.03-2.496c.384-.317.807-.559 1.275-.699l6.182-1.854a.75.75 0 011.002 1.002l-1.854 6.182c-.14.468-.382.891-.766 1.208l-2.496 3.03z" />
                                </svg>
                                <h3 class="card-3d-title mb-2" x-text="text.d4_q[lang]"></h3>
                                <p class="text-xs text-gray-300 font-medium leading-relaxed" x-text="text.d4_a[lang]"></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="card-wrap-3d">
                        <div class="card-3d">
                            <div class="card-3d-bg" style="background-image: url('https://images.unsplash.com/photo-1455390582262-044cdead277a?auto=format&fit=crop&w=800&q=80');"></div>
                            <div class="card-3d-info">
                                <svg class="w-8 h-8 text-orange-500 mb-3 stroke-current drop-shadow-md" fill="none" viewBox="0 0 24 24" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                </svg>
                                <h3 class="card-3d-title mb-2" x-text="text.d5_q[lang]"></h3>
                                <p class="text-xs text-gray-300 font-medium leading-relaxed" x-text="text.d5_a[lang]"></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="card-wrap-3d">
                        <div class="card-3d">
                            <div class="card-3d-bg" style="background-image: url('https://images.unsplash.com/photo-1517976487492-5750f3195933?auto=format&fit=crop&w=800&q=80');"></div>
                            <div class="card-3d-info">
                                <svg class="w-8 h-8 text-orange-500 mb-3 stroke-current drop-shadow-md" fill="none" viewBox="0 0 24 24" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.24a6 6 0 00-2.091 4.14M6.75 19.5a4.5 4.5 0 01-1.41-3.09M21 3.75h-.008v.008H21V3.75z" />
                                </svg>
                                <h3 class="card-3d-title mb-2" x-text="text.d6_q[lang]"></h3>
                                <p class="text-xs text-gray-300 font-medium leading-relaxed" x-text="text.d6_a[lang]"></p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Set 2 (Duplicated for Seamless Continuous Loop) -->
                <div class="swiper-slide">
                    <div class="card-wrap-3d">
                        <div class="card-3d">
                            <div class="card-3d-bg" style="background-image: url('https://images.unsplash.com/photo-1563986768609-322da13575f3?auto=format&fit=crop&w=800&q=80');"></div>
                            <div class="card-3d-info">
                                <svg class="w-8 h-8 text-orange-500 mb-3 stroke-current drop-shadow-md" fill="none" viewBox="0 0 24 24" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
                                </svg>
                                <h3 class="card-3d-title mb-2" x-text="text.d1_q[lang]"></h3>
                                <p class="text-xs text-gray-300 font-medium leading-relaxed" x-text="text.d1_a[lang]"></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="card-wrap-3d">
                        <div class="card-3d">
                            <div class="card-3d-bg" style="background-image: url('https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=800&q=80');"></div>
                            <div class="card-3d-info">
                                <svg class="w-8 h-8 text-orange-500 mb-3 stroke-current drop-shadow-md" fill="none" viewBox="0 0 24 24" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5" />
                                </svg>
                                <h3 class="card-3d-title mb-2" x-text="text.d2_q[lang]"></h3>
                                <p class="text-xs text-gray-300 font-medium leading-relaxed" x-text="text.d2_a[lang]"></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="card-wrap-3d">
                        <div class="card-3d">
                            <div class="card-3d-bg" style="background-image: url('https://images.unsplash.com/photo-1559526324-4b87b5e36e44?auto=format&fit=crop&w=800&q=80');"></div>
                            <div class="card-3d-info">
                                <svg class="w-8 h-8 text-orange-500 mb-3 stroke-current drop-shadow-md" fill="none" viewBox="0 0 24 24" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5z" />
                                </svg>
                                <h3 class="card-3d-title mb-2" x-text="text.d3_q[lang]"></h3>
                                <p class="text-xs text-gray-300 font-medium leading-relaxed" x-text="text.d3_a[lang]"></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="card-wrap-3d">
                        <div class="card-3d">
                            <div class="card-3d-bg" style="background-image: url('https://images.unsplash.com/photo-1581092921461-eab62e97a780?auto=format&fit=crop&w=800&q=80');"></div>
                            <div class="card-3d-info">
                                <svg class="w-8 h-8 text-orange-500 mb-3 stroke-current drop-shadow-md" fill="none" viewBox="0 0 24 24" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766l6.182-1.854a.75.75 0 00.32-1.258l-3.32-3.32a.75.75 0 00-1.258.32l-1.854 6.182c-.14.468-.382.891-.766 1.208l-3.03 2.496zm0 0l-2.784 2.784a2.25 2.25 0 01-3.182 0l-2.88-2.88a2.25 2.25 0 010-3.182l2.784-2.784m0 0l3.03-2.496c.384-.317.807-.559 1.275-.699l6.182-1.854a.75.75 0 011.002 1.002l-1.854 6.182c-.14.468-.382.891-.766 1.208l-2.496 3.03z" />
                                </svg>
                                <h3 class="card-3d-title mb-2" x-text="text.d4_q[lang]"></h3>
                                <p class="text-xs text-gray-300 font-medium leading-relaxed" x-text="text.d4_a[lang]"></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="card-wrap-3d">
                        <div class="card-3d">
                            <div class="card-3d-bg" style="background-image: url('https://images.unsplash.com/photo-1455390582262-044cdead277a?auto=format&fit=crop&w=800&q=80');"></div>
                            <div class="card-3d-info">
                                <svg class="w-8 h-8 text-orange-500 mb-3 stroke-current drop-shadow-md" fill="none" viewBox="0 0 24 24" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                </svg>
                                <h3 class="card-3d-title mb-2" x-text="text.d5_q[lang]"></h3>
                                <p class="text-xs text-gray-300 font-medium leading-relaxed" x-text="text.d5_a[lang]"></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="card-wrap-3d">
                        <div class="card-3d">
                            <div class="card-3d-bg" style="background-image: url('https://images.unsplash.com/photo-1517976487492-5750f3195933?auto=format&fit=crop&w=800&q=80');"></div>
                            <div class="card-3d-info">
                                <svg class="w-8 h-8 text-orange-500 mb-3 stroke-current drop-shadow-md" fill="none" viewBox="0 0 24 24" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.24a6 6 0 00-2.091 4.14M6.75 19.5a4.5 4.5 0 01-1.41-3.09M21 3.75h-.008v.008H21V3.75z" />
                                </svg>
                                <h3 class="card-3d-title mb-2" x-text="text.d6_q[lang]"></h3>
                                <p class="text-xs text-gray-300 font-medium leading-relaxed" x-text="text.d6_a[lang]"></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>
</section>

    <!-- Pricing Section (Elegant Dark Glassmorphism & Supermarket Typography Style) -->
    <section id="pricing" class="pricing-fem-body">
        <header class="max-w-7xl w-full mx-auto flex flex-col md:flex-row justify-between items-start md:items-end mb-10 px-4 gap-4" data-aos="fade-up">
            <div class="text-left">
                <h2 class="font-modernica text-4xl sm:text-5xl md:text-6xl font-black tracking-tight text-white uppercase">
                    OUR <span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-500 via-orange-400 to-amber-400">PRICING</span>
                </h2>
                <p class="text-gray-400 font-medium text-xs sm:text-sm mt-1">Transparent & Flexible Packages Built for Growth</p>
            </div>
            <div>
                <a href="https://wa.me/601155886905?text=Hi,%20I'm%20interested%20in%20your%20pricing%20plans" target="_blank" class="px-6 py-3.5 bg-gradient-to-r from-orange-600 to-amber-500 text-white font-modernica font-extrabold text-xs tracking-widest uppercase rounded-full shadow-xl hover:from-orange-500 hover:to-amber-400 transition transform hover:scale-105 flex items-center gap-2">
                    <i class="fab fa-whatsapp text-lg"></i> CHAT WITH US
                </a>
            </div>
        </header>

        <div class="pricing-fem-scroll-wrap">
            <div class="pricing-fem-cards">

                <!-- Card 1: Personal Branding -->
                <div class="pricing-fem-card" data-aos="fade-up" data-aos-delay="100">
                    <ul>
                        <li class="pack">Personal Branding</li>
                        <li class="supermarket-price"><small class="currency">RM</small> <span class="price-main">1,500</span></li>
                        <li>High Converting Landing Page</li>
                        <li>Fast Speed & Mobile Responsive</li>
                        <li>Free Domain & Hosting Setup</li>
                        <li>WhatsApp Direct Integration</li>
                    </ul>
                </div>

                <!-- Card 2: Company Website (FEATURED GLASSMORPHISM) -->
                <div class="pricing-fem-card active" data-aos="fade-up" data-aos-delay="200">
                    <ul>
                        <li class="pack">Company Website</li>
                        <li class="supermarket-price"><small class="currency">RM</small> <span class="price-main">3,500</span></li>
                        <li>Multi-page Corporate Website</li>
                        <li>CMS Admin Panel & Security</li>
                        <li>SEO Optimization & Analytics</li>
                        <li>Free Domain & SSL 1 Year</li>
                    </ul>
                </div>

                <!-- Card 3: Web3 & Enterprise -->
                <div class="pricing-fem-card" data-aos="fade-up" data-aos-delay="300">
                    <ul>
                        <li class="pack">Web3 & Enterprise</li>
                        <li class="supermarket-price"><span class="price-main" style="font-size: 2.2rem;">CUSTOM</span></li>
                        <li>Web3 & Crypto Integrations</li>
                        <li>Automated Bots & API Workflow</li>
                        <li>Dedicated Infrastructure</li>
                        <li>24/7 SLA Support & NDA</li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

<section id="faq" class="py-24 bg-white border-t border-gray-100" x-data="{ active: null }">
        <div class="max-w-7xl mx-auto px-6">
            
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="inline-block py-1 px-3 rounded-full bg-orange-100 text-orange-600 text-xs font-bold tracking-widest uppercase mb-4" x-text="text.faq_head[lang]"></span>
                <h2 class="font-modernica text-5xl md:text-7xl font-black text-black leading-none mb-6">
                    <span x-show="lang === 'ENG'">FREQUENTLY <span class="text-orange-600">ASKED</span></span>
                    <span x-show="lang === 'BM'">SOALAN <span class="text-orange-600">LAZIM</span></span>
                </h2>
                <p class="text-xl text-gray-500 max-w-2xl mx-auto font-medium" x-text="text.faq_sub[lang]"></p>
            </div>

            <div class="space-y-4">
                
                <div id="about-me" class="scroll-mt-32 border border-gray-200 rounded-2xl overflow-hidden transition-all duration-300" :class="active === 1 ? 'bg-gray-50 border-orange-200 shadow-lg' : 'bg-white hover:border-orange-200'">
                    <button @click="active === 1 ? active = null : active = 1" class="w-full px-8 py-6 flex items-center justify-between text-left focus:outline-none">
                        <span class="font-display font-bold text-xl md:text-2xl text-gray-900 flex items-center gap-6">
                            <span class="text-sm font-mono text-orange-500 opacity-50">01</span> 
                            <span x-text="text.q1[lang]"></span>
                        </span>
                        <span class="text-3xl transition-transform duration-300 text-orange-500" :class="active === 1 ? 'rotate-45' : ''">+</span>
                    </button>
                    <div x-show="active === 1" class="px-8 pb-8 pt-0 text-gray-600 text-lg leading-relaxed border-t border-gray-100/50 mt-2" x-collapse>
                        <div class="pt-6">
                            <p class="mb-6" x-text="text.a1[lang]"></p>
                            <div class="flex flex-wrap gap-3 mt-4 items-center">
                                <a href="https://people.utm.my/ikhwanjamal" target="_blank" class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-black text-white text-sm font-bold hover:bg-orange-600 transition shadow-md h-12">
                                    <span x-show="lang === 'ENG'">View Profile</span>
                                    <span x-show="lang === 'BM'" style="display: none;">Lihat Profil</span>
                                    <span>↗</span>
                                </a>
                                <a href="https://www.strava.com/athletes/186812023" target="_blank" class="inline-flex items-center justify-center gap-2 px-6 py-3 rounded-full bg-white border border-gray-300 hover:border-[#FC4C02] hover:bg-orange-50 transition shadow-sm h-12 group">
                                    <img src="strava.png" alt="Strava" class="h-5 w-auto"> 
                                    <span class="font-bold text-sm text-gray-700 group-hover:text-[#FC4C02] transition-colors" x-text="text.btn_strava[lang]"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="border border-gray-200 rounded-2xl overflow-hidden transition-all duration-300" :class="active === 2 ? 'bg-gray-50 border-orange-200 shadow-lg' : 'bg-white hover:border-orange-200'">
                    <button @click="active === 2 ? active = null : active = 2" class="w-full px-8 py-6 flex items-center justify-between text-left focus:outline-none">
                        <span class="font-display font-bold text-xl md:text-2xl text-gray-900 flex items-center gap-6">
                            <span class="text-sm font-mono text-orange-500 opacity-50">02</span> 
                            <span x-text="text.q2[lang]"></span>
                        </span>
                        <span class="text-3xl transition-transform duration-300 text-orange-500" :class="active === 2 ? 'rotate-45' : ''">+</span>
                    </button>
                    <div x-show="active === 2" class="px-8 pb-8 pt-0 text-gray-600 text-lg leading-relaxed border-t border-gray-100/50 mt-2" x-collapse>
                        <p class="pt-6" x-text="text.a2[lang]"></p>
                    </div>
                </div>

                <div class="border border-gray-200 rounded-2xl overflow-hidden transition-all duration-300" :class="active === 3 ? 'bg-gray-50 border-orange-200 shadow-lg' : 'bg-white hover:border-orange-200'">
                    <button @click="active === 3 ? active = null : active = 3" class="w-full px-8 py-6 flex items-center justify-between text-left focus:outline-none">
                        <span class="font-display font-bold text-xl md:text-2xl text-gray-900 flex items-center gap-6">
                            <span class="text-sm font-mono text-orange-500 opacity-50">03</span> 
                            <span x-text="text.q3[lang]"></span>
                        </span>
                        <span class="text-3xl transition-transform duration-300 text-orange-500" :class="active === 3 ? 'rotate-45' : ''">+</span>
                    </button>
                    <div x-show="active === 3" class="px-8 pb-8 pt-0 text-gray-600 text-lg leading-relaxed border-t border-gray-100/50 mt-2" x-collapse>
                        <p class="pt-6" x-text="text.a3[lang]"></p>
                    </div>
                </div>

                <div class="border border-gray-200 rounded-2xl overflow-hidden transition-all duration-300" :class="active === 4 ? 'bg-gray-50 border-orange-200 shadow-lg' : 'bg-white hover:border-orange-200'">
                    <button @click="active === 4 ? active = null : active = 4" class="w-full px-8 py-6 flex items-center justify-between text-left focus:outline-none">
                        <span class="font-display font-bold text-xl md:text-2xl text-gray-900 flex items-center gap-6">
                            <span class="text-sm font-mono text-orange-500 opacity-50">04</span> 
                            <span x-text="text.q4[lang]"></span>
                        </span>
                        <span class="text-3xl transition-transform duration-300 text-orange-500" :class="active === 4 ? 'rotate-45' : ''">+</span>
                    </button>
                    <div x-show="active === 4" class="px-8 pb-8 pt-0 text-gray-600 text-lg leading-relaxed border-t border-gray-100/50 mt-2" x-collapse>
                        <p class="pt-6" x-text="text.a4[lang]"></p>
                    </div>
                </div>

                <div class="border border-gray-200 rounded-2xl overflow-hidden transition-all duration-300" :class="active === 5 ? 'bg-gray-50 border-orange-200 shadow-lg' : 'bg-white hover:border-orange-200'">
                    <button @click="active === 5 ? active = null : active = 5" class="w-full px-8 py-6 flex items-center justify-between text-left focus:outline-none">
                        <span class="font-display font-bold text-xl md:text-2xl text-gray-900 flex items-center gap-6">
                            <span class="text-sm font-mono text-orange-500 opacity-50">05</span> 
                            <span x-text="text.q5[lang]"></span>
                        </span>
                        <span class="text-3xl transition-transform duration-300 text-orange-500" :class="active === 5 ? 'rotate-45' : ''">+</span>
                    </button>
                    <div x-show="active === 5" class="px-8 pb-8 pt-0 text-gray-600 text-lg leading-relaxed border-t border-gray-100/50 mt-2" x-collapse>
                        <div class="pt-6">
                            <p class="mb-4" x-text="text.a5[lang]"></p>
                            <div class="flex gap-3">
                                <span class="px-3 py-1 bg-black text-white text-xs font-bold rounded uppercase tracking-wider">No WordPress</span>
                                <span class="px-3 py-1 bg-orange-100 text-orange-700 text-xs font-bold rounded uppercase tracking-wider">From Scratch</span>
                                <span class="px-3 py-1 bg-blue-100 text-blue-700 text-xs font-bold rounded uppercase tracking-wider">AI Assisted</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
</section>

<section class="py-24 bg-gray-50 border-t border-gray-200 text-center w-full" x-data="{ msg: '' }">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-5xl md:text-8xl font-display font-black mb-8 text-gray-900 tracking-tighter leading-none">
                <span x-show="lang === 'ENG'">READY TO <span class="text-orange-600">LAUNCH?</span></span>
                <span x-show="lang === 'BM'" style="display: none;">SEDIA <span class="text-orange-600">MELUNCUR?</span></span>
            </h2>
            <p class="text-gray-500 text-lg md:text-2xl mb-12 max-w-3xl mx-auto font-medium" x-text="text.footer_sub[lang]"></p>
            
            <div class="mb-10 relative max-w-3xl mx-auto">
                <textarea x-model="msg" rows="2" 
                    :placeholder="lang === 'ENG' ? 'Hi MIJ, I need a website for...' : 'Hai MIJ, saya perlukan website untuk...'" 
                    class="w-full p-6 rounded-2xl border border-gray-300 bg-white text-xl focus:outline-none focus:border-orange-500 focus:ring-4 focus:ring-orange-500/10 transition shadow-lg resize-none"></textarea>
            </div>
            
            <div class="flex flex-col md:flex-row justify-center gap-5">
                <a :href="'https://wa.me/601155886905?text=' + encodeURIComponent(msg ? msg : 'Hi MIJ Digital, I am interested in your services.')" target="_blank" class="inline-flex items-center justify-center gap-3 bg-black text-white font-bold text-lg px-12 py-5 rounded-full hover:bg-orange-600 transition shadow-xl hover:shadow-orange-500/20 transform hover:-translate-y-1">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.991c-.001 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></path></svg>
                    <span x-text="text.btn_wa[lang]">WhatsApp Now</span>
                </a>
                <a href="mailto:hello@mijdigital.com" class="inline-flex items-center justify-center gap-3 bg-white border-2 border-gray-200 text-gray-900 font-bold text-lg px-12 py-5 rounded-full hover:bg-gray-100 transition shadow-sm">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    <span x-text="text.btn_contact[lang]">Contact Me</span>
                </a>
            </div>
        </div>
</section>

<?php include 'footer.php'; ?>