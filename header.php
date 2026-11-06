<?php 
$currentDomain = "https://mijdigital.my";
$metaTitle = isset($pageTitle) ? $pageTitle : 'MIJ Digital - Professional Web Solutions & System Development';
$metaDescription = isset($pageDescription) ? $pageDescription : 'Pakar pembinaan website profesional, personal branding, corporate profile & sistem perniagaan khas di Malaysia. Include 1 Tahun Free Domain & Hosting.';
$metaKeywords = isset($pageKeywords) ? $pageKeywords : 'bina website malaysia, web development, personal branding website, corporate website, sistem perniagaan, web design, mij digital';
$canonicalUrl = $currentDomain . strtok($_SERVER['REQUEST_URI'] ?? '/', '?');
?>
<!DOCTYPE html>
<html lang="ms" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($metaTitle); ?></title>
    
    <!-- Primary Meta Tags -->
    <meta name="description" content="<?php echo htmlspecialchars($metaDescription); ?>">
    <meta name="keywords" content="<?php echo htmlspecialchars($metaKeywords); ?>">
    <meta name="author" content="MIJ Digital ENT">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large">
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large">
    
    <!-- Google Search Console Verification Tag -->
    <meta name="google-site-verification" content="8Rv3gM5M69S7hbBPautJ4Somd2QQzb6AR3-8y7lxTXI">

    <!-- Canonical & Multilingual Alternate Links -->
    <link rel="canonical" href="<?php echo htmlspecialchars($canonicalUrl); ?>">
    <link rel="alternate" hreflang="ms-MY" href="<?php echo htmlspecialchars($canonicalUrl); ?>">
    <link rel="alternate" hreflang="en" href="<?php echo htmlspecialchars($canonicalUrl); ?>">
    <link rel="alternate" hreflang="x-default" href="<?php echo htmlspecialchars($canonicalUrl); ?>">

    <!-- Favicon & PWA Webmanifest -->
    <link rel="icon" type="image/png" href="favicon.png">
    <link rel="apple-touch-icon" href="favicon.png">
    <link rel="manifest" href="site.webmanifest">
    <meta name="theme-color" content="#ea580c">

    <!-- Open Graph / Social & AI Previews (Bing Copilot, WhatsApp, Facebook, LinkedIn) -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo htmlspecialchars($canonicalUrl); ?>">
    <meta property="og:site_name" content="MIJ Digital ENT">
    <meta property="og:title" content="<?php echo htmlspecialchars($metaTitle); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($metaDescription); ?>">
    <meta property="og:image" content="<?php echo $currentDomain; ?>/hero.webp">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:locale" content="ms_MY">

    <!-- Twitter / X Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($metaTitle); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($metaDescription); ?>">
    <meta name="twitter:image" content="<?php echo $currentDomain; ?>/hero.webp">

    <!-- Schema.org Structured Data (JSON-LD) for Bing, Google, ChatGPT & Perplexity AI -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "ProfessionalService",
          "@id": "https://mijdigital.my/#organization",
          "name": "MIJ Digital ENT",
          "url": "https://mijdigital.my",
          "logo": "https://mijdigital.my/mij-logo.webp",
          "image": "https://mijdigital.my/hero.webp",
          "description": "Pakar pembinaan website profesional, personal branding, corporate profile & sistem perniagaan khas di Malaysia.",
          "priceRange": "RM 999 - RM 5000",
          "areaServed": "MY",
          "sameAs": [
            "https://www.instagram.com/ikhwanjamal90?igsh=ejdmb2NvMjh2b2V1",
            "https://www.threads.com/@ikhwanjamal90?invite=0",
            "https://www.strava.com/athletes/186812023",
            "https://tradingsafe.mijdigital.my"
          ]
        },
        {
          "@type": "WebSite",
          "@id": "https://mijdigital.my/#website",
          "url": "https://mijdigital.my",
          "name": "MIJ Digital ENT",
          "publisher": {
            "@id": "https://mijdigital.my/#organization"
          },
          "inLanguage": "ms-MY"
        },
        {
          "@type": "FAQPage",
          "@id": "https://mijdigital.my/#faq",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "Berapa lama masa diambil untuk bina website?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Laman personal mengambil masa 3-7 hari. Laman korporat 7-14 hari. Sistem perniagaan khas mengikut keperluan."
              }
            },
            {
              "@type": "Question",
              "name": "Adakah domain dan hosting percuma disediakan?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Ya! Semua pakej Personal dan Korporat termasuk 1 Tahun Percuma Domain (.com/.my) & Cloud Hosting Berkelajuan Tinggi."
              }
            },
            {
              "@type": "Question",
              "name": "Bagaimana dengan jaminan dan sokongan teknikal?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Setiap pakej merangkumi 1 Tahun Maintenance & Technical Support Percuma untuk jaminan prestasi website anda."
              }
            }
          ]
        }
      ]
    }
    </script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Montserrat:wght@600;700;800&family=Outfit:wght@700;900&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" media="print" onload="this.media='all'">
    
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
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
        /* Essential Performance & FOUC Protection */
        [x-cloak] { display: none !important; }
        img { content-visibility: auto; }
        
        /* Font Setup */
        .font-modernica { font-family: 'Outfit', 'Inter', sans-serif !important; }
        
        /* Animasi Marquee (Running Text) */
        .animate-marquee { animation: marquee 20s linear infinite; }
        @keyframes marquee { 0% { transform: translateX(0); } 100% { transform: translateX(-50%); } }
        
        /* Utilities */
        [x-cloak] { display: none !important; }
        .hide-scrollbar::-webkit-scrollbar { display: none; }
        .hide-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
        
        /* Swiper Fix */
        .swiper { width: 100%; padding-top: 50px; padding-bottom: 50px; }
        .swiper-slide { background-position: center; background-size: cover; width: 300px; height: auto; border-radius: 20px; }

        /* Testimonial Swiper White Bullet Indicators */
        .testimonialSwiper { padding-top: 0px !important; padding-bottom: 36px !important; }
        .testimonialSwiper .swiper-pagination-bullet {
            background: #ffffff !important;
            opacity: 0.4 !important;
            width: 10px;
            height: 10px;
            transition: all 0.3s ease;
        }
        .testimonialSwiper .swiper-pagination-bullet-active {
            background: #ffffff !important;
            opacity: 1 !important;
            width: 28px;
            border-radius: 6px;
        }

        /* CodePen 3D Card Styling for mySwiper */
        .mySwiper {
            width: 100%;
            padding-top: 10px;
            padding-bottom: 50px;
        }

        .mySwiper .swiper-slide {
            width: 300px !important;
            height: 400px !important;
            background: transparent !important;
            border: none !important;
            padding: 0 !important;
            filter: blur(4px);
            opacity: 0.55;
            transition: filter 0.5s ease, opacity 0.5s ease, transform 0.5s ease;
        }

        .mySwiper .swiper-slide-active {
            filter: blur(0px) !important;
            opacity: 1 !important;
        }

        .card-wrap-3d {
            transform: perspective(800px);
            transform-style: preserve-3d;
            cursor: pointer;
            width: 100%;
            height: 100%;
        }

        .card-3d {
            position: relative;
            width: 100%;
            height: 100%;
            background-color: #121212;
            overflow: hidden;
            border-radius: 16px;
            box-shadow: rgba(0, 0, 0, 0.8) 0 30px 60px 0, inset #333 0 0 0 5px, inset rgba(255, 255, 255, 0.4) 0 0 0 6px;
            transition: all 0.8s cubic-bezier(0.445, 0.05, 0.55, 0.95);
        }

        .card-wrap-3d:hover .card-3d,
        .swiper-slide-active .card-3d {
            transition: all 0.6s cubic-bezier(0.23, 1, 0.32, 1), box-shadow 1.5s cubic-bezier(0.23, 1, 0.32, 1);
            box-shadow: rgba(234, 88, 12, 0.45) 0 0 40px 5px, rgba(255, 255, 255, 0.9) 0 0 0 1px, rgba(0, 0, 0, 0.9) 0 30px 60px 0, inset #ea580c 0 0 0 5px, inset #ffffff 0 0 0 6px;
        }

        .card-3d-bg {
            opacity: 0.5;
            position: absolute;
            top: -20px; left: -20px;
            width: calc(100% + 40px);
            height: calc(100% + 40px);
            background: radial-gradient(circle at 50% 30%, rgba(234, 88, 12, 0.35), transparent 70%), linear-gradient(180deg, #1c1c1e 0%, #0a0a0a 100%);
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            transition: all 0.8s cubic-bezier(0.445, 0.05, 0.55, 0.95);
            opacity: 0.7;
        }

        .card-wrap-3d:hover .card-3d-bg,
        .swiper-slide-active .card-3d-bg {
            opacity: 0.9;
            transform: scale(1.08);
        }

        .card-3d-info {
            padding: 24px;
            position: absolute;
            bottom: 0; left: 0; width: 100%;
            color: #fff;
            transform: translateY(12%);
            transition: transform 0.6s cubic-bezier(0.215, 0.61, 0.355, 1);
            text-align: left;
            z-index: 2;
        }
        
        .card-3d-info::after {
            content: '';
            position: absolute;
            top: 0; left: 0; z-index: 0;
            width: 100%; height: 100%;
            background-image: linear-gradient(to bottom, transparent 0%, rgba(0, 0, 0, 0.9) 100%);
            background-blend-mode: overlay;
            opacity: 0;
            transform: translateY(100%);
            transition: all 0.8s cubic-bezier(0.445, 0.05, 0.55, 0.95);
        }

        .card-wrap-3d:hover .card-3d-info::after,
        .swiper-slide-active .card-3d-info::after {
            transition: all 0.6s cubic-bezier(0.23, 1, 0.32, 1);
            opacity: 1;
            transform: translateY(0);
        }

        .card-3d-info * {
            position: relative;
            z-index: 1;
        }

        .card-3d-info p {
            opacity: 0;
            text-shadow: rgba(0, 0, 0, 1) 0 2px 4px;
            transition: opacity 0.5s cubic-bezier(0.215, 0.61, 0.355, 1);
        }

        .card-wrap-3d:hover .card-3d-info p,
        .swiper-slide-active .card-3d-info p {
            opacity: 1;
            transition: opacity 0.6s 0.1s cubic-bezier(0.23, 1, 0.32, 1);
        }

        /* Elegant Glassmorphic Pricing Section Styling */
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800;900&display=swap');

        .pricing-fem-body {
            background: #0b0f19 url('https://images.unsplash.com/photo-1550684848-fac1c5b4e853?q=80&w=1920&auto=format&fit=crop') center/cover no-repeat fixed;
            position: relative;
            font-family: "Montserrat", sans-serif;
            padding: 4.5rem 1rem 5.5rem 1rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            overflow-x: hidden;
        }

        .pricing-fem-body::before {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(180deg, rgba(11, 15, 25, 0.92) 0%, rgba(15, 23, 42, 0.95) 50%, rgba(11, 15, 25, 0.98) 100%);
            z-index: 1;
        }

        .pricing-fem-body > * {
            position: relative;
            z-index: 2;
        }

        .pricing-fem-scroll-wrap {
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            padding: 10px 5px 25px 5px;
            scrollbar-width: none;
            -ms-overflow-style: none;
        }

        .pricing-fem-scroll-wrap::-webkit-scrollbar {
            display: none !important;
            width: 0 !important;
            height: 0 !important;
        }

        .pricing-fem-cards {
            display: flex;
            justify-content: center;
            align-items: stretch;
            flex-wrap: wrap;
            gap: 1.5rem;
            width: 100%;
            max-width: 1240px;
            margin: 0 auto;
        }

        .pricing-fem-card {
            background: rgba(255, 255, 255, 0.04);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            border: 1px solid rgba(255, 255, 255, 0.14);
            border-radius: 0px;
            width: 310px;
            flex: 0 0 310px;
            margin: 0;
            padding: 1.5rem 1.25rem;
            transition: all 0.35s ease;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.25);
            color: #f3f4f6;
            scroll-snap-align: center;
        }

        .pricing-fem-card:hover {
            transform: translateY(-5px);
            border-color: rgba(251, 146, 60, 0.5);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
        }

        .pricing-fem-cards .pricing-fem-card.active {
            background: linear-gradient(145deg, rgba(251, 146, 60, 0.15) 0%, rgba(234, 88, 12, 0.25) 100%);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(251, 146, 60, 0.55);
            border-radius: 0px;
            transform: scale(1.04);
            z-index: 10;
            box-shadow: 0 25px 50px rgba(234, 88, 12, 0.35);
        }

        .pricing-fem-card ul {
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            list-style: none;
        }

        .pricing-fem-card ul li {
            list-style-type: none;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            padding: 0.55rem 0;
            font-size: 0.82rem;
            font-weight: 600;
            text-align: center;
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
            color: #d1d5db;
        }

        .pricing-fem-card ul li.pack {
            font-size: 1.15rem;
            font-weight: 800;
            padding-bottom: 0.8rem;
            border-bottom: none;
            color: #ffffff;
            letter-spacing: 0.5px;
        }

        /* Supermarket Retail Style Price Typography (Inter - Large Main Digits + Small Zeroes) */
        .supermarket-price {
            font-family: 'Inter', sans-serif;
            font-weight: 900;
            color: #fb923c;
            line-height: 1;
            padding: 0.6rem 0 1.2rem 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1) !important;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            gap: 0.2rem;
        }

        .supermarket-price .currency {
            font-family: 'Inter', sans-serif;
            font-size: 1.1rem;
            font-weight: 800;
            color: #f97316;
            margin-top: 0.3rem;
        }

        .supermarket-price .price-main {
            font-family: 'Inter', sans-serif;
            font-size: 3.4rem;
            font-weight: 900;
            color: #fb923c;
            letter-spacing: -1.5px;
            text-shadow: 0 0 20px rgba(251, 146, 60, 0.4);
            line-height: 0.9;
        }

        .supermarket-price .price-sub {
            font-family: 'Inter', sans-serif;
            font-size: 1.9rem;
            font-weight: 800;
            color: #fdba74;
            letter-spacing: -1px;
            margin-top: 0.15rem;
            opacity: 0.9;
        }

        .pricing-fem-card.active .supermarket-price .price-main {
            color: #ffffff;
            text-shadow: 0 0 25px rgba(255, 255, 255, 0.6);
        }

        .pricing-fem-card.active .supermarket-price .price-sub {
            color: #fed7aa;
        }

        .pricing-fem-card.active .supermarket-price .currency {
            color: #fdba74;
        }

        .pricing-fem-card ul li:last-child {
            border-bottom: none;
        }

        @media (max-width: 768px) {
            .pricing-fem-body {
                padding: 3rem 0.5rem 4rem 0.5rem;
            }
            .pricing-fem-card {
                width: 270px;
                flex: 0 0 270px;
                padding: 1.2rem 1rem;
            }
            .pricing-fem-cards .pricing-fem-card.active {
                transform: scale(1) !important;
                width: 270px;
            }
            .supermarket-price {
                font-size: 2.3rem;
            }
        }

        /* Inset Neumorphic Capsule Navbar Styling (Gray Premium Glassmorphism) */
        .nav-neumorph-capsule {
            background: rgba(45, 52, 62, 0.88);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.18);
            border-radius: 9999px;
            box-shadow: 
                inset 2px 2px 5px rgba(0, 0, 0, 0.4),
                inset -2px -2px 5px rgba(255, 255, 255, 0.12),
                0 10px 30px rgba(0, 0, 0, 0.25);
            padding: 6px 18px;
        }

        /* Jamal Hassouni Design Pricing Cards */
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap');
        
        .jh-pricing-card {
            position: relative;
            max-width: 360px;
            width: 100%;
            border-radius: 20px;
            margin: 0 auto;
            padding: 40px 24px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.12);
            transition: transform 0.4s ease, box-shadow 0.4s ease;
            overflow: hidden;
            color: #ffffff;
            text-align: center;
            font-family: 'Roboto', sans-serif !important;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .jh-pricing-card:hover {
            transform: scale(1.06);
            box-shadow: 0 20px 35px rgba(0, 0, 0, 0.22);
        }

        .jh-pricing-card::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 40%;
            background: rgba(255, 255, 255, 0.12);
            z-index: 1;
            transform: skewY(-5deg) scale(1.5);
            pointer-events: none;
        }

        .jh-card-1 {
            background: linear-gradient(-45deg, #f403d1, #64b5f6);
        }

        .jh-card-2 {
            background: linear-gradient(-45deg, #ffec61, #f321d7);
        }

        .jh-card-3 {
            background: linear-gradient(-45deg, #24ff72, #9a4eff);
        }

        .jh-icon-wrap {
            position: relative;
            z-index: 2;
            margin-bottom: 10px;
        }

        .jh-icon-circle {
            color: #ffffff;
            width: 95px;
            height: 95px;
            border-radius: 50%;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.12);
        }

        .jh-card-1 .jh-icon-circle {
            background: linear-gradient(-45deg, #f403d1, #64b5f6);
        }

        .jh-card-2 .jh-icon-circle {
            background: linear-gradient(-45deg, #ffec61, #f321d7);
        }

        .jh-card-3 .jh-icon-circle {
            background: linear-gradient(-45deg, #24ff72, #9a4eff);
        }

        .jh-card-title {
            position: relative;
            margin: 18px 0 0 0;
            color: #ffffff;
            font-size: 28px;
            font-weight: 700;
            z-index: 2;
            letter-spacing: -0.5px;
        }

        .jh-card-price {
            position: relative;
            z-index: 2;
            padding: 15px 0;
            color: #ffffff;
            font-size: 60px;
            font-weight: 700;
            line-height: 1;
            font-family: 'Roboto', sans-serif !important;
        }

        .jh-card-price sup {
            font-size: 26px;
            top: -22px;
            margin-right: 4px;
            font-weight: 600;
        }

        .jh-card-options {
            position: relative;
            z-index: 2;
            margin-bottom: 25px;
            flex-grow: 1;
        }

        .jh-card-options ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .jh-card-options ul li {
            margin: 0 0 12px 0;
            color: #ffffff;
            font-size: 15px;
            font-weight: 500;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .jh-card-btn {
            position: relative;
            z-index: 2;
            background: #ffffff;
            color: #000000;
            width: 160px;
            height: 42px;
            line-height: 42px;
            border-radius: 40px;
            display: inline-block;
            text-align: center;
            font-size: 15px;
            font-weight: 700;
            cursor: pointer;
            box-shadow: 0 5px 12px rgba(0, 0, 0, 0.12);
            transition: all 0.3s ease;
            text-decoration: none !important;
            margin: 10px auto 0 auto;
        }

        .jh-card-btn:hover {
            background: #ffffff;
            color: #ea580c;
            transform: translateY(-2px);
            box-shadow: 0 8px 18px rgba(0, 0, 0, 0.22);
        }

        /* Mobile Scroll Parallax 3D Card Slider */
        @media (max-width: 767px) {
            .pricing-card-scroll-wrap {
                display: flex !important;
                overflow-x: auto !important;
                scroll-snap-type: x mandatory !important;
                -webkit-overflow-scrolling: touch !important;
                padding: 15px 10px 30px 10px !important;
                gap: 16px !important;
                perspective: 1000px !important;
            }
            .pricing-card-scroll-wrap .jh-pricing-card {
                scroll-snap-align: center !important;
                flex: 0 0 85vw !important;
                max-width: 320px !important;
                transform: rotateY(-3deg) scale(0.98);
                transition: transform 0.4s ease, box-shadow 0.4s ease;
            }
            .pricing-card-scroll-wrap .jh-pricing-card:active,
            .pricing-card-scroll-wrap .jh-pricing-card:hover {
                transform: rotateY(0deg) scale(1.02);
            }
        /* Neumorphism Button (.btn-neumorphism) */
        .btn-neumorphism {
            position: relative;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            padding: 16px 36px;
            border-radius: 9999px;
            background: #1c2128;
            box-shadow: 6px 6px 14px #12151a, -6px -6px 14px #262d36, inset 0 1px 1px rgba(255, 255, 255, 0.15);
            color: #ffffff !important;
            font-weight: 800;
            font-size: 15px;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            border: 1px solid rgba(255, 255, 255, 0.1);
            cursor: pointer;
            text-decoration: none !important;
        }

        .btn-neumorphism:hover {
            background: #ea580c;
            border-color: rgba(255, 255, 255, 0.3);
            color: #ffffff !important;
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(234, 88, 12, 0.45), inset 2px 2px 5px rgba(255, 255, 255, 0.3);
        }

        .btn-neumorphism:active {
            box-shadow: inset 4px 4px 8px #12151a, inset -4px -4px 8px #262d36;
            transform: translateY(1px);
        }

        /* Fullscreen Animated Text Page Loader Overlay */
        #cat-loader-overlay, #page-loader-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background: #000000;
            z-index: 9999999;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 1;
            visibility: visible;
            transition: opacity 0.5s cubic-bezier(0.4, 0, 0.2, 1), visibility 0.5s ease;
        }

        #cat-loader-overlay.fade-out, #page-loader-overlay.fade-out {
            opacity: 0;
            visibility: hidden;
            pointer-events: none;
        }

        #load {
            position: absolute;
            width: 600px;
            height: 36px;
            left: 50%;
            top: 45%;
            margin-left: -300px;
            overflow: visible;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            cursor: default;
        }

        #load div {
            position: absolute;
            width: 20px;
            height: 36px;
            opacity: 0;
            font-family: 'Outfit', Helvetica, Arial, sans-serif;
            font-weight: 900;
            font-size: 26px;
            animation: move 2s linear infinite;
            -o-animation: move 2s linear infinite;
            -moz-animation: move 2s linear infinite;
            -webkit-animation: move 2s linear infinite;
            transform: rotate(180deg);
            -o-transform: rotate(180deg);
            -moz-transform: rotate(180deg);
            -webkit-transform: rotate(180deg);
            color: #35C4F0;
        }

        #load div:nth-child(2) { animation-delay: 0.2s; -o-animation-delay: 0.2s; -moz-animation-delay: 0.2s; -webkit-animation-delay: 0.2s; }
        #load div:nth-child(3) { animation-delay: 0.4s; -o-animation-delay: 0.4s; -webkit-animation-delay: 0.4s; }
        #load div:nth-child(4) { animation-delay: 0.6s; -o-animation-delay: 0.6s; -moz-animation-delay: 0.6s; -webkit-animation-delay: 0.6s; }
        #load div:nth-child(5) { animation-delay: 0.8s; -o-animation-delay: 0.8s; -moz-animation-delay: 0.8s; -webkit-animation-delay: 0.8s; }
        #load div:nth-child(6) { animation-delay: 1s; -o-animation-delay: 1s; -moz-animation-delay: 1s; -webkit-animation-delay: 1s; }
        #load div:nth-child(7) { animation-delay: 1.2s; -o-animation-delay: 1.2s; -moz-animation-delay: 1.2s; -webkit-animation-delay: 1.2s; }

        @keyframes move {
            0% { left: 0; opacity: 0; }
            35% { left: 41%; transform: rotate(0deg); opacity: 1; }
            65% { left: 59%; transform: rotate(0deg); opacity: 1; }
            100% { left: 100%; transform: rotate(-180deg); opacity: 0; }
        }

        @-moz-keyframes move {
            0% { left: 0; opacity: 0; }
            35% { left: 41%; -moz-transform: rotate(0deg); transform: rotate(0deg); opacity: 1; }
            65% { left: 59%; -moz-transform: rotate(0deg); transform: rotate(0deg); opacity: 1; }
            100% { left: 100%; -moz-transform: rotate(-180deg); transform: rotate(-180deg); opacity: 0; }
        }

        @-webkit-keyframes move {
            0% { left: 0; opacity: 0; }
            35% { left: 41%; -webkit-transform: rotate(0deg); transform: rotate(0deg); opacity: 1; }
            65% { left: 59%; -webkit-transform: rotate(0deg); transform: rotate(0deg); opacity: 1; }
            100% { left: 100%; -webkit-transform: rotate(-180deg); transform: rotate(-180deg); opacity: 0; }
        }

        @-o-keyframes move {
            0% { left: 0; opacity: 0; }
            35% { left: 41%; -o-transform: rotate(0deg); transform: rotate(0deg); opacity: 1; }
            65% { left: 59%; -o-transform: rotate(0deg); transform: rotate(0deg); opacity: 1; }
            100% { left: 100%; -o-transform: rotate(-180deg); transform: rotate(-180deg); opacity: 0; }
        }
    </style>
</head>
<body x-data="contentData" class="bg-white text-black antialiased selection:bg-orange-500 selection:text-white overflow-x-hidden">

    <!-- Full Screen Animated Text Loader Overlay -->
    <div id="cat-loader-overlay">
        <div id="load">
            <div>G</div>
            <div>N</div>
            <div>I</div>
            <div>D</div>
            <div>A</div>
            <div>O</div>
            <div>L</div>
        </div>
    </div>

    <script>
        (function() {
            function hideCatLoader() {
                var loader = document.getElementById('cat-loader-overlay') || document.getElementById('page-loader-overlay');
                if (loader && !loader.classList.contains('fade-out')) {
                    loader.classList.add('fade-out');
                    setTimeout(function() {
                        loader.style.display = 'none';
                    }, 500);
                }
            }

            if (document.readyState === 'complete') {
                setTimeout(hideCatLoader, 400);
            } else {
                window.addEventListener('load', function() {
                    setTimeout(hideCatLoader, 400);
                });
            }

            // Fallback safety timeout (4 seconds max)
            setTimeout(hideCatLoader, 4000);
        })();
    </script>
<?php 
$current_page = basename($_SERVER['PHP_SELF']);
$is_home = ($current_page == 'index.php' || $current_page == '' || $current_page == 'index');
$is_services = ($current_page == 'services.php' || $current_page == 'services');
$is_portfolio = ($current_page == 'portfolio.php' || $current_page == 'portfolio');
$is_pricing = ($current_page == 'pricing.php' || $current_page == 'pricing');
$is_faq = ($current_page == 'faq.php' || $current_page == 'faq');
?>
    <header x-data="{ 
                navLoaded: false,
                isScrolled: false, 
                navVisible: true, 
                lastScrollY: 0, 
                mobileMenu: false, 
                openLang: false, 
                openHome: false,
                openServices: false,
                isHomePage: <?php echo $is_home ? 'true' : 'false'; ?> 
            }" 
            x-init="
                let triggerLoad = () => { setTimeout(() => { navLoaded = true; }, 350); };
                if (document.readyState === 'complete') {
                    triggerLoad();
                } else {
                    window.addEventListener('load', triggerLoad);
                }
                window.addEventListener('scroll', () => { 
                    let st = window.scrollY;
                    isScrolled = (st > 20);
                    if (window.innerWidth < 768) {
                        if (st > lastScrollY && st > 80) {
                            navVisible = false;
                            mobileMenu = false;
                            openLang = false;
                            openHome = false;
                            openServices = false;
                        } else {
                            navVisible = true;
                        }
                    } else {
                        navVisible = true;
                    }
                    lastScrollY = st;
                }, { passive: true });
            "
            :class="(navLoaded && navVisible) ? 'translate-y-0 opacity-100 pointer-events-none' : '-translate-y-full opacity-0 pointer-events-none'"
            class="fixed top-0 left-0 right-0 z-50 py-3 px-4 md:px-8 bg-transparent transition-all duration-700 ease-out transform -translate-y-full opacity-0">

        <div class="max-w-7xl mx-auto flex items-center justify-between pointer-events-none">
            
            <!-- Logo -->
            <a href="index" class="flex items-center group pointer-events-auto">
                <img src="mij-logo.webp" alt="MIJ Digital" width="200" height="100" class="h-16 md:h-24 w-auto object-contain transition-transform duration-200 group-hover:scale-105 filter drop-shadow-xl">
            </a>

            <!-- Mobile Menu Toggle Button -->
            <button @click="mobileMenu = !mobileMenu" class="md:hidden w-11 h-11 bg-[#2a303c]/90 text-white rounded-full flex items-center justify-center hover:bg-orange-600 transition shadow-xl border border-white/20 backdrop-blur-xl pointer-events-auto">
                <svg x-show="!mobileMenu" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                <svg x-show="mobileMenu" class="w-5 h-5 rotate-90" fill="none" stroke="currentColor" viewBox="0 0 24 24" x-cloak><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>

            <!-- Right Floating Gray Glassmorphic Capsule Card (Desktop) -->
            <div class="hidden md:flex items-center gap-5 nav-neumorph-capsule pointer-events-auto">
                
                <!-- Nav Links with Active Page Pill Highlight & Glassmorphic Dropdowns -->
                <div class="flex items-center gap-1.5 relative">
                    
                    <!-- Home Dropdown -->
                    <div class="relative group" @mouseenter="openHome = true" @mouseleave="openHome = false">
                        <button @click="openHome = !openHome"
                                class="px-3.5 py-1.5 text-xs font-bold rounded-full transition flex items-center gap-1 <?php echo $is_home ? 'bg-orange-600 text-white shadow-md shadow-orange-600/30 font-black' : 'text-gray-200 hover:text-orange-400'; ?>">
                            <span x-text="text.nav_home[lang]">Home</span>
                            <svg class="w-3 h-3 transition-transform duration-200" :class="openHome ? 'rotate-180 text-orange-400' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                        
                        <div x-show="openHome" 
                             x-transition:enter="transition ease-out duration-150"
                             x-transition:enter-start="opacity-0 scale-95 -translate-y-2"
                             x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                             x-transition:leave="transition ease-in duration-100"
                             x-transition:leave-start="opacity-100 scale-100 translate-y-0"
                             x-transition:leave-end="opacity-0 scale-95 -translate-y-2"
                             @click.away="openHome = false"
                             class="absolute left-0 top-full pt-4 w-52 z-50">
                            <div class="bg-[#181d26]/75 border border-white/20 text-white rounded-2xl shadow-[0_20px_45px_rgba(0,0,0,0.5),inset_0_1px_1px_rgba(255,255,255,0.25)] overflow-hidden text-xs font-bold py-2 backdrop-blur-2xl">
                                <a href="index#home" class="flex items-center gap-2 px-4 py-2 hover:bg-orange-600/90 transition text-gray-200 hover:text-white">
                                    <span class="w-1.5 h-1.5 rounded-full bg-orange-500"></span>
                                    <span x-text="text.nav_home[lang]">Home</span>
                                </a>
                                <a href="index#about-me" class="flex items-center gap-2 px-4 py-2 hover:bg-orange-600/90 transition text-gray-200 hover:text-white">
                                    <span class="w-1.5 h-1.5 rounded-full bg-orange-500"></span>
                                    <span x-text="text.nav_about[lang]">About Me</span>
                                </a>
                                <a href="index#testimonials" class="flex items-center gap-2 px-4 py-2 hover:bg-orange-600/90 transition text-gray-200 hover:text-white">
                                    <span class="w-1.5 h-1.5 rounded-full bg-orange-500"></span>
                                    <span x-text="text.testi_badge ? text.testi_badge[lang] : 'Testimonials'">Testimonials</span>
                                </a>
                                <a href="index#our-work" class="flex items-center gap-2 px-4 py-2 hover:bg-orange-600/90 transition text-gray-200 hover:text-white">
                                    <span class="w-1.5 h-1.5 rounded-full bg-orange-500"></span>
                                    <span x-text="text.work_badge ? text.work_badge[lang] : 'Our Best Work'">Our Best Work</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Services Dropdown (3 Categories linking to services.php) -->
                    <div class="relative group" @mouseenter="openServices = true" @mouseleave="openServices = false">
                        <button @click="openServices = !openServices"
                                class="px-3.5 py-1.5 text-xs font-bold rounded-full transition flex items-center gap-1 <?php echo $is_services ? 'bg-orange-600 text-white shadow-md shadow-orange-600/30 font-black' : 'text-gray-200 hover:text-orange-400'; ?>">
                            <span x-text="text.nav_services[lang]">Services</span>
                            <svg class="w-3 h-3 transition-transform duration-200" :class="openServices ? 'rotate-180 text-orange-400' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                        
                        <div x-show="openServices" 
                             x-transition:enter="transition ease-out duration-150"
                             x-transition:enter-start="opacity-0 scale-95 -translate-y-2"
                             x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                             x-transition:leave="transition ease-in duration-100"
                             x-transition:leave-start="opacity-100 scale-100 translate-y-0"
                             x-transition:leave-end="opacity-0 scale-95 -translate-y-2"
                             @click.away="openServices = false"
                             class="absolute left-0 top-full pt-4 w-64 z-50">
                            <div class="bg-[#181d26]/75 border border-white/20 text-white rounded-2xl shadow-[0_20px_45px_rgba(0,0,0,0.5),inset_0_1px_1px_rgba(255,255,255,0.25)] overflow-hidden text-xs font-bold py-2 backdrop-blur-2xl">
                                <a href="services#personal-branding" class="flex items-center gap-2.5 px-4 py-2.5 hover:bg-orange-600/90 transition border-b border-white/5">
                                    <span class="w-2 h-2 rounded-full bg-orange-500 shrink-0"></span>
                                    <div>
                                        <div class="font-bold text-white" x-text="text.s1_title ? text.s1_title[lang] : 'Personal Branding'">Personal Branding</div>
                                        <div class="text-[10px] text-gray-400 font-normal">Profile sites for professionals</div>
                                    </div>
                                </a>
                                <a href="services#corporate-branding" class="flex items-center gap-2.5 px-4 py-2.5 hover:bg-orange-600/90 transition border-b border-white/5">
                                    <span class="w-2 h-2 rounded-full bg-orange-500 shrink-0"></span>
                                    <div>
                                        <div class="font-bold text-white" x-text="text.s2_title ? text.s2_title[lang] : 'Corporate Branding'">Corporate Branding</div>
                                        <div class="text-[10px] text-gray-400 font-normal">Digital corporate identity</div>
                                    </div>
                                </a>
                                <a href="services#business-system" class="flex items-center gap-2.5 px-4 py-2.5 hover:bg-orange-600/90 transition">
                                    <span class="w-2 h-2 rounded-full bg-orange-500 shrink-0"></span>
                                    <div>
                                        <div class="font-bold text-white" x-text="text.s3_title ? text.s3_title[lang] : 'Business System'">Business System</div>
                                        <div class="text-[10px] text-gray-400 font-normal">Management System</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Portfolio Link -->
                    <a href="portfolio" class="px-3.5 py-1.5 text-xs font-bold rounded-full transition <?php echo $is_portfolio ? 'bg-orange-600 text-white shadow-md shadow-orange-600/30 font-black' : 'text-gray-200 hover:text-orange-400'; ?>" x-text="text.nav_portfolio[lang]">Portfolio</a>

                    <!-- Pricing Link -->
                    <a href="pricing" class="px-3.5 py-1.5 text-xs font-bold rounded-full transition <?php echo $is_pricing ? 'bg-orange-600 text-white shadow-md shadow-orange-600/30 font-black' : 'text-gray-200 hover:text-orange-400'; ?>" x-text="text.price_badge ? text.price_badge[lang] : 'Price List'">Price List</a>

                    <!-- FAQ Link -->
                    <a href="faq" class="px-3.5 py-1.5 text-xs font-bold rounded-full transition <?php echo $is_faq ? 'bg-orange-600 text-white shadow-md shadow-orange-600/30 font-black' : 'text-gray-200 hover:text-orange-400'; ?>" x-text="text.nav_faq[lang]">FAQ</a>

                </div>

                <div class="h-4 w-px bg-white/20"></div>

                <!-- Language Dropdown & WhatsApp Button -->
                <div class="flex items-center gap-3">
                    
                    <div class="relative">
                        <button @click="openLang = !openLang" class="bg-gray-700/80 text-white border border-white/20 px-3 py-1.5 rounded-full text-xs font-bold flex items-center gap-1.5 hover:bg-gray-600 transition shadow-inner">
                            <span x-text="lang"></span>
                            <svg class="w-3 h-3 text-orange-400 transform transition-transform" :class="openLang ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                        <div x-show="openLang" @click.away="openLang = false" x-transition class="absolute right-0 mt-4 w-24 bg-[#181d26]/80 border border-white/20 text-white rounded-2xl shadow-[0_20px_45px_rgba(0,0,0,0.5),inset_0_1px_1px_rgba(255,255,255,0.25)] overflow-hidden text-xs font-bold py-1.5 z-50 backdrop-blur-2xl">
                            <button @click="lang = 'ENG'; openLang = false" class="w-full text-left px-3.5 py-2 hover:bg-white/10 hover:text-orange-400 transition" :class="lang === 'ENG' ? 'text-orange-400 font-black' : 'text-gray-200'">ENG</button>
                            <button @click="lang = 'BM'; openLang = false" class="w-full text-left px-3.5 py-2 hover:bg-white/10 hover:text-orange-400 transition" :class="lang === 'BM' ? 'text-orange-400 font-black' : 'text-gray-200'">BM</button>
                        </div>
                    </div>

                    <a href="https://wa.me/601155886905" target="_blank" class="bg-orange-600 text-white font-bold text-xs px-4 py-2 rounded-full shadow-lg hover:bg-orange-500 transition transform hover:scale-105 flex items-center gap-1.5">
                        <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.991c-.001 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></path></svg>
                        <span x-text="text.nav_chat[lang]">Chat</span>
                    </a>
                </div>

            </div>

        </div>

        <!-- Mobile Drawer Menu -->
        <div x-show="mobileMenu" 
             x-transition:enter="transition ease-out duration-250"
             x-transition:enter-start="opacity-0 scale-95 -translate-y-4"
             x-transition:enter-end="opacity-100 scale-100 translate-y-0"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="opacity-100 scale-100 translate-y-0"
             x-transition:leave-end="opacity-0 scale-95 -translate-y-4"
             @click.away="mobileMenu = false"
             class="mt-4 w-full bg-[#1e2430]/80 backdrop-blur-2xl border border-white/20 rounded-3xl shadow-[0_25px_50px_rgba(0,0,0,0.5),inset_0_1px_1px_rgba(255,255,255,0.2)] p-6 flex flex-col gap-3.5 items-center md:hidden pointer-events-auto">
            
            <a href="index" class="text-sm font-bold uppercase tracking-wider px-4 py-2 rounded-full w-full text-center <?php echo $is_home ? 'bg-orange-600 text-white font-black' : 'text-white hover:text-orange-400'; ?>" x-text="text.nav_home[lang]"></a>
            <a href="index#testimonials" class="text-xs text-gray-300 hover:text-orange-400 font-semibold">↳ <span x-text="text.testi_badge ? text.testi_badge[lang] : 'Testimonials'">Testimonials</span></a>
            
            <div class="w-full flex flex-col items-center gap-1.5 bg-black/25 p-3 rounded-2xl border border-white/10">
                <span class="text-[11px] font-bold text-orange-400 uppercase tracking-widest" x-text="text.nav_services[lang]">Services</span>
                <a href="services#personal-branding" class="text-xs text-gray-300 hover:text-white" x-text="text.s1_title ? text.s1_title[lang] : 'Personal Branding'">Personal Branding</a>
                <a href="services#corporate-branding" class="text-xs text-gray-300 hover:text-white" x-text="text.s2_title ? text.s2_title[lang] : 'Corporate Branding'">Corporate Branding</a>
                <a href="services#business-system" class="text-xs text-gray-300 hover:text-white" x-text="text.s3_title ? text.s3_title[lang] : 'Business System'">Business System</a>
            </div>

            <a href="portfolio" class="text-sm font-bold uppercase tracking-wider px-4 py-2 rounded-full w-full text-center <?php echo $is_portfolio ? 'bg-orange-600 text-white font-black' : 'text-white hover:text-orange-400'; ?>" x-text="text.nav_portfolio[lang]"></a>
            <a href="pricing" class="text-sm font-bold uppercase tracking-wider px-4 py-2 rounded-full w-full text-center <?php echo $is_pricing ? 'bg-orange-600 text-white font-black' : 'text-white hover:text-orange-400'; ?>" x-text="text.price_badge ? text.price_badge[lang] : 'Price List'">Price List</a>
            <a href="faq" class="text-sm font-bold uppercase tracking-wider px-4 py-2 rounded-full w-full text-center <?php echo $is_faq ? 'bg-orange-600 text-white font-black' : 'text-white hover:text-orange-400'; ?>" x-text="text.nav_faq[lang]"></a>
            
            <div class="h-px bg-white/15 w-full my-1"></div>
            
            <div class="flex justify-center gap-3 w-full">
                 <button @click="lang = 'ENG'" :class="lang === 'ENG' ? 'bg-orange-600 text-white' : 'bg-gray-700/80 text-gray-300 border border-white/10'" class="px-5 py-2 rounded-full font-bold text-xs">ENG</button>
                 <button @click="lang = 'BM'" :class="lang === 'BM' ? 'bg-orange-600 text-white' : 'bg-gray-700/80 text-gray-300 border border-white/10'" class="px-5 py-2 rounded-full font-bold text-xs">BM</button>
            </div>

            <a href="https://wa.me/601155886905" class="w-full py-3 bg-orange-600 text-white font-bold uppercase tracking-wider text-xs flex justify-center items-center gap-2 rounded-full hover:bg-orange-500 transition shadow-lg">
                <span x-text="text.nav_chat[lang]"></span> 
            </a>
        </div>
    </header>