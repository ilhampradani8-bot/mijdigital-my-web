<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pageTitle ?? 'MIJ Digital - Professional Web Solutions' }}</title>
    
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('favicon.png') }}">
    <meta name="theme-color" content="#ea580c">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Montserrat:wght@600;700;800&family=Outfit:wght@700;900&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" media="print" onload="this.media='all'">
    
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    @livewireStyles

    <script>
        tailwind.config = { 
            theme: { 
                extend: { 
                    fontFamily: { 
                        sans: ['Inter', 'sans-serif'], 
                        display: ['Outfit', 'sans-serif'] 
                    } 
                } 
            } 
        }
    </script>

    <style>
        @font-face {
            font-family: 'HonestModernica';
            src: url('{{ asset("HonestModernica.otf") }}') format('opentype');
            font-weight: normal;
            font-style: normal;
        }

        [x-cloak] { display: none !important; }
        img { content-visibility: auto; }
        .font-modernica { font-family: 'Outfit', 'Inter', sans-serif !important; }
        .animate-marquee { animation: marquee 20s linear infinite; }
        @keyframes marquee { 0% { transform: translateX(0); } 100% { transform: translateX(-50%); } }
        .hide-scrollbar::-webkit-scrollbar { display: none; }
        .hide-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
        .swiper { width: 100%; padding-top: 50px; padding-bottom: 50px; }
        .swiper-slide { background-position: center; background-size: cover; width: 300px; height: auto; border-radius: 20px; }

        .mySwiper { width: 100%; padding-top: 10px; padding-bottom: 50px; }
        .mySwiper .swiper-slide {
            width: 300px !important; height: 400px !important; background: transparent !important;
            border: none !important; padding: 0 !important; filter: blur(4px); opacity: 0.55;
            transition: filter 0.5s ease, opacity 0.5s ease, transform 0.5s ease;
        }
        .mySwiper .swiper-slide-active { filter: blur(0px) !important; opacity: 1 !important; }
        .card-wrap-3d { transform: perspective(800px); transform-style: preserve-3d; cursor: pointer; width: 100%; height: 100%; }
        .card-3d { position: relative; width: 100%; height: 100%; background-color: #121212; overflow: hidden; border-radius: 16px; box-shadow: rgba(0, 0, 0, 0.8) 0 30px 60px 0, inset #333 0 0 0 5px, inset rgba(255, 255, 255, 0.4) 0 0 0 6px; transition: all 0.8s cubic-bezier(0.445, 0.05, 0.55, 0.95); }
        .card-wrap-3d:hover .card-3d, .swiper-slide-active .card-3d { transition: all 0.6s cubic-bezier(0.23, 1, 0.32, 1), box-shadow 1.5s cubic-bezier(0.23, 1, 0.32, 1); box-shadow: rgba(234, 88, 12, 0.45) 0 0 40px 5px, rgba(255, 255, 255, 0.9) 0 0 0 1px, rgba(0, 0, 0, 0.9) 0 30px 60px 0, inset #ea580c 0 0 0 5px, inset #ffffff 0 0 0 6px; }
    </style>
</head>
<body class="bg-[#FFFBF5] text-gray-900 font-sans antialiased selection:bg-orange-500 selection:text-white"
      x-data="{ 
          lang: localStorage.getItem('site_lang') || 'ENG',
          mobileMenu: false,
          scrolled: false,
          setLang(l) { this.lang = l; localStorage.setItem('site_lang', l); },
          text: {{ json_encode($lang ?? []) }},
          data: {{ json_encode($data ?? []) }}
      }"
      @scroll.window="scrolled = (window.pageYOffset > 20)">

    @include('components.header')

    <main>
        {{ $slot ?? '' }}
        @yield('content')
    </main>

    @include('components.footer')

    @livewireScripts
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            if (typeof AOS !== 'undefined') { AOS.init({ duration: 800, once: true }); }
            if (typeof Swiper !== 'undefined') {
                new Swiper(".testimonialSwiper", {
                    slidesPerView: 1, spaceBetween: 20, loop: true, autoplay: { delay: 4000, disableOnInteraction: false },
                    breakpoints: { 640: { slidesPerView: 2 }, 1024: { slidesPerView: 3 } }
                });
                new Swiper(".mySwiper", {
                    effect: "coverflow", grabCursor: true, centeredSlides: true, slidesPerView: "auto",
                    coverflowEffect: { rotate: 20, stretch: 0, depth: 200, modifier: 1, slideShadows: false },
                    loop: true, autoplay: { delay: 3500, disableOnInteraction: false }
                });
            }
        });
    </script>
</body>
</html>
