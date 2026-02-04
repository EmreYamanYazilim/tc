<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TC Emlak Platformu</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4">

            <div class="flex justify-between items-end mb-10">
                <div>
                    <h2 class="text-3xl font-bold text-gray-900">Öne Çıkan İlanlar</h2>
                    <p class="text-gray-500 mt-2">Edirne bölgesindeki en popüler fırsatlar.</p>
                </div>
                <a href="#" class="text-blue-600 font-semibold hover:text-blue-700 flex items-center gap-1">
                    Tümünü Gör <span>&rarr;</span>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                <div class="group bg-white border border-gray-100 rounded-3xl overflow-hidden hover:shadow-2xl hover:shadow-blue-900/10 transition-all duration-300 cursor-pointer">
                    <div class="relative h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1600596542815-e328701102b9?auto=format&fit=crop&w=800&q=80"
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" alt="Ev">
                        <div class="absolute top-4 left-4 bg-blue-600 text-white text-xs font-bold px-3 py-1.5 rounded-full uppercase tracking-wider">
                            Satılık
                        </div>
                        <div class="absolute bottom-4 right-4 bg-black/50 backdrop-blur text-white text-xs font-bold px-3 py-1.5 rounded-lg flex items-center gap-1">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/></svg>
                            Kaleiçi
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 group-hover:text-blue-600 transition">Tarihi Konak</h3>
                                <p class="text-gray-500 text-sm">Merkez, Edirne</p>
                            </div>
                            <p class="text-2xl font-bold text-blue-600">₺8.5M</p>
                        </div>
                        <div class="flex items-center gap-6 text-gray-500 text-sm border-t border-gray-100 pt-4">
                            <div class="flex items-center gap-2">
                                <span>🛏️ 4 Oda</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span>🛁 2 Banyo</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span>📐 240 m²</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="group bg-white border border-gray-100 rounded-3xl overflow-hidden hover:shadow-2xl hover:shadow-blue-900/10 transition-all duration-300 cursor-pointer">
                    <div class="relative h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?auto=format&fit=crop&w=800&q=80"
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" alt="Ev">
                        <div class="absolute top-4 left-4 bg-green-500 text-white text-xs font-bold px-3 py-1.5 rounded-full uppercase tracking-wider">
                            Fırsat
                        </div>
                        <div class="absolute bottom-4 right-4 bg-black/50 backdrop-blur text-white text-xs font-bold px-3 py-1.5 rounded-lg flex items-center gap-1">
                             <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/></svg>
                            Gölet
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 group-hover:text-blue-600 transition">Modern Villa</h3>
                                <p class="text-gray-500 text-sm">Şükrüpaşa, Edirne</p>
                            </div>
                            <p class="text-2xl font-bold text-blue-600">₺12.7M</p>
                        </div>
                        <div class="flex items-center gap-6 text-gray-500 text-sm border-t border-gray-100 pt-4">
                            <div class="flex items-center gap-2">
                                <span>🛏️ 5 Oda</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span>🛁 3 Banyo</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span>📐 320 m²</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="group bg-white border border-gray-100 rounded-3xl overflow-hidden hover:shadow-2xl hover:shadow-blue-900/10 transition-all duration-300 cursor-pointer">

    <div class="relative h-64 overflow-hidden">
        <img src="https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?auto=format&fit=crop&w=800&q=80"
             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" alt="Ev">

        <div class="absolute top-4 left-4 bg-purple-500 text-white text-xs font-bold px-3 py-1.5 rounded-full uppercase tracking-wider">
            Kiralık
        </div>

        <div class="absolute bottom-4 right-4 bg-black/50 backdrop-blur text-white text-xs font-bold px-3 py-1.5 rounded-lg flex items-center gap-1">
             <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/></svg>
            1. Murat
        </div>
    </div>

    <div class="p-6">
        <div class="flex justify-between items-start mb-4">
            <div>
                <h3 class="text-xl font-bold text-gray-900 group-hover:text-blue-600 transition">Lüks Daire</h3>
                <p class="text-gray-500 text-sm">Fatih, Edirne</p>
            </div>
            <p class="text-2xl font-bold text-blue-600">₺25.000<span class="text-sm text-gray-400 font-normal">/ay</span></p>
        </div>

        <div class="flex items-center gap-6 text-gray-500 text-sm border-t border-gray-100 pt-4">

            <div class="flex items-center gap-2">
                <i class="fa-solid fa-bed text-blue-600 text-lg"></i>
                <span>3 Oda</span>
            </div>

            <div class="flex items-center gap-2">
                <i class="fa-solid fa-bath text-blue-600 text-lg"></i>
                <span>1 Banyo</span>
            </div>

            <div class="flex items-center gap-2">
                <i class="fa-solid fa-ruler-combined text-blue-600 text-lg"></i>
                <span>145 m²</span>
            </div>

        </div>
    </div>
</div>

            </div>
        </div>
    </section>
<body class="bg-gray-50 font-sans antialiased">

    <header class="fixed w-full z-50 top-0 bg-white/90 backdrop-blur border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center h-20">
                <div class="flex items-center gap-2">
                    <div class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center text-white shadow-lg shadow-blue-500/30">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                    </div>
                    <span class="text-2xl font-bold text-gray-900 tracking-tight">TC<span class="text-blue-600">Emlak</span></span>
                </div>

                <nav class="hidden md:flex gap-8">
                    <a href="#" class="text-gray-600 font-medium hover:text-blue-600">İlanlar</a>
                    <a href="#" class="text-gray-600 font-medium hover:text-blue-600">Projeler</a>
                    <a href="#" class="text-gray-600 font-medium hover:text-blue-600">Danışmanlar</a>
                </nav>

                <button class="bg-gray-900 hover:bg-black text-white px-6 py-2.5 rounded-xl font-medium transition shadow-lg shadow-gray-900/20">
                    Giriş Yap
                </button>
            </div>
        </div>
    </header>

    <div class="relative pt-32 pb-20 px-4 text-center bg-white">
        <h1 class="text-5xl md:text-7xl font-extrabold text-gray-900 tracking-tight mb-6">
            Hayalindeki Evi <br>
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-indigo-600">Bugün Keşfet.</span>
        </h1>
        <p class="text-xl text-gray-500 max-w-2xl mx-auto mb-10">
            Edirne'nin en kapsamlı emlak platformuna hoş geldiniz. Güvenilir ilanlar, profesyonel danışmanlar.
        </p>
        <div class="flex justify-center gap-4">
            <button class="bg-blue-600 text-white px-8 py-4 rounded-2xl font-bold text-lg hover:scale-105 transition shadow-xl shadow-blue-600/30">
                İlanları İncele
            </button>
        </div>
    </div>

</body>
</html>
