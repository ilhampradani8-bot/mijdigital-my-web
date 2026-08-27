<?php 
$pageTitle = 'Price List | MIJ Digital ENT'; 
include 'header.php'; 
?>

<!-- Styles for Jamal Hassouni Design -->
<style>
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
</style>

<section class="pt-44 pb-32 bg-[#FFFBF5] relative overflow-hidden">
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

<?php include 'footer.php'; ?>