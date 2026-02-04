<header class="relative bg-slate-900 border-b border-slate-800">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex justify-between items-center h-20">

            <div class="flex items-center gap-3">
                <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                    <div class="w-10 h-10 bg-purple-600 rounded-lg flex items-center justify-center text-white shadow-[0_0_15px_rgba(147,51,234,0.5)] group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-house"></i>
                    </div>
                    <span class="text-2xl font-bold text-white tracking-tight">
                        TC<span class="text-purple-400">Emlak</span>
                    </span>
                </a>
            </div>

            <div class="hidden md:flex flex-1 max-w-xl mx-8">
                <div class="relative w-full">
                    <input type="text" placeholder="Kelime, ilan no veya konum girin..."
                        class="w-full bg-slate-800 text-white border border-slate-700 rounded-lg py-3 pl-4 pr-12 focus:outline-none focus:border-purple-500 focus:ring-1 focus:ring-purple-500 placeholder-slate-400 transition-all">
                    <button class="absolute right-2 top-2 bg-purple-600 hover:bg-purple-500 text-white p-1.5 rounded-md transition-colors">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>
            </div>

            <div class="flex items-center gap-6">

                @guest
                    <a href="{{ route('login') }}" class="hidden md:block text-slate-300 hover:text-white font-medium text-sm transition-colors">
                        Giriş Yap
                    </a>
                    <a href="{{ route('register') }}" class="bg-purple-600 hover:bg-purple-500 text-white px-6 py-2.5 rounded-lg font-bold text-sm transition-all shadow-lg shadow-purple-900/50 border border-purple-500">
                        Ücretsiz İlan Ver
                    </a>
                @endguest

                @auth
                    <div class="hidden md:flex items-center gap-4">
                        <span class="text-slate-300 text-sm">Merhaba, <span class="text-purple-400 font-bold">{{ Auth::user()->name }}</span></span>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="text-slate-400 hover:text-red-400 text-sm font-medium transition-colors">
                                <i class="fa-solid fa-right-from-bracket"></i> Çıkış
                            </button>
                        </form>
                    </div>

                    <form method="POST" action="{{ route('logout') }}" class="md:hidden">
                        @csrf
                        <button type="submit" class="text-white bg-slate-800 p-2 rounded-lg">
                            <i class="fa-solid fa-right-from-bracket text-red-400"></i>
                        </button>
                    </form>
                @endauth

            </div>

        </div>
    </div>
    <div class="absolute top-0 left-1/2 -translate-x-1/2 bg-red-600 text-white text-[10px] px-2 py-0.5 rounded-b-md">
        SEÇENEK 1 (KOYU)
    </div>
</header>


<div class="h-24 bg-gray-200 flex items-center justify-center border-y border-gray-300 my-10">
    <span class="text-gray-500 font-mono text-sm">--- BURADAN SONRASI DİĞER TASARIM ---</span>
</div>


<header class="relative bg-white border-b border-gray-100 shadow-sm">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex justify-between items-center h-24">

            <div class="flex items-center gap-3">
                <a href="{{ route('home') }}" class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-purple-100 text-purple-700 rounded-xl flex items-center justify-center text-xl">
                        <i class="fa-solid fa-house-chimney"></i>
                    </div>
                    <span class="text-2xl font-bold text-slate-900 tracking-tight">
                        TC<span class="text-purple-700">Emlak</span>
                    </span>
                </a>
            </div>

            <nav class="hidden md:flex items-center gap-8">
                <a href="#" class="text-slate-600 font-semibold hover:text-purple-700 border-b-2 border-transparent hover:border-purple-600 py-1 transition-all">Satılık</a>
                <a href="#" class="text-slate-600 font-semibold hover:text-purple-700 border-b-2 border-transparent hover:border-purple-600 py-1 transition-all">Kiralık</a>
                <a href="#" class="text-slate-600 font-semibold hover:text-purple-700 border-b-2 border-transparent hover:border-purple-600 py-1 transition-all">Projeler</a>
            </nav>

            <div class="flex items-center gap-4">

                @guest
                    <a href="{{ route('login') }}" class="hidden md:flex items-center gap-2 text-slate-600 hover:text-purple-700 font-medium transition-colors">
                        <i class="fa-regular fa-user"></i> Giriş Yap
                    </a>
                    <a href="{{ route('register') }}" class="bg-purple-700 hover:bg-purple-800 text-white px-6 py-3 rounded-full font-semibold text-sm transition-all shadow-lg shadow-purple-200 flex items-center gap-2">
                        <i class="fa-solid fa-plus"></i> İlan Ver
                    </a>
                @endguest

                @auth
                    <div class="flex items-center gap-4">
                        <div class="flex flex-col text-right hidden md:block">
                            <span class="text-xs text-gray-500">Hoş geldin,</span>
                            <span class="text-sm font-bold text-gray-900">{{ Auth::user()->name }}</span>
                        </div>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="w-10 h-10 rounded-full bg-red-50 text-red-500 hover:bg-red-100 flex items-center justify-center transition-colors" title="Çıkış Yap">
                                <i class="fa-solid fa-right-from-bracket"></i>
                            </button>
                        </form>

                        <button class="bg-purple-700 hover:bg-purple-800 text-white w-10 h-10 md:w-auto md:px-6 md:py-3 rounded-full font-semibold text-sm transition-all shadow-lg shadow-purple-200 flex items-center justify-center gap-2">
                            <i class="fa-solid fa-plus"></i> <span class="hidden md:inline">İlan Ver</span>
                        </button>
                    </div>
                @endauth

            </div>

        </div>
    </div>
    <div class="absolute top-0 left-1/2 -translate-x-1/2 bg-blue-600 text-white text-[10px] px-2 py-0.5 rounded-b-md">
        SEÇENEK 2 (AÇIK)
    </div>
</header>
