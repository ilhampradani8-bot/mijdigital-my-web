@extends('layouts.app')

@section('content')

<section class="pt-36 pb-24 bg-black text-white min-h-screen relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 relative z-10">
        
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="text-orange-500 font-bold tracking-[0.3em] text-xs uppercase mb-3 block" x-text="text.serv_tag ? text.serv_tag[lang] : 'MY EXPERTISE'"></span>
            <h1 class="font-modernica text-4xl sm:text-6xl font-black uppercase tracking-tight mb-4">
                DIGITAL <span class="text-orange-600">SERVICES</span>
            </h1>
            <p class="text-gray-400 text-sm max-w-xl mx-auto" x-text="text.serv_sub ? text.serv_sub[lang] : 'Specialized digital solutions designed to elevate your brand.'"></p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-[#121215] border border-gray-800 p-8 rounded-3xl hover:border-orange-500/50 transition duration-300" data-aos="fade-up" data-aos-delay="100">
                <div class="w-14 h-14 rounded-2xl bg-orange-600/20 text-orange-500 flex items-center justify-center text-2xl mb-6">🚀</div>
                <h3 class="font-modernica font-bold text-2xl text-white mb-3" x-text="text.s1_title ? text.s1_title[lang] : 'Personal Branding'"></h3>
                <p class="text-gray-400 text-xs leading-relaxed mb-6" x-text="text.s1_desc ? text.s1_desc[lang] : 'High-converting profile websites for professionals.'"></p>
                <a href="{{ route('pricing') }}" class="text-orange-500 font-bold text-xs uppercase tracking-wider hover:underline">Learn More →</a>
            </div>

            <div class="bg-[#121215] border border-gray-800 p-8 rounded-3xl hover:border-orange-500/50 transition duration-300" data-aos="fade-up" data-aos-delay="200">
                <div class="w-14 h-14 rounded-2xl bg-orange-600/20 text-orange-500 flex items-center justify-center text-2xl mb-6">🏢</div>
                <h3 class="font-modernica font-bold text-2xl text-white mb-3" x-text="text.s2_title ? text.s2_title[lang] : 'Corporate Branding'"></h3>
                <p class="text-gray-400 text-xs leading-relaxed mb-6" x-text="text.s2_desc ? text.s2_desc[lang] : 'Corporate digital identity establishment.'"></p>
                <a href="{{ route('pricing') }}" class="text-orange-500 font-bold text-xs uppercase tracking-wider hover:underline">Learn More →</a>
            </div>

            <div class="bg-[#121215] border border-gray-800 p-8 rounded-3xl hover:border-orange-500/50 transition duration-300" data-aos="fade-up" data-aos-delay="300">
                <div class="w-14 h-14 rounded-2xl bg-orange-600/20 text-orange-500 flex items-center justify-center text-2xl mb-6">⚙️</div>
                <h3 class="font-modernica font-bold text-2xl text-white mb-3" x-text="text.s3_title ? text.s3_title[lang] : 'Business System'"></h3>
                <p class="text-gray-400 text-xs leading-relaxed mb-6" x-text="text.s3_desc ? text.s3_desc[lang] : 'Management System for Rentals, Clinics, Agencies.'"></p>
                <a href="{{ route('pricing') }}" class="text-orange-500 font-bold text-xs uppercase tracking-wider hover:underline">Learn More →</a>
            </div>
        </div>

    </div>
</section>

@endsection
