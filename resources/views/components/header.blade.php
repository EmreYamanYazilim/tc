<header class="sticky top-0 z-50 bg-white shadow-lg border-b border-gray-100 font-sans" x-data="{ mobileMenuOpen: false }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">

            <div class="flex-shrink-0 flex items-center cursor-pointer" onclick="window.location='{{ route('home') }}'">
                <img class="h-12 w-auto object-contain rounded-full" src="{{ asset('images/logo2.png') }}" alt="Tapu Cepte">
            </div>

            <nav class="hidden md:flex space-x-8 items-center h-full">

                <div class="relative group h-full flex items-center"
                     x-data="{ open: false }"
                     @mouseenter="open = true"
                     @mouseleave="open = false">

                    <button class="text-gray-600 group-hover:text-purple-600 font-bold px-1 py-2 inline-flex items-center transition duration-200 outline-none h-full">
                        <span>SATILIK</span>
                        <svg class="ml-1 w-4 h-4 fill-current transition-transform duration-200" :class="{'rotate-180': open}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"/></svg>
                    </button>

                    <div class="absolute bottom-0 left-0 h-1 bg-purple-600 w-0 group-hover:w-full transition-all duration-300"></div>

                    <div x-show="open"
                         x-transition:enter="transition ease-out duration-200"
                         x-transition:enter-start="opacity-0 translate-y-0"
                         x-transition:enter-end="opacity-100 translate-y-0"
                         class="absolute top-full left-0 w-60 rounded-b-xl shadow-2xl bg-white border border-gray-100 py-2 z-50"
                         style="display: none;">
                        <a href="#" class="block px-4 py-3 text-sm text-gray-700 hover:bg-purple-50 hover:text-purple-700 font-medium transition border-l-4 border-transparent hover:border-purple-600">Konut</a>
                        <a href="#" class="block px-4 py-3 text-sm text-gray-700 hover:bg-purple-50 hover:text-purple-700 font-medium transition border-l-4 border-transparent hover:border-purple-600">Arsa</a>
                        <a href="#" class="block px-4 py-3 text-sm text-gray-700 hover:bg-purple-50 hover:text-purple-700 font-medium transition border-l-4 border-transparent hover:border-purple-600">Kat Karşılığı Arsa</a>
                        <a href="#" class="block px-4 py-3 text-sm text-gray-700 hover:bg-purple-50 hover:text-purple-700 font-medium transition border-l-4 border-transparent hover:border-purple-600">İşyeri</a>
                        <a href="#" class="block px-4 py-3 text-sm text-gray-700 hover:bg-purple-50 hover:text-purple-700 font-medium transition border-l-4 border-transparent hover:border-purple-600">Devren İşyeri</a>
                        <a href="#" class="block px-4 py-3 text-sm text-gray-700 hover:bg-purple-50 hover:text-purple-700 font-medium transition border-l-4 border-transparent hover:border-purple-600">Turistik Tesis</a>
                    </div>
                </div>

                <div class="relative group h-full flex items-center"
                     x-data="{ open: false }"
                     @mouseenter="open = true"
                     @mouseleave="open = false">

                    <button class="text-gray-600 group-hover:text-purple-600 font-bold px-1 py-2 inline-flex items-center transition duration-200 outline-none h-full">
                        <span>KİRALIK</span>
                        <svg class="ml-1 w-4 h-4 fill-current transition-transform duration-200" :class="{'rotate-180': open}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"/></svg>
                    </button>
                    <div class="absolute bottom-0 left-0 h-1 bg-purple-600 w-0 group-hover:w-full transition-all duration-300"></div>

                    <div x-show="open" x-transition class="absolute top-full left-0 w-60 rounded-b-xl shadow-2xl bg-white border border-gray-100 py-2 z-50" style="display: none;">
                        <a href="#" class="block px-4 py-3 text-sm text-gray-700 hover:bg-purple-50 hover:text-purple-700 font-medium transition border-l-4 border-transparent hover:border-purple-600">Konut</a>
                        <a href="#" class="block px-4 py-3 text-sm text-gray-700 hover:bg-purple-50 hover:text-purple-700 font-medium transition border-l-4 border-transparent hover:border-purple-600">Günlük Kiralık</a>
                        <a href="#" class="block px-4 py-3 text-sm text-gray-700 hover:bg-purple-50 hover:text-purple-700 font-medium transition border-l-4 border-transparent hover:border-purple-600">Arsa</a>
                        <a href="#" class="block px-4 py-3 text-sm text-gray-700 hover:bg-purple-50 hover:text-purple-700 font-medium transition border-l-4 border-transparent hover:border-purple-600">İşyeri</a>
                        <a href="#" class="block px-4 py-3 text-sm text-gray-700 hover:bg-purple-50 hover:text-purple-700 font-medium transition border-l-4 border-transparent hover:border-purple-600">Turistik Tesis</a>
                    </div>
                </div>

                <div class="relative group h-full flex items-center"
                     x-data="{ open: false }"
                     @mouseenter="open = true"
                     @mouseleave="open = false">

                    <button class="text-gray-600 group-hover:text-purple-600 font-bold px-1 py-2 inline-flex items-center transition duration-200 outline-none h-full">
                        <span>PROJELER</span>
                        <svg class="ml-1 w-4 h-4 fill-current transition-transform duration-200" :class="{'rotate-180': open}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"/></svg>
                    </button>
                    <div class="absolute bottom-0 left-0 h-1 bg-purple-600 w-0 group-hover:w-full transition-all duration-300"></div>

                    <div x-show="open" x-transition class="absolute top-full left-0 w-60 rounded-b-xl shadow-2xl bg-white border border-gray-100 py-2 z-50" style="display: none;">
                        <a href="#" class="block px-4 py-3 text-sm text-gray-700 hover:bg-purple-50 hover:text-purple-700 font-medium transition border-l-4 border-transparent hover:border-purple-600">Konut Projeleri</a>
                        <a href="#" class="block px-4 py-3 text-sm text-gray-700 hover:bg-purple-50 hover:text-purple-700 font-medium transition border-l-4 border-transparent hover:border-purple-600">Arsa Projeleri</a>
                        <a href="#" class="block px-4 py-3 text-sm text-gray-700 hover:bg-purple-50 hover:text-purple-700 font-medium transition border-l-4 border-transparent hover:border-purple-600">İşyeri Projeleri</a>
                    </div>
                </div>

                <div class="relative group h-full flex items-center"
                     x-data="{ open: false }"
                     @mouseenter="open = true"
                     @mouseleave="open = false">

                    <button class="text-gray-600 group-hover:text-purple-600 font-bold px-1 py-2 inline-flex items-center transition duration-200 outline-none h-full">
                        <span>HİZMETLERİMİZ</span>
                        <svg class="ml-1 w-4 h-4 fill-current transition-transform duration-200" :class="{'rotate-180': open}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"/></svg>
                    </button>
                    <div class="absolute bottom-0 left-0 h-1 bg-purple-600 w-0 group-hover:w-full transition-all duration-300"></div>

                    <div x-show="open" x-transition class="absolute top-full left-0 w-60 rounded-b-xl shadow-2xl bg-white border border-gray-100 py-2 z-50" style="display: none;">
                        <a href="#" class="block px-4 py-3 text-sm text-gray-700 hover:bg-purple-50 hover:text-purple-700 font-medium transition border-l-4 border-transparent hover:border-purple-600">Biz Kimiz?</a>
                        <a href="#" class="block px-4 py-3 text-sm text-gray-700 hover:bg-purple-50 hover:text-purple-700 font-medium transition border-l-4 border-transparent hover:border-purple-600">Haberler</a>
                        <a href="#" class="block px-4 py-3 text-sm text-gray-700 hover:bg-purple-50 hover:text-purple-700 font-medium transition border-l-4 border-transparent hover:border-purple-600">Emlak Yatırım Uzmanı</a>
                        <a href="#" class="block px-4 py-3 text-sm text-gray-700 hover:bg-purple-50 hover:text-purple-700 font-medium transition border-l-4 border-transparent hover:border-purple-600">Emlak Rehberi</a>
                    </div>
                </div>

            </nav>

            <div class="flex items-center space-x-6">
                @guest
                    <div class="hidden md:flex items-center space-x-2">
                        <a href="{{ route('login') }}" class="text-purple-600 hover:text-purple-800 font-bold text-base transition">Giriş Yap</a>
                        <span class="text-gray-400 text-sm">veya</span>
                        <a href="{{ route('register') }}" class="text-purple-600 hover:text-purple-800 font-bold text-base transition">Üye Ol</a>
                    </div>
                    <a href="#" class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-2.5 px-6 rounded-full shadow-lg transition">Ücretsiz İlan Ver</a>
                @else
                    <div class="relative" x-data="{ userOpen: false }">
                        <button @click="userOpen = !userOpen" @click.outside="userOpen = false" class="flex items-center space-x-2 text-gray-700 hover:text-purple-600 font-bold focus:outline-none">
                            <span>{{ Auth::user()->name }}</span>
                            <svg class="w-4 h-4 transition-transform" :class="{'rotate-180': userOpen}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div x-show="userOpen" x-transition class="absolute right-0 mt-3 w-48 bg-white rounded-xl shadow-xl ring-1 ring-black ring-opacity-5 py-1 z-50" style="display: none;">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-purple-50 font-bold">Profilim</a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-red-50 font-bold">Çıkış Yap</button>
                            </form>
                        </div>
                    </div>
                    <a href="#" class="ml-4 bg-purple-600 hover:bg-purple-700 text-white font-bold py-2.5 px-6 rounded-full shadow-lg transition">Ücretsiz İlan Ver</a>
                @endguest
            </div>
        </div>
    </div>
</header>
