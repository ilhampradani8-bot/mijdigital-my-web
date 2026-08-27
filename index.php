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
                <a href="#pricing" class="px-8 py-4 bg-gradient-to-r from-[#e2e8f0] via-[#f8fafc] to-[#cbd5e1] text-slate-800 font-modernica font-black text-xs tracking-[0.2em] uppercase rounded-full border border-white/90 shadow-[8px_8px_18px_#d9dfd5,-8px_-8px_18px_#ffffff] hover:shadow-[inset_3px_3px_6px_#cbd5e1,inset_-3px_-3px_6px_#ffffff] hover:text-orange-600 transition-all duration-300 flex items-center gap-3 whitespace-nowrap group active:scale-95">
                    <span x-text="text.btn_start[lang]"></span>
                    <svg class="w-4 h-4 text-orange-600 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
                
                <a href="portfolio.php" class="group px-8 py-4 bg-white border-2 border-gray-200 text-black font-modernica font-bold text-xs tracking-[0.2em] uppercase hover:border-black transition rounded-full flex items-center gap-2 whitespace-nowrap hover:shadow-lg">
                    <span x-text="text.nav_portfolio[lang]"></span>
                </a>
            </div>

        </div>
    </div>
</section>


<section id="testimonials" class="py-16 md:py-20 bg-[#09090b] text-white relative overflow-hidden border-t border-gray-900">
    
    <div class="absolute inset-0 bg-[radial-gradient(#27272a_1px,transparent_1px)] [background-size:24px_24px] opacity-25 pointer-events-none"></div>
    <div class="absolute top-0 right-0 w-[400px] h-[400px] bg-orange-600/10 blur-[120px] rounded-full pointer-events-none"></div>
    <div class="absolute bottom-0 left-0 w-[300px] h-[300px] bg-orange-500/5 blur-[100px] rounded-full pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-6 relative z-10">
        
        <div class="mb-6 text-left" data-aos="fade-up">
            <div class="flex items-center gap-2.5 mb-2">
                <span class="w-8 h-[2px] bg-white inline-block"></span>
                <span class="text-orange-500 font-bold tracking-[0.25em] text-xs uppercase" x-text="text.testi_badge[lang]"></span>
            </div>
            <h2 class="font-modernica text-3xl sm:text-4xl md:text-5xl font-black text-white uppercase tracking-tight leading-tight max-w-3xl" x-text="text.testi_head[lang]"></h2>
        </div>

        <div class="swiper testimonialSwiper !pt-0 !pb-10" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
                
                <div class="swiper-slide h-auto">
                    <div class="bg-[#121215] border border-gray-800/80 p-6 rounded-2xl h-full flex flex-col relative hover:border-orange-500/50 hover:shadow-xl hover:shadow-orange-500/10 transition-all duration-300 group">
                        <div class="flex items-center justify-between mb-3 pb-3 border-b border-gray-800/60">
                            <div class="flex items-center gap-1.5">
                                <div class="flex text-amber-400 text-xs tracking-tighter">
                                    ★★★★★
                                </div>
                                <span class="text-xs font-bold text-gray-300 ml-1">5.0</span>
                            </div>
                            <div class="flex items-center gap-1.5 text-xs text-gray-400">
                                <span>Google Review</span>
                                <svg class="w-4 h-4 shrink-0" viewBox="0 0 24 24">
                                    <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                                    <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                                    <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.06H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.94l2.85-2.22.81-.63z"/>
                                    <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.06l3.66 2.84c.87-2.6 3.3-4.52 6.16-4.52z"/>
                                </svg>
                            </div>
                        </div>

                        <p class="text-gray-300 text-sm leading-relaxed mb-5 italic flex-grow">
                            <span x-show="lang === 'ENG'">"The response was incredibly fast! The website creation was lightning speed and I felt very safe handing over my data."</span>
                            <span x-show="lang === 'BM'">"Respon sangat cepat sekali! Pembuatannya kilat dan rasa sangat aman serahkan data pada mereka."</span>
                        </p>

                        <div class="mt-auto pt-3 border-t border-gray-800/80 flex items-center justify-between">
                            <div>
                                <h4 class="font-bold text-white text-sm tracking-wide">Ahmad Zulfikar</h4>
                                <p class="text-xs text-orange-500 font-semibold tracking-wide">Financial Consultant</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide h-auto">
                    <div class="bg-[#121215] border border-gray-800/80 p-6 rounded-2xl h-full flex flex-col relative hover:border-orange-500/50 hover:shadow-xl hover:shadow-orange-500/10 transition-all duration-300 group">
                        <div class="flex items-center justify-between mb-3 pb-3 border-b border-gray-800/60">
                            <div class="flex items-center gap-1.5">
                                <div class="flex text-amber-400 text-xs tracking-tighter">
                                    ★★★★★
                                </div>
                                <span class="text-xs font-bold text-gray-300 ml-1">5.0</span>
                            </div>
                            <div class="flex items-center gap-1.5 text-xs text-gray-400">
                                <span>Google Review</span>
                                <svg class="w-4 h-4 shrink-0" viewBox="0 0 24 24">
                                    <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                                    <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                                    <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.06H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.94l2.85-2.22.81-.63z"/>
                                    <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.06l3.66 2.84c.87-2.6 3.3-4.52 6.16-4.52z"/>
                                </svg>
                            </div>
                        </div>

                        <p class="text-gray-300 text-sm leading-relaxed mb-5 italic flex-grow">
                            <span x-show="lang === 'ENG'">"Secure and fast. I was worried about my customer data, but MIJ's security setup is top notch. Highly recommended!"</span>
                            <span x-show="lang === 'BM'">"Cepat dan selamat. Mula-mula risau pasal data pelanggan, tapi sekuriti MIJ memang terbaik. Sangat rekomen!"</span>
                        </p>

                        <div class="mt-auto pt-3 border-t border-gray-800/80 flex items-center justify-between">
                            <div>
                                <h4 class="font-bold text-white text-sm tracking-wide">Sarah Kamilia</h4>
                                <p class="text-xs text-orange-500 font-semibold tracking-wide">Founder Hijab Brand</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide h-auto">
                    <div class="bg-[#121215] border border-gray-800/80 p-6 rounded-2xl h-full flex flex-col relative hover:border-orange-500/50 hover:shadow-xl hover:shadow-orange-500/10 transition-all duration-300 group">
                        <div class="flex items-center justify-between mb-3 pb-3 border-b border-gray-800/60">
                            <div class="flex items-center gap-1.5">
                                <div class="flex text-amber-400 text-xs tracking-tighter">
                                    ★★★★★
                                </div>
                                <span class="text-xs font-bold text-gray-300 ml-1">5.0</span>
                            </div>
                            <div class="flex items-center gap-1.5 text-xs text-gray-400">
                                <span>Google Review</span>
                                <svg class="w-4 h-4 shrink-0" viewBox="0 0 24 24">
                                    <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                                    <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                                    <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.06H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.94l2.85-2.22.81-.63z"/>
                                    <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.06l3.66 2.84c.87-2.6 3.3-4.52 6.16-4.52z"/>
                                </svg>
                            </div>
                        </div>

                        <p class="text-gray-300 text-sm leading-relaxed mb-5 italic flex-grow">
                            <span x-show="lang === 'ENG'">"Professional, safe, and fast delivery. I don't worry about hackers because MIJ handles everything perfectly."</span>
                            <span x-show="lang === 'BM'">"Profesional, selamat, dan siap cepat. Saya tak risau pasal hacker sebab MIJ uruskan semuanya dengan sempurna."</span>
                        </p>

                        <div class="mt-auto pt-3 border-t border-gray-800/80 flex items-center justify-between">
                            <div>
                                <h4 class="font-bold text-white text-sm tracking-wide">Dr. Razak</h4>
                                <p class="text-xs text-orange-500 font-semibold tracking-wide">Dental Clinic Owner</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide h-auto">
                    <div class="bg-[#121215] border border-gray-800/80 p-6 rounded-2xl h-full flex flex-col relative hover:border-orange-500/50 hover:shadow-xl hover:shadow-orange-500/10 transition-all duration-300 group">
                        <div class="flex items-center justify-between mb-3 pb-3 border-b border-gray-800/60">
                            <div class="flex items-center gap-1.5">
                                <div class="flex text-amber-400 text-xs tracking-tighter">
                                    ★★★★★
                                </div>
                                <span class="text-xs font-bold text-gray-300 ml-1">5.0</span>
                            </div>
                            <div class="flex items-center gap-1.5 text-xs text-gray-400">
                                <span>Google Review</span>
                                <svg class="w-4 h-4 shrink-0" viewBox="0 0 24 24">
                                    <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                                    <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                                    <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.06H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.94l2.85-2.22.81-.63z"/>
                                    <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.06l3.66 2.84c.87-2.6 3.3-4.52 6.16-4.52z"/>
                                </svg>
                            </div>
                        </div>

                        <p class="text-gray-300 text-sm leading-relaxed mb-5 italic flex-grow">
                            <span x-show="lang === 'ENG'">"The fastest developer I've worked with. The system is stable and the admin panel is very secure."</span>
                            <span x-show="lang === 'BM'">"Developer paling laju saya pernah jumpa. Sistem stabil dan panel admin sangat selamat (secure)."</span>
                        </p>

                        <div class="mt-auto pt-3 border-t border-gray-800/80 flex items-center justify-between">
                            <div>
                                <h4 class="font-bold text-white text-sm tracking-wide">Maya R.</h4>
                                <p class="text-xs text-orange-500 font-semibold tracking-wide">Agency Owner</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide h-auto">
                    <div class="bg-[#121215] border border-gray-800/80 p-6 rounded-2xl h-full flex flex-col relative hover:border-orange-500/50 hover:shadow-xl hover:shadow-orange-500/10 transition-all duration-300 group">
                        <div class="flex items-center justify-between mb-3 pb-3 border-b border-gray-800/60">
                            <div class="flex items-center gap-1.5">
                                <div class="flex text-amber-400 text-xs tracking-tighter">
                                    ★★★★★
                                </div>
                                <span class="text-xs font-bold text-gray-300 ml-1">5.0</span>
                            </div>
                            <div class="flex items-center gap-1.5 text-xs text-gray-400">
                                <span>Google Review</span>
                                <svg class="w-4 h-4 shrink-0" viewBox="0 0 24 24">
                                    <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                                    <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                                    <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.06H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.94l2.85-2.22.81-.63z"/>
                                    <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.06l3.66 2.84c.87-2.6 3.3-4.52 6.16-4.52z"/>
                                </svg>
                            </div>
                        </div>

                        <p class="text-gray-300 text-sm leading-relaxed mb-5 italic flex-grow">
                            <span x-show="lang === 'ENG'">"Trustworthy service. Handed over my login details and they set up everything securely within 48 hours."</span>
                            <span x-show="lang === 'BM'">"Servis yang boleh dipercayai. Saya bagi login detail dan mereka setup semua dengan selamat dalam 48 jam."</span>
                        </p>

                        <div class="mt-auto pt-3 border-t border-gray-800/80 flex items-center justify-between">
                            <div>
                                <h4 class="font-bold text-white text-sm tracking-wide">Khairul A.</h4>
                                <p class="text-xs text-orange-500 font-semibold tracking-wide">Property Agent</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide h-auto">
                    <div class="bg-[#121215] border border-gray-800/80 p-6 rounded-2xl h-full flex flex-col relative hover:border-orange-500/50 hover:shadow-xl hover:shadow-orange-500/10 transition-all duration-300 group">
                        <div class="flex items-center justify-between mb-3 pb-3 border-b border-gray-800/60">
                            <div class="flex items-center gap-1.5">
                                <div class="flex text-amber-400 text-xs tracking-tighter">
                                    ★★★★★
                                </div>
                                <span class="text-xs font-bold text-gray-300 ml-1">5.0</span>
                            </div>
                            <div class="flex items-center gap-1.5 text-xs text-gray-400">
                                <span>Google Review</span>
                                <svg class="w-4 h-4 shrink-0" viewBox="0 0 24 24">
                                    <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                                    <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                                    <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.06H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.94l2.85-2.22.81-.63z"/>
                                    <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.06l3.66 2.84c.87-2.6 3.3-4.52 6.16-4.52z"/>
                                </svg>
                            </div>
                        </div>

                        <p class="text-gray-300 text-sm leading-relaxed mb-5 italic flex-grow">
                            <span x-show="lang === 'ENG'">"Super responsive support! Whenever I have a question, they reply instantly. The site is running perfectly."</span>
                            <span x-show="lang === 'BM'">"Support sangat responsif! Bila tanya soalan, terus jawab. Website berjalan lancar tanpa masalah."</span>
                        </p>

                        <div class="mt-auto pt-3 border-t border-gray-800/80 flex items-center justify-between">
                            <div>
                                <h4 class="font-bold text-white text-sm tracking-wide">Fatima H.</h4>
                                <p class="text-xs text-orange-500 font-semibold tracking-wide">Entrepreneur</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>
</section>

<section id="our-work" class="py-20 md:py-24 bg-[#FFFBF5] text-gray-900 relative overflow-hidden border-t border-gray-200">
    <div class="absolute inset-0 bg-[radial-gradient(#e5e7eb_1px,transparent_1px)] [background-size:24px_24px] opacity-40 pointer-events-none"></div>
    <div class="absolute top-1/2 -left-20 w-96 h-96 bg-orange-500/10 rounded-full blur-[140px] pointer-events-none"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-yellow-500/10 rounded-full blur-[140px] pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-6 relative z-10">
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
            
            <div class="lg:col-span-5 flex flex-col justify-center text-left" data-aos="fade-right">
                
                <div class="flex items-center gap-2.5 mb-3">
                    <span class="w-8 h-[2px] bg-orange-600 inline-block"></span>
                    <span class="text-orange-600 font-bold tracking-[0.25em] text-xs uppercase" x-text="text.work_badge ? text.work_badge[lang] : 'PORTFOLIO'"></span>
                </div>

                <div class="flex flex-wrap items-center justify-between gap-4 mb-4">
                    <h2 class="font-modernica text-3xl sm:text-4xl lg:text-5xl font-black text-gray-900 uppercase tracking-tight leading-none" x-text="text.work_head[lang]"></h2>
                    
                    <a href="portfolio.php" class="inline-flex items-center gap-2.5 px-6 py-3 bg-gradient-to-r from-[#e2e8f0] via-[#f8fafc] to-[#cbd5e1] text-slate-800 hover:text-orange-600 font-modernica font-black text-xs tracking-[0.15em] uppercase rounded-full border border-white/90 shadow-[6px_6px_14px_#d1d5db,-6px_-6px_14px_#ffffff] hover:shadow-[inset_3px_3px_6px_#cbd5e1,inset_-3px_-3px_6px_#ffffff] transition-all duration-300 group whitespace-nowrap active:scale-95">
                        <span x-text="text.nav_portfolio ? text.nav_portfolio[lang] : 'PORTFOLIO'"></span>
                        <svg class="w-4 h-4 text-orange-600 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </a>
                </div>

                <p class="text-gray-600 font-medium text-sm sm:text-base leading-relaxed max-w-md" x-text="text.work_desc[lang]"></p>
            </div>

            <div class="lg:col-span-7" data-aos="fade-left">
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 relative sm:pt-4">
                    
                    <a href="portfolio.php" class="group relative flex flex-col items-center cursor-pointer transition-all duration-500 hover:-translate-y-3">
                        <div class="relative w-full aspect-square max-w-[210px] mx-auto flex items-center justify-center p-4">
                            
                            <div class="absolute inset-0 bg-gradient-to-br from-[#121215] via-[#1a1a20] to-[#0a0a0c] border-2 border-orange-500/50 rounded-3xl transform -rotate-6 group-hover:rotate-0 group-hover:border-orange-500 group-hover:shadow-[0_15px_35px_rgba(234,88,12,0.3)] transition-all duration-500 overflow-hidden shadow-xl"
                                 style="clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);">
                                <div class="absolute inset-0 bg-gradient-to-t from-orange-600/40 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                            </div>

                            <div class="relative z-10 text-center transform group-hover:scale-110 group-hover:-translate-y-2 transition-all duration-500">
                                <div class="w-14 h-14 mx-auto mb-2 rounded-2xl bg-orange-600/30 border border-orange-400/60 flex items-center justify-center text-orange-400 shadow-xl group-hover:bg-orange-600 group-hover:text-white transition-colors duration-300">
                                    <svg class="w-8 h-8 stroke-current" fill="none" viewBox="0 0 24 24" stroke-width="1.8">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9 9 0 100-18 9 9 0 000 18pt0 0zM12 8v4l3 3" />
                                    </svg>
                                </div>
                                <h3 class="font-modernica font-bold text-white text-sm tracking-wide" x-text="text.work_1_title[lang]"></h3>
                                <p class="text-[11px] text-gray-300 mt-1 line-clamp-2 px-1" x-text="text.work_1_desc[lang]"></p>
                            </div>
                        </div>
                    </a>

                    <a href="portfolio.php" class="group relative flex flex-col items-center cursor-pointer transition-all duration-500 hover:-translate-y-3 sm:-translate-y-4">
                        <div class="relative w-full aspect-square max-w-[210px] mx-auto flex items-center justify-center p-4">
                            
                            <div class="absolute inset-0 bg-gradient-to-br from-[#121215] via-[#1a1a20] to-[#0a0a0c] border-2 border-orange-500/50 rounded-3xl transform rotate-6 group-hover:rotate-0 group-hover:border-orange-500 group-hover:shadow-[0_15px_35px_rgba(234,88,12,0.3)] transition-all duration-500 overflow-hidden shadow-xl"
                                 style="clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);">
                                <div class="absolute inset-0 bg-gradient-to-t from-orange-600/40 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                            </div>

                            <div class="relative z-10 text-center transform group-hover:scale-110 group-hover:-translate-y-2 transition-all duration-500">
                                <div class="w-14 h-14 mx-auto mb-2 rounded-2xl bg-orange-600/30 border border-orange-400/60 flex items-center justify-center text-orange-400 shadow-xl group-hover:bg-orange-600 group-hover:text-white transition-colors duration-300">
                                    <svg class="w-8 h-8 stroke-current" fill="none" viewBox="0 0 24 24" stroke-width="1.8">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5s0 0 0 0m3 0h1.5m-4.5 3h1.5m3 0h1.5m-4.5 3h1.5m3 0h1.5m-4.5 3h1.5m3 0h1.5" />
                                    </svg>
                                </div>
                                <h3 class="font-modernica font-bold text-white text-sm tracking-wide" x-text="text.work_2_title[lang]"></h3>
                                <p class="text-[11px] text-gray-300 mt-1 line-clamp-2 px-1" x-text="text.work_2_desc[lang]"></p>
                            </div>
                        </div>
                    </a>

                    <a href="https://wa.me/601110051787" target="_blank" class="group relative flex flex-col items-center cursor-pointer transition-all duration-500 hover:-translate-y-3">
                        <div class="relative w-full aspect-square max-w-[210px] mx-auto flex items-center justify-center p-4">
                            
                            <div class="absolute inset-0 bg-gradient-to-br from-[#121215] via-[#1a1a20] to-[#0a0a0c] border-2 border-orange-500/50 rounded-3xl transform -rotate-6 group-hover:rotate-0 group-hover:border-orange-500 group-hover:shadow-[0_15px_35px_rgba(234,88,12,0.3)] transition-all duration-500 overflow-hidden shadow-xl"
                                 style="clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);">
                                <div class="absolute inset-0 bg-gradient-to-t from-orange-600/40 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                            </div>

                            <div class="relative z-10 text-center transform group-hover:scale-110 group-hover:-translate-y-2 transition-all duration-500">
                                <div class="w-14 h-14 mx-auto mb-2 rounded-2xl bg-orange-600/30 border border-orange-400/60 flex items-center justify-center text-orange-400 shadow-xl group-hover:bg-orange-600 group-hover:text-white transition-colors duration-300">
                                    <svg class="w-8 h-8 stroke-current" fill="none" viewBox="0 0 24 24" stroke-width="1.8">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6zM13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z" />
                                    </svg>
                                </div>
                                <h3 class="font-modernica font-bold text-white text-sm tracking-wide" x-text="text.work_3_title[lang]"></h3>
                                <p class="text-[11px] text-gray-300 mt-1 line-clamp-2 px-1" x-text="text.work_3_desc[lang]"></p>
                            </div>
                        </div>
                    </a>

                </div>
            </div>

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

    <!-- Pricing Section (Jamal Hassouni 3D Gradient Cards Design) -->
    <section id="pricing" class="py-24 bg-[#FFFBF5] relative overflow-hidden border-t border-gray-100">
        <div class="max-w-7xl mx-auto px-6 relative z-10">
            
            <!-- Left-Aligned Section Header -->
            <div class="text-left mb-14" data-aos="fade-right">
                <div class="flex items-center gap-2.5 mb-3">
                    <span class="w-8 h-[2px] bg-orange-600 inline-block"></span>
                    <span class="text-orange-600 font-bold tracking-[0.25em] text-xs uppercase" x-text="text.price_badge ? text.price_badge[lang] : 'Price List'">Price List</span>
                </div>
                <h2 class="font-modernica text-4xl sm:text-5xl md:text-7xl font-black text-gray-900 uppercase tracking-tight leading-none">
                    <span x-text="text.price_head_1 ? text.price_head_1[lang] : 'YOUR WEBSITE'"></span> <span class="text-orange-600" x-text="text.price_head_2 ? text.price_head_2[lang] : 'STARTS HERE.'"></span>
                </h2>
                <p class="text-gray-600 font-medium text-sm sm:text-base leading-relaxed mt-3 max-w-xl" x-text="text.price_sub ? text.price_sub[lang] : 'Transparent & Flexible Plans Built for Growth.'"></p>
            </div>

            <!-- 3D Cards Container (Mobile Snap Scroll Slider & Desktop Grid) -->
            <div class="pricing-card-scroll-wrap hide-scrollbar md:grid md:grid-cols-3 md:gap-8 items-stretch max-w-6xl mx-auto">
                
                <!-- Card 1: Personal Branding (Profile SVG) -->
                <div class="jh-pricing-card jh-card-1" data-aos="fade-up" data-aos-delay="100">
                    <div>
                        <div class="jh-icon-wrap">
                            <div class="jh-icon-circle">
                                <svg class="w-12 h-12 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                </svg>
                            </div>
                            <h2 class="jh-card-title">Personal Branding</h2>
                        </div>
                        
                        <div class="jh-card-price">
                            <h4><sup>RM</sup>999</h4>
                        </div>

                        <div class="jh-card-options">
                            <ul>
                                <li><svg class="w-4 h-4 text-white shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg> <span x-text="text.pb_feat_1 ? text.pb_feat_1[lang] : 'Bio & Portfolio Gallery'">Bio & Portfolio Gallery</span></li>
                                <li><svg class="w-4 h-4 text-white shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg> <span x-text="text.pb_feat_2 ? text.pb_feat_2[lang] : 'Research List & Profile'">Research List & Profile</span></li>
                                <li><svg class="w-4 h-4 text-white shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg> <span x-text="text.pb_feat_3 ? text.pb_feat_3[lang] : 'WhatsApp Integration'">WhatsApp Integration</span></li>
                                <li><svg class="w-4 h-4 text-white shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg> 1 Year Free Domain & Hosting</li>
                            </ul>
                        </div>
                    </div>

                    <a href="https://wa.me/601155886905?text=I'm%20interested%20in%20Personal%20Branding" target="_blank" class="jh-card-btn" x-text="text.price_btn ? text.price_btn[lang] : 'Order Now'">Order Now</a>
                </div>

                <!-- Card 2: Corporate Branding (Building SVG) -->
                <div class="jh-pricing-card jh-card-2" data-aos="fade-up" data-aos-delay="200">
                    <div>
                        <div class="jh-icon-wrap">
                            <div class="jh-icon-circle">
                                <svg class="w-12 h-12 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5s0 0 0 0m-1.5 3h1.5m-1.5 3h1.5m3-6H15m-1.5 3H15m-1.5 3H15M9 21v-3.375c0-.621.504-1.125 1.125-1.125h3.75c.621 0 1.125.504 1.125 1.125V21" />
                                </svg>
                            </div>
                            <h2 class="jh-card-title">Corporate Branding</h2>
                        </div>
                        
                        <div class="jh-card-price">
                            <h4><sup>RM</sup>4,999</h4>
                        </div>

                        <div class="jh-card-options">
                            <ul>
                                <li><svg class="w-4 h-4 text-white shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg> <span x-text="text.cb_feat_1 ? text.cb_feat_1[lang] : 'Modern Company Profile'">Modern Company Profile</span></li>
                                <li><svg class="w-4 h-4 text-white shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg> <span x-text="text.cb_feat_2 ? text.cb_feat_2[lang] : 'Product & Service Showcase'">Product & Service Showcase</span></li>
                                <li><svg class="w-4 h-4 text-white shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg> <span x-text="text.cb_feat_3 ? text.cb_feat_3[lang] : 'Google Maps & Trust Badges'">Google Maps & Trust Badges</span></li>
                                <li><svg class="w-4 h-4 text-white shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg> SEO & Analytics Integration</li>
                            </ul>
                        </div>
                    </div>

                    <a href="https://wa.me/601155886905?text=I'm%20interested%20in%20Corporate%20Branding" target="_blank" class="jh-card-btn" x-text="text.price_btn ? text.price_btn[lang] : 'Order Now'">Order Now</a>
                </div>

                <!-- Card 3: Business System (System Matrix SVG) -->
                <div class="jh-pricing-card jh-card-3" data-aos="fade-up" data-aos-delay="300">
                    <div>
                        <div class="jh-icon-wrap">
                            <div class="jh-icon-circle">
                                <svg class="w-12 h-12 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z" />
                                </svg>
                            </div>
                            <h2 class="jh-card-title">Business System</h2>
                        </div>
                        
                        <div class="jh-card-price">
                            <h4 style="font-size: 40px; padding: 25px 0;">CUSTOM</h4>
                        </div>

                        <div class="jh-card-options">
                            <ul>
                                <li><svg class="w-4 h-4 text-white shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg> <span x-text="text.lms_feat_1 ? text.lms_feat_1[lang] : 'CRM, POS, Sales & Payment'">CRM, POS, Sales & Payment</span></li>
                                <li><svg class="w-4 h-4 text-white shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg> <span x-text="text.lms_feat_2 ? text.lms_feat_2[lang] : 'Booking & Rental Systems'">Booking & Rental Systems</span></li>
                                <li><svg class="w-4 h-4 text-white shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg> <span x-text="text.lms_feat_3 ? text.lms_feat_3[lang] : 'Attendance & Reports'">Attendance & Reports</span></li>
                                <li><svg class="w-4 h-4 text-white shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg> Dedicated 24/7 Support</li>
                            </ul>
                        </div>
                    </div>

                    <a href="https://wa.me/601155886905?text=I'm%20interested%20in%20Business%20System" target="_blank" class="jh-card-btn">Discuss Now</a>
                </div>

            </div>
        </div>
    </section>

    <!-- FAQ Section (Compact Card Accordion with Gray Background) -->
    <section id="faq" class="py-24 bg-[#f8fafc] border-t border-gray-200/80" x-data="{ active: null }">
        <div class="max-w-7xl mx-auto px-6">
            
            <!-- Left-Aligned Section Header -->
            <div class="text-left mb-12" data-aos="fade-right">
                <div class="flex items-center gap-2.5 mb-3">
                    <span class="w-8 h-[2px] bg-orange-600 inline-block"></span>
                    <span class="text-orange-600 font-bold tracking-[0.25em] text-xs uppercase" x-text="text.faq_head ? text.faq_head[lang] : 'FAQ'">FAQ</span>
                </div>
                <h2 class="font-modernica text-4xl sm:text-5xl md:text-7xl font-black text-gray-900 uppercase tracking-tight leading-none">
                    <span x-show="lang === 'ENG'">FREQUENTLY <span class="text-orange-600">ASKED</span></span>
                    <span x-show="lang === 'BM'">SOALAN <span class="text-orange-600">LAZIM</span></span>
                </h2>
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

<!-- Ready to Launch CTA & Google Maps Section -->
<section id="ready-to-launch" class="py-24 bg-gray-50 border-t border-gray-200 text-left w-full relative overflow-hidden" x-data="{ msg: '' }">
    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 items-center">
            
            <!-- Left Column: Title, Subtitle, WhatsApp Capsule Input & Action Buttons -->
            <div class="lg:col-span-6 flex flex-col justify-center text-left" data-aos="fade-right">
                <div class="flex items-center gap-2.5 mb-3">
                    <span class="w-8 h-[2px] bg-orange-600 inline-block"></span>
                    <span class="text-orange-600 font-bold tracking-[0.25em] text-xs uppercase" x-text="text.footer_head ? text.footer_head[lang] : 'READY TO LAUNCH?'">READY TO LAUNCH?</span>
                </div>
                
                <h2 class="font-modernica text-4xl sm:text-5xl md:text-6xl font-black text-gray-900 uppercase tracking-tight leading-none mb-4">
                    <span x-show="lang === 'ENG'">READY TO <span class="text-orange-600">LAUNCH?</span></span>
                    <span x-show="lang === 'BM'">SEDIA <span class="text-orange-600">MELUNCUR?</span></span>
                </h2>
                
                <p class="text-gray-600 font-medium text-sm sm:text-base leading-relaxed mb-8 max-w-lg" x-text="text.footer_sub ? text.footer_sub[lang] : 'Tell us what you need or type a quick message below.'"></p>

                <!-- WhatsApp Capsule Input Box (Kapsul Ketik WA) -->
                <div class="mb-6">
                    <div class="relative w-full rounded-3xl border border-gray-300 bg-white p-2 shadow-lg focus-within:border-orange-500 focus-within:ring-4 focus-within:ring-orange-500/10 transition-all duration-300">
                        <textarea x-model="msg" rows="3" 
                            :placeholder="lang === 'ENG' ? 'Hi MIJ Digital, I need a website for...' : 'Hai MIJ Digital, saya perlukan website untuk...'" 
                            class="w-full px-4 py-3 bg-transparent text-gray-900 placeholder-gray-400 text-base focus:outline-none resize-none font-medium"></textarea>
                    </div>
                </div>

                <!-- Action Buttons: WhatsApp Send & Direct Contact -->
                <div class="flex flex-wrap items-center gap-4">
                    <a :href="'https://wa.me/601155886905?text=' + encodeURIComponent(msg ? msg : 'Hi MIJ Digital, I am interested in your services.')" 
                       target="_blank" 
                       class="btn-neumorphism group">
                        <svg class="w-5 h-5 fill-current text-green-400 group-hover:text-white transition-colors" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.991c-.001 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                        <span x-text="text.btn_wa[lang]">WhatsApp Now</span>
                    </a>
                    
                    <a href="mailto:info@mijdigital.my" 
                       class="inline-flex items-center justify-center gap-3 bg-white border-2 border-gray-200 text-gray-900 font-bold text-sm sm:text-base px-8 py-4 rounded-full hover:bg-gray-100 transition shadow-sm hover:border-gray-300 transform hover:-translate-y-0.5 active:scale-95">
                        <svg class="w-5 h-5 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        <span x-text="text.btn_contact[lang]">Contact Me</span>
                    </a>
                </div>
            </div>

            <!-- Right Column: Google Maps Widget pointing to UTM Malaysia (Neubrutalism Design) -->
            <div class="lg:col-span-6" data-aos="fade-left">
                <div class="relative w-full rounded-3xl border-4 border-black bg-white p-2 sm:p-3 shadow-[12px_12px_0px_0px_#000000] hover:shadow-[16px_16px_0px_0px_#000000] hover:-translate-x-1 hover:-translate-y-1 transition-all duration-300 overflow-hidden min-h-[360px] sm:min-h-[440px] group">
                    
                    <!-- Neubrutalism Location Badge Tag -->
                    <div class="absolute top-5 left-5 z-20 bg-orange-500 text-black font-black text-xs sm:text-sm tracking-widest uppercase border-3 border-black px-4 py-2 rounded-2xl shadow-[4px_4px_0px_0px_#000000] flex items-center gap-2.5 pointer-events-none">
                        <span class="relative flex h-3 w-3">
                          <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-600 opacity-75"></span>
                          <span class="relative inline-flex rounded-full h-3 w-3 bg-red-600 border border-black"></span>
                        </span>
                        <span>UTM MALAYSIA (SKUDAI)</span>
                    </div>

                    <!-- Map Container with Inner Black Border -->
                    <div class="relative w-full h-full min-h-[340px] sm:min-h-[410px] rounded-2xl border-2 border-black overflow-hidden bg-gray-100">
                        <iframe src="https://maps.google.com/maps?q=Universiti%20Teknologi%20Malaysia%2C%20Skudai%2C%20Johor&t=&z=15&ie=UTF8&iwloc=B&output=embed" 
                                class="absolute inset-0 w-full h-full border-0 filter contrast-105" 
                                allowfullscreen="" 
                                loading="lazy" 
                                referrerpolicy="no-referrer-when-downgrade" 
                                title="UTM Malaysia Location Map"></iframe>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include 'footer.php'; ?>