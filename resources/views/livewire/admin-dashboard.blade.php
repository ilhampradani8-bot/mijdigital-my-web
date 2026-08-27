<div class="bg-gray-50 text-gray-800 font-sans min-h-screen">

    <!-- Auth Modal if not authenticated -->
    @if(!$isAuthenticated)
        <div class="fixed inset-0 z-50 flex items-center justify-center bg-black/80 backdrop-blur-md p-6">
            <div class="bg-white rounded-3xl p-8 max-w-md w-full shadow-2xl border border-gray-100 text-center">
                <div class="w-16 h-16 bg-orange-100 text-orange-600 rounded-2xl flex items-center justify-center text-2xl mx-auto mb-4 font-black">
                    🔒
                </div>
                <h2 class="text-2xl font-black text-gray-900 mb-2">Admin Security Check</h2>
                <p class="text-xs text-gray-500 mb-6">Enter admin password to access dashboard management.</p>
                
                @if($flashMessage)
                    <div class="mb-4 p-3 rounded-xl text-xs font-bold {{ $flashType === 'success' ? 'bg-emerald-100 text-emerald-800' : 'bg-rose-100 text-rose-800' }}">
                        {{ $flashMessage }}
                    </div>
                @endif

                <form wire:submit.prevent="login" class="space-y-4">
                    <input type="password" wire:model="password" placeholder="Enter Password" class="w-full px-5 py-3 rounded-xl border border-gray-300 focus:outline-none focus:border-orange-500 font-bold text-center">
                    <button type="submit" class="w-full py-3 bg-orange-600 hover:bg-orange-700 text-white font-bold text-xs uppercase tracking-widest rounded-xl transition shadow-lg">
                        Unlock Dashboard
                    </button>
                </form>
            </div>
        </div>
    @else

        <div class="flex h-screen overflow-hidden">
            
            <!-- Sidebar Navigation -->
            <aside class="w-64 bg-black text-white flex flex-col justify-between shrink-0">
                <div>
                    <div class="h-20 flex items-center px-8 border-b border-gray-800">
                        <span class="font-modernica font-black text-2xl tracking-tight">MIJ<span class="text-orange-600">.</span>ADMIN</span>
                    </div>
                    <nav class="p-6 space-y-2 font-bold text-xs uppercase tracking-wider">
                        <button wire:click="$set('activeTab', 'dashboard')" class="w-full text-left px-4 py-3 rounded-xl flex items-center gap-3 transition {{ $activeTab === 'dashboard' ? 'bg-orange-600 text-white' : 'text-gray-400 hover:text-white hover:bg-gray-900' }}">
                            📊 Dashboard
                        </button>
                        <button wire:click="$set('activeTab', 'portfolio')" class="w-full text-left px-4 py-3 rounded-xl flex items-center gap-3 transition {{ $activeTab === 'portfolio' ? 'bg-orange-600 text-white' : 'text-gray-400 hover:text-white hover:bg-gray-900' }}">
                            📂 Portfolio
                        </button>
                        <button wire:click="$set('activeTab', 'settings')" class="w-full text-left px-4 py-3 rounded-xl flex items-center gap-3 transition {{ $activeTab === 'settings' ? 'bg-orange-600 text-white' : 'text-gray-400 hover:text-white hover:bg-gray-900' }}">
                            ⚙️ Settings
                        </button>
                    </nav>
                </div>
                <div class="p-6 border-t border-gray-800">
                    <a href="{{ route('home') }}" class="text-xs text-gray-500 hover:text-white flex items-center gap-2">
                        ← Back to Website
                    </a>
                </div>
            </aside>

            <!-- Main Content Area -->
            <main class="flex-1 overflow-y-auto p-8 lg:p-12 bg-gray-50">
                
                @if($flashMessage)
                    <div class="mb-6 p-4 rounded-2xl text-sm font-bold shadow-md {{ $flashType === 'success' ? 'bg-emerald-600 text-white' : 'bg-rose-600 text-white' }}">
                        {{ $flashMessage }}
                    </div>
                @endif

                <!-- TAB 1: DASHBOARD -->
                @if($activeTab === 'dashboard')
                    <div>
                        <h1 class="text-3xl font-black text-gray-900 mb-8">👋 Welcome Back Admin!</h1>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            <div class="bg-white p-8 rounded-3xl border border-gray-100 shadow-xl">
                                <span class="text-xs font-bold text-gray-400 uppercase tracking-widest">Total Projects</span>
                                <p class="text-5xl font-black text-orange-600 mt-2">{{ count($portfolio_items) }}</p>
                            </div>
                            <div class="bg-white p-8 rounded-3xl border border-gray-100 shadow-xl">
                                <span class="text-xs font-bold text-gray-400 uppercase tracking-widest">Framework</span>
                                <p class="text-2xl font-black text-gray-900 mt-2">Laravel 11 + Livewire 3</p>
                            </div>
                            <div class="bg-white p-8 rounded-3xl border border-gray-100 shadow-xl">
                                <span class="text-xs font-bold text-gray-400 uppercase tracking-widest">Status</span>
                                <p class="text-2xl font-black text-emerald-600 mt-2">● Active & Secure</p>
                            </div>
                        </div>
                    </div>
                @endif

                <!-- TAB 2: PORTFOLIO MANAGEMENT -->
                @if($activeTab === 'portfolio')
                    <div>
                        <div class="flex justify-between items-center mb-8">
                            <h1 class="text-3xl font-black text-gray-900">📂 Portfolio Management</h1>
                            <button wire:click="saveSettings" class="px-6 py-3 bg-orange-600 hover:bg-orange-700 text-white font-bold text-xs uppercase tracking-widest rounded-full shadow-lg transition">
                                💾 Save Changes
                            </button>
                        </div>

                        <!-- Add New Portfolio Item Card -->
                        <div class="bg-white p-8 rounded-3xl shadow-xl border border-gray-100 mb-8">
                            <h3 class="font-bold text-lg text-gray-900 mb-4">➕ Add New Project</h3>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                                <div>
                                    <label class="text-xs font-bold text-gray-500 uppercase block mb-1">Project Name</label>
                                    <input type="text" wire:model="new_name" placeholder="e.g. Trading Automation" class="w-full border p-3 rounded-xl text-sm">
                                </div>
                                <div>
                                    <label class="text-xs font-bold text-gray-500 uppercase block mb-1">Category / Role</label>
                                    <input type="text" wire:model="new_role" placeholder="e.g. Web3 / Trading" class="w-full border p-3 rounded-xl text-sm">
                                </div>
                                <div>
                                    <label class="text-xs font-bold text-gray-500 uppercase block mb-1">Website URL</label>
                                    <input type="text" wire:model="new_link" placeholder="https://..." class="w-full border p-3 rounded-xl text-sm">
                                </div>
                            </div>
                            <div class="mb-4">
                                <label class="text-xs font-bold text-gray-500 uppercase block mb-1">Project Screenshot Image</label>
                                <input type="file" wire:model="new_image" class="w-full border p-2 rounded-xl text-xs">
                            </div>
                            <button wire:click="addPortfolioItem" class="px-6 py-3 bg-black hover:bg-gray-800 text-white font-bold text-xs uppercase tracking-widest rounded-xl transition">
                                Add To Portfolio
                            </button>
                        </div>

                        <!-- Existing Portfolio List -->
                        <div class="space-y-6">
                            @foreach($portfolio_items as $index => $item)
                                <div class="bg-white p-6 rounded-3xl shadow-md border border-gray-100 flex flex-col md:flex-row gap-6 items-center justify-between">
                                    <div class="flex items-center gap-4">
                                        <img src="{{ asset($item['images'][0] ?? 'hero.jpg') }}" class="w-20 h-20 object-cover rounded-2xl border border-gray-200">
                                        <div>
                                            <span class="text-[10px] font-bold text-orange-600 uppercase tracking-widest">{{ $item['role'] ?? 'Web' }}</span>
                                            <h4 class="font-black text-lg text-gray-900">{{ $item['name'] ?? '' }}</h4>
                                            <a href="{{ $item['link'] ?? '#' }}" target="_blank" class="text-xs text-gray-500 hover:text-orange-600 underline">{{ $item['link'] ?? '' }}</a>
                                        </div>
                                    </div>
                                    <button wire:click="removePortfolioItem({{ $index }})" class="px-4 py-2 bg-rose-100 hover:bg-rose-600 hover:text-white text-rose-700 font-bold text-xs rounded-xl transition">
                                        Delete Project
                                    </button>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif

                <!-- TAB 3: SETTINGS -->
                @if($activeTab === 'settings')
                    <div>
                        <div class="flex justify-between items-center mb-8">
                            <h1 class="text-3xl font-black text-gray-900">⚙️ Website Settings</h1>
                            <button wire:click="saveSettings" class="px-6 py-3 bg-orange-600 hover:bg-orange-700 text-white font-bold text-xs uppercase tracking-widest rounded-full shadow-lg transition">
                                💾 Save All Settings
                            </button>
                        </div>

                        <!-- Banner Promo Text -->
                        <div class="bg-white p-8 rounded-3xl shadow-xl border border-gray-100 mb-8 space-y-4">
                            <h3 class="font-bold text-lg text-gray-900">📢 Running Banner Text</h3>
                            <div>
                                <label class="text-xs font-bold text-gray-500 uppercase block mb-1">English Promo Banner</label>
                                <input type="text" wire:model="promo_text_eng" class="w-full border p-3 rounded-xl text-sm" placeholder="Custom text for ENG mode">
                            </div>
                            <div>
                                <label class="text-xs font-bold text-gray-500 uppercase block mb-1">Bahasa Melayu Promo Banner</label>
                                <input type="text" wire:model="promo_text_bm" class="w-full border p-3 rounded-xl text-sm" placeholder="Teks promo untuk BM mode">
                            </div>
                        </div>

                        <!-- Package Pricing Settings -->
                        <div class="bg-white p-8 rounded-3xl shadow-xl border border-gray-100 space-y-4">
                            <h3 class="font-bold text-lg text-gray-900">💰 Package Pricing</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="text-xs font-bold text-gray-500 uppercase block mb-1">Personal Plan Price (RM)</label>
                                    <input type="text" wire:model="price_personal" class="w-full border p-3 rounded-xl text-sm">
                                </div>
                                <div>
                                    <label class="text-xs font-bold text-gray-500 uppercase block mb-1">Corporate Plan Price (RM)</label>
                                    <input type="text" wire:model="price_corporate" class="w-full border p-3 rounded-xl text-sm">
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

            </main>
        </div>
    @endif
</div>
