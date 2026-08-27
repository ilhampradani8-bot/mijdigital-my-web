<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MIJ Admin Dashboard</title>
    <link rel="icon" type="image/png" href="favicon.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Outfit', sans-serif; }
        [x-cloak] { display: none !important; }
        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: #f1f1f1; }
        ::-webkit-scrollbar-thumb { background: #ea580c; border-radius: 10px; }
    </style>
</head>
<body class="bg-gray-50 text-gray-800" x-data="adminPanel">

    <div class="flex h-screen overflow-hidden">
        <aside class="fixed inset-y-0 left-0 z-50 w-64 bg-black text-white transform transition-transform duration-300 lg:static lg:translate-x-0 flex flex-col"
               :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'">
            <div class="h-20 flex items-center justify-center border-b border-gray-800">
                <h1 class="text-2xl font-black tracking-tighter">MIJ<span class="text-orange-600">.</span>ADMIN</h1>
            </div>
            <nav class="flex-1 px-4 py-6 space-y-2 overflow-y-auto">
                <a href="#" @click.prevent="activeTab = 'dashboard'" :class="activeTab === 'dashboard' ? 'bg-orange-600 text-white' : 'text-gray-400 hover:bg-gray-900 hover:text-white'" class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all font-bold text-sm uppercase">Dashboard</a>
                <a href="#" @click.prevent="activeTab = 'portfolio'" :class="activeTab === 'portfolio' ? 'bg-orange-600 text-white' : 'text-gray-400 hover:bg-gray-900 hover:text-white'" class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all font-bold text-sm uppercase">Portfolio</a>
                <a href="#" @click.prevent="activeTab = 'settings'" :class="activeTab === 'settings' ? 'bg-orange-600 text-white' : 'text-gray-400 hover:bg-gray-900 hover:text-white'" class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all font-bold text-sm uppercase">Settings</a>
            </nav>
        </aside>

        <div class="flex-1 flex flex-col overflow-hidden relative">
            <header class="h-16 bg-white border-b border-gray-200 flex items-center justify-between px-6 lg:hidden">
                <button @click="sidebarOpen = !sidebarOpen" class="text-gray-600 focus:outline-none">☰</button>
                <span class="font-black text-xl">MIJ DIGITAL</span>
            </header>

            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-50 p-6 lg:p-10">
                
                <div x-show="activeTab === 'dashboard'">
                    <h2 class="text-3xl font-black text-gray-900 mb-6">👋 Welcome Back!</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="bg-white p-6 rounded-3xl border border-gray-100 shadow-lg">
                            <h3 class="text-gray-400 font-bold text-xs uppercase">Projects</h3>
                            <p class="text-4xl font-black text-gray-900" x-text="data.portfolio_items.length"></p>
                        </div>
                    </div>
                </div>

                <div x-show="activeTab === 'settings'">
                    <h2 class="text-3xl font-black text-gray-900 mb-6">⚙️ Settings</h2>
                    <div class="bg-white p-8 rounded-[2rem] shadow-lg mb-8">
                        <h3 class="font-bold text-lg mb-4">Running Text</h3>
                        <input x-model="data.promo_text_eng" class="w-full border p-3 rounded-xl mb-4" placeholder="Promo Text (ENG)">
                        <input x-model="data.promo_text_bm" class="w-full border p-3 rounded-xl" placeholder="Promo Text (BM)">
                    </div>
                    <div class="bg-white p-8 rounded-[2rem] shadow-lg">
                        <h3 class="font-bold text-lg mb-4">Pricing</h3>
                        <div class="flex gap-4 mb-4">
                            <input x-model="data.price_personal" class="w-full border p-3 rounded-xl" placeholder="Personal Price">
                            <input x-model="data.price_personal_old" class="w-full border p-3 rounded-xl" placeholder="Personal Old Price">
                        </div>
                        <div class="flex gap-4">
                            <input x-model="data.price_corporate" class="w-full border p-3 rounded-xl" placeholder="Corporate Price">
                            <input x-model="data.price_corporate_old" class="w-full border p-3 rounded-xl" placeholder="Corporate Old Price">
                        </div>
                    </div>
                </div>

                <div x-show="activeTab === 'portfolio'">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-3xl font-black text-gray-900">📂 Portfolio</h2>
                        <button @click="addPorto()" class="bg-black text-white px-6 py-3 rounded-full font-bold text-sm">+ New Project</button>
                    </div>
                    <div class="space-y-6">
                        <template x-for="(item, index) in data.portfolio_items" :key="index">
                            <div class="bg-white p-6 rounded-[2rem] shadow-lg border border-gray-100">
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                                    <input x-model="item.name" class="border p-2 rounded-lg font-bold" placeholder="Client Name">
                                    <input x-model="item.role" class="border p-2 rounded-lg" placeholder="Role">
                                    <input x-model="item.link" class="border p-2 rounded-lg text-blue-600" placeholder="Link URL">
                                </div>
                                <div class="flex flex-wrap gap-4">
                                    <template x-for="(img, imgIndex) in item.images" :key="imgIndex">
                                        <div class="relative w-24 h-24 group"><img :src="img" class="w-full h-full object-cover rounded-xl"><button @click="removeImage(index, imgIndex)" class="absolute top-0 right-0 bg-red-600 text-white p-1 rounded-full text-xs">x</button></div>
                                    </template>
                                    <label class="w-24 h-24 border-2 border-dashed flex items-center justify-center rounded-xl cursor-pointer hover:bg-gray-50">
                                        <span class="text-xs font-bold text-gray-400">+ FOTO</span>
                                        <input type="file" class="hidden" multiple @change="uploadImage($event, index)">
                                    </label>
                                </div>
                                <button @click="removePorto(index)" class="text-red-500 text-xs font-bold mt-4 hover:underline">DELETE PROJECT</button>
                            </div>
                        </template>
                    </div>
                </div>

            </main>

            <div class="fixed bottom-6 right-6 z-50">
                <div class="bg-black text-white p-2 pl-4 rounded-full shadow-2xl flex items-center gap-3">
                    <input type="password" x-model="password" class="bg-transparent text-white text-sm outline-none w-32" placeholder="Enter Password">
                    <button @click="saveData()" class="bg-orange-600 text-white font-bold text-xs uppercase px-6 py-3 rounded-full hover:bg-white hover:text-orange-600 transition">
                        <span x-text="status"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('adminPanel', () => ({
                sidebarOpen: false, activeTab: 'dashboard', status: 'SAVE CHANGES', password: '', uploadingIndex: null,
                data: { promo_text_eng: "", promo_text_bm: "", price_personal: "", price_corporate: "", portfolio_items: [] },
                
                init() {
                    fetch('data.json?v=' + new Date().getTime()).then(r => r.json()).then(json => {
                        if(json.portfolio_items) json.portfolio_items.forEach(i => { if(!i.images) i.images = []; });
                        this.data = { ...this.data, ...json };
                    });
                },
                addPorto() { this.data.portfolio_items.unshift({ name: "New Project", role: "Category", link: "#", images: [] }); this.activeTab = 'portfolio'; },
                removePorto(idx) { if(confirm("Hapus?")) this.data.portfolio_items.splice(idx, 1); },
                removeImage(pIdx, iIdx) { this.data.portfolio_items[pIdx].images.splice(iIdx, 1); },
                
                uploadImage(e, idx) {
                    const files = e.target.files; if(!files.length) return;
                    Array.from(files).forEach(file => {
                        const fd = new FormData(); fd.append('file', file);
                        fetch('upload.php', { method: 'POST', body: fd }).then(r => r.json()).then(res => {
                            if(res.status === 'success') {
                                if(!this.data.portfolio_items[idx].images) this.data.portfolio_items[idx].images = [];
                                this.data.portfolio_items[idx].images.push(res.url);
                            }
                        });
                    });
                },
                saveData() {
                    this.status = 'SAVING...';
                    fetch('save.php', { method: 'POST', headers: {'Content-Type': 'application/json'}, body: JSON.stringify({ password: this.password, content: this.data }) })
                    .then(r => r.json()).then(r => { alert(r.message); this.status = 'SAVE CHANGES'; });
                }
            }))
        })
    </script>
</body>
</html>