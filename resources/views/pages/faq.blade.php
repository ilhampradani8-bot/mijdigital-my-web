@extends('layouts.app')

@section('content')

<section class="pt-36 pb-24 bg-[#0a0a0c] text-white min-h-screen relative overflow-hidden">
    <div class="max-w-4xl mx-auto px-6 relative z-10">
        
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="text-orange-500 font-bold tracking-[0.3em] text-xs uppercase mb-3 block" x-text="text.nav_faq ? text.nav_faq[lang] : 'FAQ'"></span>
            <h1 class="font-modernica text-4xl sm:text-6xl font-black uppercase tracking-tight mb-4" x-text="text.faq_head ? text.faq_head[lang] : 'FREQUENTLY ASKED'"></h1>
            <p class="text-gray-400 text-sm" x-text="text.faq_sub ? text.faq_sub[lang] : 'Answers to your common questions.'"></p>
        </div>

        <div class="space-y-6" x-data="{ openFaq: null }">
            
            <!-- FAQ 1 -->
            <div class="bg-[#121215] border border-gray-800 rounded-2xl overflow-hidden">
                <button @click="openFaq = openFaq === 1 ? null : 1" class="w-full p-6 text-left font-bold text-lg text-white flex justify-between items-center">
                    <span x-text="text.q1 ? text.q1[lang] : 'Who are you?'"></span>
                    <span class="text-orange-500 text-2xl" x-text="openFaq === 1 ? '−' : '+'"></span>
                </button>
                <div x-show="openFaq === 1" class="p-6 pt-0 text-gray-300 text-sm leading-relaxed border-t border-gray-800/50" x-text="text.a1 ? text.a1[lang] : ''"></div>
            </div>

            <!-- FAQ 2 -->
            <div class="bg-[#121215] border border-gray-800 rounded-2xl overflow-hidden">
                <button @click="openFaq = openFaq === 2 ? null : 2" class="w-full p-6 text-left font-bold text-lg text-white flex justify-between items-center">
                    <span x-text="text.q2 ? text.q2[lang] : 'How long does it take?'"></span>
                    <span class="text-orange-500 text-2xl" x-text="openFaq === 2 ? '−' : '+'"></span>
                </button>
                <div x-show="openFaq === 2" class="p-6 pt-0 text-gray-300 text-sm leading-relaxed border-t border-gray-800/50" x-text="text.a2 ? text.a2[lang] : ''"></div>
            </div>

            <!-- FAQ 3 -->
            <div class="bg-[#121215] border border-gray-800 rounded-2xl overflow-hidden">
                <button @click="openFaq = openFaq === 3 ? null : 3" class="w-full p-6 text-left font-bold text-lg text-white flex justify-between items-center">
                    <span x-text="text.q3 ? text.q3[lang] : 'What are the payment terms?'"></span>
                    <span class="text-orange-500 text-2xl" x-text="openFaq === 3 ? '−' : '+'"></span>
                </button>
                <div x-show="openFaq === 3" class="p-6 pt-0 text-gray-300 text-sm leading-relaxed border-t border-gray-800/50" x-text="text.a3 ? text.a3[lang] : ''"></div>
            </div>

            <!-- FAQ 4 -->
            <div class="bg-[#121215] border border-gray-800 rounded-2xl overflow-hidden">
                <button @click="openFaq = openFaq === 4 ? null : 4" class="w-full p-6 text-left font-bold text-lg text-white flex justify-between items-center">
                    <span x-text="text.q4 ? text.q4[lang] : 'Is there any support/warranty?'"></span>
                    <span class="text-orange-500 text-2xl" x-text="openFaq === 4 ? '−' : '+'"></span>
                </button>
                <div x-show="openFaq === 4" class="p-6 pt-0 text-gray-300 text-sm leading-relaxed border-t border-gray-800/50" x-text="text.a4 ? text.a4[lang] : ''"></div>
            </div>

            <!-- FAQ 5 -->
            <div class="bg-[#121215] border border-gray-800 rounded-2xl overflow-hidden">
                <button @click="openFaq = openFaq === 5 ? null : 5" class="w-full p-6 text-left font-bold text-lg text-white flex justify-between items-center">
                    <span x-text="text.q5 ? text.q5[lang] : 'What Tech Stack do you use?'"></span>
                    <span class="text-orange-500 text-2xl" x-text="openFaq === 5 ? '−' : '+'"></span>
                </button>
                <div x-show="openFaq === 5" class="p-6 pt-0 text-gray-300 text-sm leading-relaxed border-t border-gray-800/50" x-text="text.a5 ? text.a5[lang] : ''"></div>
            </div>

        </div>

    </div>
</section>

@endsection
