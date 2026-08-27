<?php 
$pageTitle = 'Cookie Policy | MIJ Digital ENT'; 
include 'header.php'; 
?>

<section class="pt-48 pb-32 min-h-screen bg-gray-50 relative">
    <div class="absolute inset-0 bg-[radial-gradient(#e5e7eb_1px,transparent_1px)] [background-size:24px_24px] opacity-60 pointer-events-none"></div>
    
    <div class="max-w-4xl mx-auto px-6 relative z-10">
        <div class="text-center mb-16" data-aos="fade-up">
            <h1 class="font-modernica text-5xl md:text-7xl font-black mb-4 tracking-tighter text-black">
                <span x-show="lang === 'ENG'">COOKIE <span class="text-orange-600">POLICY</span></span>
                <span x-show="lang === 'BM'" style="display: none;">DASAR <span class="text-orange-600">KUKI</span></span>
            </h1>
        </div>

        <div class="bg-white p-10 md:p-14 rounded-[3rem] shadow-xl border border-gray-100 text-gray-600 leading-relaxed space-y-8" data-aos="fade-up" data-aos-delay="100">
            
            <div x-show="lang === 'ENG'" class="space-y-6">
                <div>
                    <h3 class="font-bold text-black text-xl mb-2">What Are Cookies?</h3>
                    <p>Cookies are small text files that are placed on your computer or mobile device by websites that you visit. They are widely used in order to make websites work more efficiently.</p>
                </div>

                <div>
                    <h3 class="font-bold text-black text-xl mb-2">How We Use Cookies</h3>
                    <p>We use cookies to understand how you use our website and to improve your experience. We do not use cookies to track your personal browsing history outside of our website.</p>
                </div>

                <div>
                    <h3 class="font-bold text-black text-xl mb-2">Your Choices</h3>
                    <p>You can choose to disable cookies through your individual browser options. However, this may affect your ability to use certain features of our website.</p>
                </div>
            </div>

            <div x-show="lang === 'BM'" style="display: none;" class="space-y-6">
                <div>
                    <h3 class="font-bold text-black text-xl mb-2">Apa Itu Kuki?</h3>
                    <p>Kuki adalah fail teks kecil yang diletakkan pada komputer atau peranti mudah alih anda oleh laman web yang anda lawati. Ia digunakan secara meluas untuk menjadikan laman web berfungsi dengan lebih cekap.</p>
                </div>

                <div>
                    <h3 class="font-bold text-black text-xl mb-2">Bagaimana Kami Menggunakan Kuki</h3>
                    <p>Kami menggunakan kuki untuk memahami cara anda menggunakan laman web kami dan untuk meningkatkan pengalaman anda. Kami tidak menggunakan kuki untuk menjejaki sejarah layaran peribadi anda di luar laman web kami.</p>
                </div>

                <div>
                    <h3 class="font-bold text-black text-xl mb-2">Pilihan Anda</h3>
                    <p>Anda boleh memilih untuk menyahaktifkan kuki melalui pilihan penyemak imbas (browser) anda. Walau bagaimanapun, ini mungkin menjejaskan keupayaan anda untuk menggunakan ciri tertentu laman web kami.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include 'footer.php'; ?>