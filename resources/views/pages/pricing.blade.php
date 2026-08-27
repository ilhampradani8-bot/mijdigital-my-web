@extends('layouts.app')

@section('content')

<section id="pricing" class="pt-36 pb-24 bg-[#0a0a0c] text-white min-h-screen relative overflow-hidden">
    
    <div class="max-w-7xl mx-auto px-6 relative z-10 text-center mb-16" data-aos="fade-up">
        <span class="text-orange-500 font-bold tracking-[0.3em] text-xs uppercase mb-3 block" x-text="text.price_badge ? text.price_badge[lang] : 'PRICING PACKAGES'"></span>
        <h1 class="font-modernica text-4xl sm:text-6xl font-black uppercase tracking-tight mb-4">
            <span x-text="text.price_head_1 ? text.price_head_1[lang] : 'YOUR WEBSITE'"></span> 
            <span class="text-orange-600" x-text="text.price_head_2 ? text.price_head_2[lang] : 'STARTS HERE.'"></span>
        </h1>
        <p class="text-gray-400 text-sm max-w-xl mx-auto" x-text="text.price_sub ? text.price_sub[lang] : 'Transparent & Flexible Plans Built for Growth.'"></p>
    </div>

    <!-- Pricing Cards Grid -->
    <div class="max-w-6xl mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-8">
        
        <!-- Personal Plan -->
        <div class="bg-[#121215] border border-gray-800 rounded-3xl p-8 flex flex-col justify-between hover:border-orange-500/50 transition duration-300 relative group" data-aos="fade-up" data-aos-delay="100">
            <div>
                <h3 class="font-modernica text-2xl font-bold text-white mb-2" x-text="text.p1_name ? text.p1_name[lang] : 'Personal Branding'"></h3>
                <p class="text-xs text-gray-400 mb-6" x-text="text.p1_desc ? text.p1_desc[lang] : 'Perfect for Agents & Experts'"></p>
                <div class="mb-6 pb-6 border-b border-gray-800">
                    <span class="text-gray-500 line-through text-sm block" x-text="text.p1_old ? text.p1_old[lang] : 'RM 2,000'"></span>
                    <span class="text-4xl font-black text-orange-500" x-text="'RM ' + (data.price_personal || '1,500')"></span>
                </div>
                <ul class="space-y-4 text-xs text-gray-300 mb-8">
                    <li class="flex items-center gap-3">✓ <span x-text="text.pb_feat_1 ? text.pb_feat_1[lang] : 'Bio & Portfolio Gallery'"></span></li>
                    <li class="flex items-center gap-3">✓ <span x-text="text.pb_feat_2 ? text.pb_feat_2[lang] : 'Research List'"></span></li>
                    <li class="flex items-center gap-3">✓ <span x-text="text.pb_feat_3 ? text.pb_feat_3[lang] : 'WhatsApp Integration'"></span></li>
                    <li class="flex items-center gap-3">✓ 1 Year Free Hosting & Maintenance</li>
                </ul>
            </div>
            <a href="https://wa.me/601110051787?text=Nak%20pakej%20Personal%20Branding" target="_blank" class="w-full py-4 bg-gray-800 hover:bg-orange-600 text-white font-bold text-xs uppercase tracking-widest text-center rounded-full transition duration-300">
                <span x-text="text.price_btn ? text.price_btn[lang] : 'Choose Package'"></span>
            </a>
        </div>

        <!-- Corporate Plan (Popular Badge) -->
        <div class="bg-gradient-to-b from-[#1c1c24] to-[#121215] border-2 border-orange-500 rounded-3xl p-8 flex flex-col justify-between shadow-2xl relative scale-105" data-aos="fade-up" data-aos-delay="200">
            <span class="absolute -top-4 left-1/2 -translate-x-1/2 px-4 py-1 bg-orange-600 text-white font-bold text-[10px] uppercase tracking-widest rounded-full shadow-lg" x-text="text.promo_tag ? text.promo_tag[lang] : 'RECOMMENDED'"></span>
            <div>
                <h3 class="font-modernica text-2xl font-bold text-white mb-2" x-text="text.p2_name ? text.p2_name[lang] : 'Corporate Branding'"></h3>
                <p class="text-xs text-gray-400 mb-6" x-text="text.p2_desc ? text.p2_desc[lang] : 'For SME & Companies'"></p>
                <div class="mb-6 pb-6 border-b border-gray-800">
                    <span class="text-gray-500 line-through text-sm block" x-text="text.p2_old ? text.p2_old[lang] : 'RM 5,000'"></span>
                    <span class="text-4xl font-black text-orange-500" x-text="'RM ' + (data.price_corporate || '3,500')"></span>
                </div>
                <ul class="space-y-4 text-xs text-gray-300 mb-8">
                    <li class="flex items-center gap-3">✓ <span x-text="text.cb_feat_1 ? text.cb_feat_1[lang] : 'Modern Company Profile'"></span></li>
                    <li class="flex items-center gap-3">✓ <span x-text="text.cb_feat_2 ? text.cb_feat_2[lang] : 'Product Showcase'"></span></li>
                    <li class="flex items-center gap-3">✓ <span x-text="text.cb_feat_3 ? text.cb_feat_3[lang] : 'Google Maps & Trust'"></span></li>
                    <li class="flex items-center gap-3">✓ Premium SEO Optimization</li>
                </ul>
            </div>
            <a href="https://wa.me/601110051787?text=Nak%20pakej%20Corporate%20Branding" target="_blank" class="w-full py-4 bg-orange-600 hover:bg-orange-700 text-white font-bold text-xs uppercase tracking-widest text-center rounded-full shadow-xl transition duration-300">
                <span x-text="text.price_btn ? text.price_btn[lang] : 'Choose Package'"></span>
            </a>
        </div>

        <!-- Custom Business System -->
        <div class="bg-[#121215] border border-gray-800 rounded-3xl p-8 flex flex-col justify-between hover:border-orange-500/50 transition duration-300 relative group" data-aos="fade-up" data-aos-delay="300">
            <div>
                <h3 class="font-modernica text-2xl font-bold text-white mb-2" x-text="text.s3_title ? text.s3_title[lang] : 'Business System'"></h3>
                <p class="text-xs text-gray-400 mb-6" x-text="text.price_lms_desc ? text.price_lms_desc[lang] : 'Custom ERP, POS & Booking Systems'"></p>
                <div class="mb-6 pb-6 border-b border-gray-800">
                    <span class="text-xs text-orange-400 font-bold block uppercase" x-text="text.price_custom ? text.price_custom[lang] : 'Custom Quote'"></span>
                    <span class="text-3xl font-black text-white" x-text="text.price_limit ? text.price_limit[lang] : 'Flexible Plans'"></span>
                </div>
                <ul class="space-y-4 text-xs text-gray-300 mb-8">
                    <li class="flex items-center gap-3">✓ <span x-text="text.lms_feat_1 ? text.lms_feat_1[lang] : 'CRM, POS, Sales & Payment'"></span></li>
                    <li class="flex items-center gap-3">✓ <span x-text="text.lms_feat_2 ? text.lms_feat_2[lang] : 'Booking & Rental'"></span></li>
                    <li class="flex items-center gap-3">✓ <span x-text="text.lms_feat_3 ? text.lms_feat_3[lang] : 'Attendance & Reports'"></span></li>
                </ul>
            </div>
            <a href="https://wa.me/601110051787?text=Nak%20bincang%20Custom%20Business%20System" target="_blank" class="w-full py-4 bg-gray-800 hover:bg-orange-600 text-white font-bold text-xs uppercase tracking-widest text-center rounded-full transition duration-300">
                <span x-text="text.btn_contact ? text.btn_contact[lang] : 'Contact Me'"></span>
            </a>
        </div>

    </div>
</section>

@endsection
