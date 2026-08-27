<!-- FontAwesome Icons for Professional Footer -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

<style>
/* Professional Footer Styling */
.footer-section {
  background: #0d0d0f;
  position: relative;
  border-top: 1px solid rgba(255, 255, 255, 0.08);
}
.footer-cta {
  border-bottom: 1px solid rgba(255, 255, 255, 0.08);
}
.single-cta {
  display: flex;
  align-items: center;
  gap: 15px;
}
.single-cta i {
  color: #ea580c;
  font-size: 28px;
  flex-shrink: 0;
}
.cta-text h4 {
  color: #fff;
  font-size: 18px;
  font-weight: 700;
  margin-bottom: 2px;
}
.cta-text span {
  color: #9ca3af;
  font-size: 14px;
}
.footer-content {
  position: relative;
  z-index: 2;
}
.footer-logo {
  margin-bottom: 20px;
}
.footer-text p {
  margin-bottom: 20px;
  font-size: 14px;
  color: #9ca3af;
  line-height: 1.8;
}
.footer-social-icon span {
  color: #fff;
  display: block;
  font-size: 16px;
  font-weight: 700;
  margin-bottom: 15px;
  text-transform: uppercase;
  letter-spacing: 0.05em;
}
.footer-social-icon a {
  color: #fff;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  margin-right: 10px;
  background: #1a1a1e;
  transition: all 0.3s ease;
}
.footer-social-icon a:hover {
  transform: translateY(-3px);
  box-shadow: 0 5px 15px rgba(234, 88, 12, 0.4);
}
.instagram-bg { background: linear-gradient(45deg, #f09433, #e6683c, #dc2743, #cc2366, #bc1888) !important; }
.threads-bg { background: #000000 !important; border: 1px solid #333; }
.strava-bg { background: #FC4C02 !important; }
.web3-bg { background: #ea580c !important; }

.footer-widget-heading h3 {
  color: #fff;
  font-size: 18px;
  font-weight: 700;
  margin-bottom: 30px;
  position: relative;
}
.footer-widget-heading h3::before {
  content: "";
  position: absolute;
  left: 0;
  bottom: -10px;
  height: 2px;
  width: 45px;
  background: #ea580c;
}
.footer-widget ul {
  display: flex;
  flex-wrap: wrap;
  padding: 0;
  margin: 0;
  list-style: none;
}
.footer-widget ul li {
  width: 50%;
  margin-bottom: 12px;
}
.footer-widget ul li a {
  color: #9ca3af;
  font-size: 14px;
  transition: all 0.3s ease;
  display: inline-block;
}
.footer-widget ul li a:hover {
  color: #ea580c;
  transform: translateX(4px);
}
.subscribe-form {
  position: relative;
  overflow: hidden;
  border-radius: 9999px;
  border: 1px solid rgba(255, 255, 255, 0.15);
}
.subscribe-form input {
  width: 100%;
  padding: 14px 60px 14px 20px;
  background: #18181c;
  border: none;
  color: #fff;
  font-size: 14px;
  outline: none;
}
.subscribe-form button {
  position: absolute;
  right: 0;
  top: 0;
  bottom: 0;
  background: #ea580c;
  padding: 0 22px;
  border: none;
  color: #fff;
  cursor: pointer;
  transition: background 0.3s ease;
}
.subscribe-form button:hover {
  background: #c2410c;
}
.subscribe-form button i {
  font-size: 16px;
}
.copyright-area {
  background: #08080a;
  padding: 20px 0;
  border-top: 1px solid rgba(255, 255, 255, 0.05);
}
.copyright-text p {
  margin: 0;
  font-size: 13px;
  color: #6b7280;
}
.copyright-text p a {
  color: #ea580c;
  font-weight: 700;
}
.footer-menu li {
  display: inline-block;
  margin-left: 20px;
}
.footer-menu li a {
  font-size: 13px;
  color: #6b7280;
  transition: color 0.3s ease;
}
.footer-menu li a:hover {
  color: #ea580c;
}
</style>

<footer class="footer-section text-white pt-12">
    <div class="max-w-7xl mx-auto px-6">
        
        <!-- Top CTA Bar (Find Us, Call Us, Mail Us) -->
        <div class="footer-cta pb-8 mb-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="single-cta">
                    <i class="fas fa-map-marker-alt"></i>
                    <div class="cta-text">
                        <h4 x-text="text?.cta_find_title?.[lang] || 'Find Us'">Find Us</h4>
                        <span x-text="text?.cta_find_val?.[lang] || 'Kuala Lumpur, Malaysia'">Kuala Lumpur, Malaysia</span>
                    </div>
                </div>
                <div class="single-cta">
                    <i class="fas fa-phone"></i>
                    <div class="cta-text">
                        <h4 x-text="text?.cta_call_title?.[lang] || 'Call Us'">Call Us</h4>
                        <span>+60 11-5588 6905</span>
                    </div>
                </div>
                <div class="single-cta">
                    <i class="far fa-envelope-open"></i>
                    <div class="cta-text">
                        <h4 x-text="text?.cta_mail_title?.[lang] || 'Mail Us'">Mail Us</h4>
                        <span>admin@mijdigital.my</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Footer Content -->
        <div class="footer-content pb-12">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">
                
                <!-- Widget 1: Logo & Social -->
                <div class="lg:col-span-4">
                    <div class="footer-widget">
                        <div class="footer-logo flex items-center mb-6">
                            <a href="index" class="inline-block">
                                <img src="mij-logo.png" class="h-16 md:h-20 w-auto object-contain transition-transform duration-200 hover:scale-105" alt="MIJ Digital Logo">
                            </a>
                        </div>
                        <div class="footer-text">
                            <p x-text="text?.ft_desc?.[lang] || 'Penyedia perkhidmatan pembangunan laman web premium, jenama peribadi, sistem enterprise & automasi Web3.'">
                                Penyedia perkhidmatan pembangunan laman web premium, jenama peribadi, sistem enterprise & automasi Web3.
                            </p>
                        </div>
                        <div class="footer-social-icon">
                            <span x-text="text?.ft_follow?.[lang] || 'Follow Us'">Follow Us</span>
                            <a href="https://www.instagram.com/ikhwanjamal90?igsh=ejdmb2NvMjh2b2V1" target="_blank" class="instagram-bg" title="Instagram"><i class="fab fa-instagram"></i></a>
                            <a href="https://www.threads.com/@ikhwanjamal90?invite=0" target="_blank" class="threads-bg" title="Threads"><i class="fa-solid fa-at"></i></a>
                            <a href="https://www.strava.com/athletes/186812023" target="_blank" class="strava-bg" title="Strava"><i class="fab fa-strava"></i></a>
                            <a href="https://tradingsafe.mijdigital.my" target="_blank" class="web3-bg" title="TradingSafe Web3 Project"><i class="fas fa-chart-line"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Widget 2: Useful Links Grid -->
                <div class="lg:col-span-4">
                    <div class="footer-widget">
                        <div class="footer-widget-heading">
                            <h3 x-text="text?.ft_useful_links?.[lang] || 'Useful Links'">Useful Links</h3>
                        </div>
                        <ul>
                            <li><a href="index" x-text="text?.nav_home?.[lang] || 'Home'">Home</a></li>
                            <li><a href="index#about-me" x-text="text?.nav_about?.[lang] || 'About Us'">About Us</a></li>
                            <li><a href="services" x-text="text?.nav_services?.[lang] || 'Services'">Services</a></li>
                            <li><a href="portfolio" x-text="text?.nav_portfolio?.[lang] || 'Portfolio'">Portfolio</a></li>
                            <li><a href="faq" x-text="text?.nav_faq?.[lang] || 'FAQ'">FAQ</a></li>
                            <li><a href="https://tradingsafe.mijdigital.my" target="_blank" class="text-orange-400 font-bold">TradingSafe</a></li>
                            <li><a href="privacy" x-text="text?.ft_privacy?.[lang] || 'Privacy'">Privacy</a></li>
                            <li><a href="terms" x-text="text?.ft_terms?.[lang] || 'Terms'">Terms</a></li>
                            <li><a href="cookies" x-text="text?.ft_cookies?.[lang] || 'Cookies'">Cookies</a></li>
                            <li><a href="https://wa.me/601155886905" target="_blank" x-text="text?.nav_chat?.[lang] || 'Contact'">Contact</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Widget 3: Subscribe Form -->
                <div class="lg:col-span-4">
                    <div class="footer-widget">
                        <div class="footer-widget-heading">
                            <h3 x-text="text?.ft_subscribe_head?.[lang] || 'Subscribe'">Subscribe</h3>
                        </div>
                        <div class="footer-text mb-6">
                            <p x-text="text?.ft_subscribe_sub?.[lang] || 'Jangan terlepas info tawaran dan kemaskini projek terbaru kami, sila masukkan e-mel anda.'">
                                Jangan terlepas info tawaran dan kemaskini projek terbaru kami, sila masukkan e-mel anda.
                            </p>
                        </div>
                        <div class="subscribe-form">
                            <form action="https://wa.me/601155886905" method="get" target="_blank">
                                <input type="email" placeholder="Email Address" required>
                                <button type="submit" aria-label="Subscribe"><i class="fab fa-telegram-plane"></i></button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <!-- Copyright Bar -->
    <div class="copyright-area">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                <div class="copyright-text text-center md:text-left">
                    <p>Copyright &copy; 2026, All Rights Reserved <a href="index">MIJ Digital ENT.</a></p>
                </div>
                <div class="footer-menu flex items-center gap-4">
                    <ul>
                        <li><a href="index" x-text="text?.nav_home?.[lang] || 'Home'">Home</a></li>
                        <li><a href="terms" x-text="text?.ft_terms?.[lang] || 'Terms'">Terms</a></li>
                        <li><a href="privacy" x-text="text?.ft_privacy?.[lang] || 'Privacy'">Privacy</a></li>
                        <li><a href="cookies" x-text="text?.ft_cookies?.[lang] || 'Cookies'">Cookies</a></li>
                    </ul>
                    <a href="#" @click.prevent="window.scrollTo({top: 0, behavior: 'smooth'})" class="text-xs font-bold text-orange-500 hover:text-orange-400 transition ml-4 uppercase tracking-wider">Back to Top ↑</a>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<?php
$lang_json_str = file_exists(__DIR__ . '/lang.json') ? file_get_contents(__DIR__ . '/lang.json') : '{}';
$data_json_str = file_exists(__DIR__ . '/data.json') ? file_get_contents(__DIR__ . '/data.json') : '{}';
?>

<script>
    AOS.init();
    
    // Init Swiper (Hanya jika elemen ada)
    if (document.querySelector('.testimonialSwiper')) {
        var swiperTesti = new Swiper(".testimonialSwiper", {
            slidesPerView: 1, spaceBetween: 30, loop: true,
            autoplay: { delay: 3500 },
            pagination: { el: ".swiper-pagination", clickable: true },
            breakpoints: {
                768: { slidesPerView: 2, spaceBetween: 30 },
                1024: { slidesPerView: 3, spaceBetween: 40 },
            },
        });
    }

    if (document.querySelector('.mySwiper')) {
        var swiper = new Swiper(".mySwiper", {
            effect: "coverflow", 
            grabCursor: true, 
            centeredSlides: true,
            loop: true,
            loopedSlides: 6,
            loopAdditionalSlides: 4,
            slidesPerView: "auto",
            spaceBetween: 30,
            speed: 600,
            coverflowEffect: { rotate: 15, stretch: 0, depth: 120, modifier: 1, slideShadows: false },
            pagination: { el: ".swiper-pagination", clickable: true },
            autoplay: { delay: 2200, disableOnInteraction: false },
        });
    }

    document.addEventListener('alpine:init', () => {
        const initialText = <?php echo $lang_json_str ?: '{}'; ?>;
        const initialData = <?php echo $data_json_str ?: '{}'; ?>;

        Alpine.data('contentData', () => ({
            lang: 'ENG',
            text: Object.assign({
                promo_text: { ENG: '', BM: '' },
                p1_new: { ENG: '1500', BM: '1500' },
                p2_new: { ENG: '3500', BM: '3500' },
                nav_home: { ENG: 'Home', BM: 'Utama' },
                nav_about: { ENG: 'About Me', BM: 'Tentang Saya' },
                nav_services: { ENG: 'Services', BM: 'Perkhidmatan' },
                nav_portfolio: { ENG: 'Portfolio', BM: 'Portfolio' },
                nav_faq: { ENG: 'FAQ', BM: 'Soalan Lazim' },
                nav_chat: { ENG: 'Chat With Me', BM: 'Sembang WhatsApp' },
                ft_privacy: { ENG: 'Privacy Policy', BM: 'Dasar Privasi' },
                ft_terms: { ENG: 'Terms of Service', BM: 'Syarat Perkhidmatan' },
                ft_cookies: { ENG: 'Cookie Policy', BM: 'Dasar Kuki' }
            }, initialText),
            dynamic: initialData,

            init() {
                if (this.dynamic && this.dynamic.promo_text_eng && this.text.promo_text) {
                    this.text.promo_text.ENG = this.dynamic.promo_text_eng;
                }
                if (this.dynamic && this.dynamic.promo_text_bm && this.text.promo_text) {
                    this.text.promo_text.BM = this.dynamic.promo_text_bm;
                }
            }
        }));
    });
</script>
</body>
</html>l>