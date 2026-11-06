<?php 
// Metadata SEO Khusus Halaman Portfolio
$pageTitle = 'Portfolio Projek Website & Sistem Perniagaan | MIJ Digital ENT'; 
$pageDescription = 'Koleksi portfolio dan hasil kerja pembinaan laman web profesional oleh MIJ Digital ENT: Abmalaya, Sistem TradingSafe, On-chain Web3 dApp, E-Commerce, dan Personal Branding di Malaysia.';
$pageKeywords = 'portfolio mij digital, hasil kerja web developer, portfolio projek website malaysia, bina website malaysia, web design kuala lumpur, abmalaya, tradingsafe, web3 portfolio';

include 'header.php'; 

// Server-Side Rendering (SSR) untuk Googlebot & Mesin Pencari
$dataFile = __DIR__ . '/data.json';
$portfolioItems = [];
if (file_exists($dataFile)) {
    $dataArr = json_decode(file_get_contents($dataFile), true);
    $portfolioItems = $dataArr['portfolio_items'] ?? [];
}
?>

<!-- Schema.org Structured Data (JSON-LD) for Portfolio Projects -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ItemList",
  "name": "Portfolio Projek MIJ Digital ENT",
  "description": "Senarai portfolio dan hasil kerja pembinaan laman web & sistem oleh MIJ Digital ENT.",
  "itemListElement": [
    <?php 
    $schemaItems = [];
    foreach ($portfolioItems as $idx => $it) {
        $schemaItems[] = json_encode([
            "@type" => "ListItem",
            "position" => $idx + 1,
            "item" => [
                "@type" => "CreativeWork",
                "name" => $it['name'] ?? '',
                "genre" => $it['role'] ?? '',
                "url" => $it['link'] ?? ''
            ]
        ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    }
    echo implode(",\n    ", $schemaItems);
    ?>
  ]
}
</script>

<section class="pt-64 pb-20 px-6 text-center relative z-10">
    <h1 class="font-modernica text-6xl md:text-9xl font-black mb-4 text-black leading-none">
        <span x-html="text.port_title[lang]">KARYA <span class="text-orange-600">TERPILIH</span></span>
    </h1>
    <p class="text-gray-900 font-bold tracking-widest uppercase text-sm md:text-base max-w-2xl mx-auto mt-4" x-text="text.port_sub[lang]">
        Hasil Nyata untuk Klien Nyata — Rekabentuk Web Berprestasi Tinggi
    </p>
</section>

<section class="max-w-7xl mx-auto px-6 pb-32">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-12">
        
        <?php if (!empty($portfolioItems)): ?>
            <?php foreach ($portfolioItems as $index => $item): 
                $itemName = htmlspecialchars($item['name'] ?? 'Project');
                $itemRole = htmlspecialchars($item['role'] ?? 'Client Project');
                $itemLink = htmlspecialchars($item['link'] ?? '#');
                $itemImg = !empty($item['images'][0]) ? htmlspecialchars($item['images'][0]) : '';
            ?>
            <a href="<?= $itemLink ?>" target="_blank" rel="noopener noreferrer" class="group relative block bg-white border-2 border-gray-200 hover:border-black p-4 sm:p-5 transition-all duration-300 shadow-sm hover:shadow-2xl" data-aos="fade-up" data-aos-delay="<?= ($index % 4) * 100 ?>">
                
                <!-- Kotak Tajam (Sharp Rectangle) 16:9 agar gambar website utuh dan tidak terpotong sudutnya -->
                <div class="aspect-video w-full bg-gray-100 overflow-hidden relative mb-5 border border-gray-300">
                    
                    <?php if (!empty($itemImg)): ?>
                        <img src="<?= $itemImg ?>" class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500" alt="Portfolio <?= $itemName ?> - <?= $itemRole ?>" loading="lazy">
                    <?php else: ?>
                        <div class="absolute inset-0 flex items-center justify-center bg-gray-50">
                            <svg class="w-16 h-16 text-gray-300 group-hover:text-orange-600 transition duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        </div>
                    <?php endif; ?>
                    
                    <div class="absolute inset-0 bg-black/5 group-hover:bg-transparent transition"></div>
                    
                    <!-- Badge Kotak Tajam -->
                    <div class="absolute bottom-4 right-4 bg-black text-white px-4 py-2 text-xs font-black uppercase tracking-widest opacity-0 group-hover:opacity-100 transition transform translate-y-1 group-hover:translate-y-0 shadow-lg">
                        Visit Site ↗
                    </div>
                </div>
                
                <!-- Detail Card Kotak Tajam -->
                <div class="flex justify-between items-end px-1 pt-1">
                    <div class="pr-4">
                        <span class="text-orange-600 font-bold tracking-widest text-xs uppercase mb-1.5 block"><?= $itemRole ?></span>
                        <h2 class="text-2xl md:text-3xl font-display font-black leading-tight mb-1 group-hover:text-orange-600 transition text-black"><?= $itemName ?></h2>
                        <p class="text-gray-500 font-medium text-sm md:text-base"><?= $itemRole ?></p>
                    </div>
                    
                    <!-- Tombol Arrow Kotak Tajam (Sharp Button) -->
                    <div class="w-12 h-12 border-2 border-black flex items-center justify-center shrink-0 group-hover:bg-black group-hover:text-white transition shadow-sm">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </div>
                </div>
            </a>
            <?php endforeach; ?>
        <?php else: ?>
            <div class="col-span-full py-20 text-center bg-gray-50 border-2 border-dashed border-gray-300">
                <svg class="w-16 h-16 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path></svg>
                <p class="text-gray-500 font-bold text-lg">Portfolio list is empty.</p>
                <p class="text-sm text-orange-600 mt-2">Please add projects via Admin Panel.</p>
            </div>
        <?php endif; ?>

    </div>
</section>

<?php include 'footer.php'; ?>
