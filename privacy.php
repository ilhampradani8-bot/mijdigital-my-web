<?php 
$pageTitle = 'Privacy Policy | MIJ Digital ENT'; 
include 'header.php'; 
?>

<section class="pt-48 pb-32 min-h-screen bg-gray-50 relative">
    <div class="absolute inset-0 bg-[radial-gradient(#e5e7eb_1px,transparent_1px)] [background-size:24px_24px] opacity-60 pointer-events-none"></div>
    
    <div class="max-w-4xl mx-auto px-6 relative z-10">
        <div class="text-center mb-16" data-aos="fade-up">
            <h1 class="font-modernica text-5xl md:text-7xl font-black mb-4 tracking-tighter text-black">
                <span x-show="lang === 'ENG'">PRIVACY <span class="text-orange-600">POLICY</span></span>
                <span x-show="lang === 'BM'" style="display: none;">DASAR <span class="text-orange-600">PRIVASI</span></span>
            </h1>
            <p class="text-xl text-gray-500 font-medium">
                <span x-show="lang === 'ENG'">Your Data is Safe with Us.</span>
                <span x-show="lang === 'BM'" style="display: none;">Data Anda Selamat Bersama Kami.</span>
            </p>
        </div>

        <div class="bg-white p-10 md:p-14 rounded-[3rem] shadow-xl border border-gray-100 text-gray-600 leading-relaxed space-y-8" data-aos="fade-up" data-aos-delay="100">
            
            <div x-show="lang === 'ENG'" class="space-y-6">
                <p>Your privacy is important to us. It is MIJ Digital ENT's policy to respect your privacy regarding any information we may collect from you across our website.</p>
                
                <div>
                    <h3 class="font-bold text-black text-xl mb-2">1. Information We Collect</h3>
                    <p>We may collect personal information such as your name, email address, phone number, and project details only when you voluntarily provide them via our contact forms or WhatsApp link.</p>
                </div>

                <div>
                    <h3 class="font-bold text-black text-xl mb-2">2. How We Use Your Information</h3>
                    <p>We use the information solely to communicate with you regarding your project, provide quotes, and deliver our services. We do not sell or share your data with third parties.</p>
                </div>

                <div>
                    <h3 class="font-bold text-black text-xl mb-2">3. Security</h3>
                    <p>We implement security measures to maintain the safety of your personal information. However, no method of transmission over the Internet is 100% secure.</p>
                </div>
            </div>

            <div x-show="lang === 'BM'" style="display: none;" class="space-y-6">
                <p>Privasi anda penting bagi kami. Adalah menjadi dasar MIJ Digital ENT untuk menghormati privasi anda mengenai sebarang maklumat yang mungkin kami kumpulkan.</p>
                
                <div>
                    <h3 class="font-bold text-black text-xl mb-2">1. Maklumat Yang Kami Kumpul</h3>
                    <p>Kami mungkin mengumpul maklumat peribadi seperti nama, alamat e-mel, nombor telefon, dan butiran projek hanya apabila anda memberikannya secara sukarela melalui borang atau pautan WhatsApp.</p>
                </div>

                <div>
                    <h3 class="font-bold text-black text-xl mb-2">2. Cara Kami Menggunakan Maklumat</h3>
                    <p>Kami menggunakan maklumat tersebut semata-mata untuk berkomunikasi dengan anda mengenai projek, memberikan sebut harga, dan menyampaikan perkhidmatan. Kami tidak menjual data anda kepada pihak ketiga.</p>
                </div>

                <div>
                    <h3 class="font-bold text-black text-xl mb-2">3. Keselamatan</h3>
                    <p>Kami melaksanakan langkah keselamatan untuk menjaga keselamatan maklumat peribadi anda. Walau bagaimanapun, tiada kaedah penghantaran melalui Internet yang 100% selamat.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include 'footer.php'; ?>