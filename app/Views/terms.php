<?php 
$pageTitle = 'Terms of Service | MIJ Digital ENT'; 
include 'header.php'; 
?>

<section class="pt-48 pb-32 min-h-screen bg-gray-50 relative">
    <div class="absolute inset-0 bg-[radial-gradient(#e5e7eb_1px,transparent_1px)] [background-size:24px_24px] opacity-60 pointer-events-none"></div>
    
    <div class="max-w-4xl mx-auto px-6 relative z-10">
        <div class="text-center mb-16" data-aos="fade-up">
            <h1 class="font-modernica text-5xl md:text-7xl font-black mb-4 tracking-tighter text-black">
                <span x-show="lang === 'ENG'">TERMS & <span class="text-orange-600">CONDITIONS</span></span>
                <span x-show="lang === 'BM'" style="display: none;">TERMA & <span class="text-orange-600">SYARAT</span></span>
            </h1>
            <p class="text-xl text-gray-500 font-medium">
                <span x-show="lang === 'ENG'">Last Updated: January 2026</span>
                <span x-show="lang === 'BM'" style="display: none;">Kemas Kini Terakhir: Januari 2026</span>
            </p>
        </div>

        <div class="bg-white p-10 md:p-14 rounded-[3rem] shadow-xl border border-gray-100 text-gray-600 leading-relaxed space-y-8" data-aos="fade-up" data-aos-delay="100">
            
            <div x-show="lang === 'ENG'" class="space-y-6">
                <div>
                    <h3 class="font-bold text-black text-xl mb-2">1. Introduction</h3>
                    <p>Welcome to MIJ Digital ENT. By accessing our website and using our services, you agree to comply with and be bound by the following terms and conditions.</p>
                </div>

                <div>
                    <h3 class="font-bold text-black text-xl mb-2">2. Services</h3>
                    <p>We provide web development, branding, and system solutions. All projects are subject to a mutual agreement on scope, timeline, and pricing before commencement.</p>
                </div>

                <div>
                    <h3 class="font-bold text-black text-xl mb-2">3. Payments</h3>
                    <p>A 50% non-refundable deposit is required to start any project. The remaining 50% is due upon project completion and before the final handover of credentials/files.</p>
                </div>

                <div>
                    <h3 class="font-bold text-black text-xl mb-2">4. Client Responsibilities</h3>
                    <p>You agree to provide all necessary assets (logos, text, images) in a timely manner. Delays in providing content may result in a delayed project timeline.</p>
                </div>

                <div>
                    <h3 class="font-bold text-black text-xl mb-2">5. Limitation of Liability</h3>
                    <p>MIJ Digital ENT shall not be liable for any indirect, incidental, or consequential damages arising out of the use or inability to use our services.</p>
                </div>
            </div>

            <div x-show="lang === 'BM'" style="display: none;" class="space-y-6">
                <div>
                    <h3 class="font-bold text-black text-xl mb-2">1. Pengenalan</h3>
                    <p>Selamat datang ke MIJ Digital ENT. Dengan mengakses laman web kami dan menggunakan perkhidmatan kami, anda bersetuju untuk mematuhi terma dan syarat berikut.</p>
                </div>

                <div>
                    <h3 class="font-bold text-black text-xl mb-2">2. Perkhidmatan</h3>
                    <p>Kami menyediakan pembangunan web, penjenamaan, dan solusi sistem. Semua projek tertakluk kepada persetujuan bersama mengenai skop, garis masa, dan harga sebelum dimulakan.</p>
                </div>

                <div>
                    <h3 class="font-bold text-black text-xl mb-2">3. Pembayaran</h3>
                    <p>Deposit 50% (tidak dikembalikan) diperlukan untuk memulakan sebarang projek. Baki 50% perlu dibayar setelah projek siap dan sebelum penyerahan akhir data/fail.</p>
                </div>

                <div>
                    <h3 class="font-bold text-black text-xl mb-2">4. Tanggungjawab Klien</h3>
                    <p>Anda bersetuju untuk memberikan semua aset yang diperlukan (logo, teks, gambar) tepat pada masanya. Kelewatan dalam memberikan konten boleh menyebabkan kelewatan garis masa projek.</p>
                </div>

                <div>
                    <h3 class="font-bold text-black text-xl mb-2">5. Had Liabiliti</h3>
                    <p>MIJ Digital ENT tidak akan bertanggungjawab ke atas sebarang kerosakan tidak langsung atau sampingan yang timbul daripada penggunaan perkhidmatan kami.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include 'footer.php'; ?>