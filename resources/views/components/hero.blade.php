{{-- resources/views/components/hero.blade.php --}}
<section class="relative isolate pt-20">
    {{-- Full-bleed background --}}
    <div class="absolute inset-x-0 top-20 -z-10 h-[400px] w-screen left-1/2 -translate-x-1/2 overflow-hidden">
        <img src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?auto=format&fit=crop&w=2400&q=80"
            alt="Tapu Cepte" class="h-full w-full object-cover" />
        <div class="absolute inset-0 bg-black/45"></div>
    </div>

    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="min-h-[400px] pb-12">
            {{-- Title --}}
            <div class="pt-8 text-center sm:pt-10">
                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight text-white">
                    Hayalindeki Gayrimenkul <span class="text-purple-300">Tapu Cepte</span>
                </h1>
                <p class="mt-3 text-sm sm:text-base text-white/80 max-w-2xl mx-auto">
                    Satılık & kiralık ilanları tek ekranda keşfet, güvenle iletişime geç.
                </p>
            </div>

            {{-- Search --}}
            <div class="mt-8">
                {{-- Tabs Container - SCROLLBAR EKLENDİ --}}
                <div class="flex gap-2 overflow-x-auto whitespace-nowrap hide-scrollbar md:overflow-visible md:whitespace-normal pb-2 md:pb-0"
                    style="scrollbar-width: thin; scrollbar-color: #9ca3af #f3f4f6;">
                    <button type="button"
                        class="shrink-0 inline-flex rounded-t-xl bg-white px-6 py-3 text-sm font-bold text-gray-900 shadow-sm ring-1 ring-black/5">
                        Satılık
                    </button>
                    <button type="button"
                        class="shrink-0 inline-flex rounded-t-xl bg-white/85 px-6 py-3 text-sm font-bold text-gray-700 hover:text-purple-700 hover:bg-white shadow-sm ring-1 ring-black/5 transition">
                        Kiralık
                    </button>
                    <button type="button"
                        class="shrink-0 inline-flex rounded-t-xl bg-white/85 px-6 py-3 text-sm font-bold text-gray-700 hover:text-purple-700 hover:bg-white shadow-sm ring-1 ring-black/5 transition">
                        Projeler
                    </button>
                    <button type="button"
                        class="shrink-0 hidden md:inline-flex rounded-t-xl bg-white/85 px-6 py-3 text-sm font-bold text-gray-700 hover:text-purple-700 hover:bg-white shadow-sm ring-1 ring-black/5 transition">
                        İlan No
                    </button>
                    <!-- Boş alan ekleyerek son butonun kesilmesini önler -->
                    <div class="shrink-0 w-2 md:hidden"></div>
                </div>

                {{-- Panel --}}
                <div class="rounded-2xl rounded-tl-none bg-white shadow-2xl shadow-black/20 ring-1 ring-black/5">
                    <div class="p-5 sm:p-6">
                        <div class="flex flex-wrap items-end">
                            {{-- Gayrimenkul Tipi --}}

                            <div class="w-full md:w-1/2 lg:w-[16%] relative">
                                <label
                                    class="block text-xs font-bold text-gray-600 uppercase tracking-wider text-plain">Gayrimenkul
                                    Tipi</label>

                                <input type="checkbox" id="menu-tip" class="peer/menu hidden" />

                                <label for="menu-tip" class="mt-2 w-full rounded-xl border border-gray-200 bg-white px-4 py-3 text-sm text-gray-900 flex justify-between items-center cursor-pointer transition-all duration-200 select-none
        peer-checked/menu:border-purple-600 peer-checked/menu:ring-4 peer-checked/menu:ring-purple-500/15">

                                    <div class="flex truncate text-plain items-center">
                                        <span id="selected-tip">Gayrimenkul Seçiniz</span>
                                    </div>

                                    <svg class="w-4 h-4 text-gray-400 transition-transform duration-300 peer-checked/menu:rotate-180"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </label>

                                <label for="menu-tip"
                                    class="fixed inset-0 z-40 hidden peer-checked/menu:block cursor-default"></label>

                                <div
                                    class="absolute z-50 w-full mt-2 bg-white border border-gray-200 rounded-xl shadow-2xl max-h-40 overflow-y-auto hidden peer-checked/menu:block animate-in fade-in zoom-in duration-200">
                                    <div class="p-2 space-y-0.5">

                                        <label
                                            class="flex items-center px-3 py-2.5 hover:bg-purple-50 rounded-lg cursor-pointer transition-colors group/item"
                                            onclick="selectPropertyType('Konut', 'konut')">
                                            <input type="radio" name="gayrimenkul_tipi" value="konut" class="hidden">
                                            <span
                                                class="text-sm text-gray-700 group-hover/item:text-purple-900">Konut</span>
                                        </label>

                                        <label
                                            class="flex items-center px-3 py-2.5 hover:bg-purple-50 rounded-lg cursor-pointer transition-colors group/item"
                                            onclick="selectPropertyType('Arsa', 'arsa')">
                                            <input type="radio" name="gayrimenkul_tipi" value="arsa" class="hidden">
                                            <span
                                                class="text-sm text-gray-700 group-hover/item:text-purple-900">Arsa</span>
                                        </label>

                                        <label
                                            class="flex items-center px-3 py-2.5 hover:bg-purple-50 rounded-lg cursor-pointer transition-colors group/item"
                                            onclick="selectPropertyType('İşyeri', 'isyeri')">
                                            <input type="radio" name="gayrimenkul_tipi" value="isyeri" class="hidden">
                                            <span
                                                class="text-sm text-gray-700 group-hover/item:text-purple-900">İşyeri</span>
                                        </label>

                                        <label
                                            class="flex items-center px-3 py-2.5 hover:bg-purple-50 rounded-lg cursor-pointer transition-colors group/item"
                                            onclick="selectPropertyType('Turistik Tesis', 'turistik')">
                                            <input type="radio" name="gayrimenkul_tipi" value="turistik" class="hidden">
                                            <span
                                                class="text-sm text-gray-700 group-hover/item:text-purple-900">Turistik
                                                Tesis</span>
                                        </label>

                                    </div>
                                </div>
                            </div>



                            {{-- Konum --}}
                            <div class="w-full md:w-1/2 lg:w-[36%] lg:pl-4">
                                <label class="block text-xs font-bold text-gray-600">Konum Bilgisi</label>
                                <div class="mt-2">
                                    <input type="text" placeholder="İl, ilçe, mahalle, site, okul, metro..."
                                        class="w-full rounded-xl border border-gray-200 bg-white px-4 py-3 text-sm text-gray-900 placeholder:text-gray-400 outline-none focus:border-purple-600 focus:ring-4 focus:ring-purple-500/15 transition" />
                                </div>
                            </div>

                            {{-- Oda Sayısı --}}


                            {{-- <div class="w-full md:w-1/2 lg:w-[14%] lg:pl-4 mt-4 md:mt-0 relative">
                                <label
                                    class="block text-xs font-bold text-gray-600 uppercase tracking-wider text-plain">Oda
                                    Sayısı</label>

                                <input type="checkbox" id="menu-oda" class="peer hidden" />

                                <label for="menu-oda" class="mt-2 w-full rounded-xl border border-gray-200 bg-white px-4 py-3 text-sm text-gray-900 flex justify-between items-center cursor-pointer transition-all duration-200 select-none
        peer-checked:border-purple-600 peer-checked:ring-4 peer-checked:ring-purple-500/15">

                                    <span class="truncate text-plain">Odalar</span>
                                    <svg class="w-4 h-4 text-gray-400 transition-transform duration-300 peer-checked:rotate-180"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </label>

                                <label for="menu-oda"
                                    class="fixed inset-0 z-40 hidden peer-checked:block cursor-default"></label>

                                <div
                                    class="absolute z-50 w-full mt-2 bg-white border border-gray-200 rounded-xl shadow-2xl max-h-40 overflow-y-auto hidden peer-checked:block animate-in fade-in zoom-in duration-200">
                                    <div class="p-2 space-y-0.5">
                                        <label
                                            class="flex items-center px-3 py-2.5 hover:bg-purple-50 rounded-lg cursor-pointer transition-colors active:bg-purple-100 group/item">
                                            <input type="checkbox"
                                                class="w-4 h-4 rounded border-gray-300 text-purple-600 focus:ring-purple-500 accent-purple-600 cursor-pointer">
                                            <span
                                                class="ml-3 text-sm text-gray-700 group-hover/item:text-purple-900">1+1</span>
                                        </label>
                                        <label
                                            class="flex items-center px-3 py-2.5 hover:bg-purple-50 rounded-lg cursor-pointer transition-colors active:bg-purple-100 group/item">
                                            <input type="checkbox"
                                                class="w-4 h-4 rounded border-gray-300 text-purple-600 focus:ring-purple-500 accent-purple-600 cursor-pointer">
                                            <span
                                                class="ml-3 text-sm text-gray-700 group-hover/item:text-purple-900">2+1</span>
                                        </label>
                                        <label
                                            class="flex items-center px-3 py-2.5 hover:bg-purple-50 rounded-lg cursor-pointer transition-colors active:bg-purple-100 group/item">
                                            <input type="checkbox"
                                                class="w-4 h-4 rounded border-gray-300 text-purple-600 focus:ring-purple-500 accent-purple-600 cursor-pointer">
                                            <span
                                                class="ml-3 text-sm text-gray-700 group-hover/item:text-purple-900">3+1</span>
                                        </label>
                                        <label
                                            class="flex items-center px-3 py-2.5 hover:bg-purple-50 rounded-lg cursor-pointer transition-colors active:bg-purple-100 group/item">
                                            <input type="checkbox"
                                                class="w-4 h-4 rounded border-gray-300 text-purple-600 focus:ring-purple-500 accent-purple-600 cursor-pointer">
                                            <span
                                                class="ml-3 text-sm text-gray-700 group-hover/item:text-purple-900">4+1</span>
                                        </label>
                                        <label
                                            class="flex items-center px-3 py-2.5 hover:bg-purple-50 rounded-lg cursor-pointer transition-colors active:bg-purple-100 group/item">
                                            <input type="checkbox"
                                                class="w-4 h-4 rounded border-gray-300 text-purple-600 focus:ring-purple-500 accent-purple-600 cursor-pointer">
                                            <span
                                                class="ml-3 text-sm text-gray-700 group-hover/item:text-purple-900">5+1</span>
                                        </label>
                                        <label
                                            class="flex items-center px-3 py-2.5 hover:bg-purple-50 rounded-lg cursor-pointer transition-colors active:bg-purple-100 group/item">
                                            <input type="checkbox"
                                                class="w-4 h-4 rounded border-gray-300 text-purple-600 focus:ring-purple-500 accent-purple-600 cursor-pointer">
                                            <span
                                                class="ml-3 text-sm text-gray-700 group-hover/item:text-purple-900">Dubleks</span>
                                        </label>
                                    </div>
                                </div>
                            </div> --}}

                            <div class="w-full md:w-1/2 lg:w-[14%] lg:pl-4 mt-4 md:mt-0 relative">
                                <label
                                    class="block text-xs font-bold text-gray-600 uppercase tracking-wider text-plain">Oda
                                    Sayısı</label>

                                <input type="checkbox" id="menu-oda" class="peer hidden" />

                                <label for="menu-oda" class="mt-2 w-full rounded-xl border border-gray-200 bg-white px-4 py-3 text-sm text-gray-900 flex justify-between items-center cursor-pointer transition-all duration-200 select-none
        peer-checked:border-purple-600 peer-checked:ring-4 peer-checked:ring-purple-500/15">

                                    <span id="selected-odalar" class="truncate text-plain">Odalar</span>

                                    <svg class="w-4 h-4 text-gray-400 transition-transform duration-300 peer-checked:rotate-180"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </label>

                                <label for="menu-oda"
                                    class="fixed inset-0 z-40 hidden peer-checked:block cursor-default"></label>

                                <div
                                    class="absolute z-50 w-full mt-2 bg-white border border-gray-200 rounded-xl shadow-2xl max-h-40 overflow-y-auto hidden peer-checked:block animate-in fade-in zoom-in duration-200">
                                    <div class="p-2 space-y-0.5">

                                        <label
                                            class="flex items-center px-3 py-2.5 hover:bg-purple-50 rounded-lg cursor-pointer transition-colors active:bg-purple-100 group/item">
                                            <input type="checkbox" name="odalar[]" value="1+1"
                                                onchange="updateOdaSelection()"
                                                class="oda-check w-4 h-4 rounded border-gray-300 text-purple-600 focus:ring-purple-500 accent-purple-600 cursor-pointer">
                                            <span
                                                class="ml-3 text-sm text-gray-700 group-hover/item:text-purple-900">1+1</span>
                                        </label>

                                        <label
                                            class="flex items-center px-3 py-2.5 hover:bg-purple-50 rounded-lg cursor-pointer transition-colors active:bg-purple-100 group/item">
                                            <input type="checkbox" name="odalar[]" value="2+1"
                                                onchange="updateOdaSelection()"
                                                class="oda-check w-4 h-4 rounded border-gray-300 text-purple-600 focus:ring-purple-500 accent-purple-600 cursor-pointer">
                                            <span
                                                class="ml-3 text-sm text-gray-700 group-hover/item:text-purple-900">2+1</span>
                                        </label>

                                        <label
                                            class="flex items-center px-3 py-2.5 hover:bg-purple-50 rounded-lg cursor-pointer transition-colors active:bg-purple-100 group/item">
                                            <input type="checkbox" name="odalar[]" value="3+1"
                                                onchange="updateOdaSelection()"
                                                class="oda-check w-4 h-4 rounded border-gray-300 text-purple-600 focus:ring-purple-500 accent-purple-600 cursor-pointer">
                                            <span
                                                class="ml-3 text-sm text-gray-700 group-hover/item:text-purple-900">3+1</span>
                                        </label>

                                        <label
                                            class="flex items-center px-3 py-2.5 hover:bg-purple-50 rounded-lg cursor-pointer transition-colors active:bg-purple-100 group/item">
                                            <input type="checkbox" name="odalar[]" value="4+1"
                                                onchange="updateOdaSelection()"
                                                class="oda-check w-4 h-4 rounded border-gray-300 text-purple-600 focus:ring-purple-500 accent-purple-600 cursor-pointer">
                                            <span
                                                class="ml-3 text-sm text-gray-700 group-hover/item:text-purple-900">4+1</span>
                                        </label>

                                        <label
                                            class="flex items-center px-3 py-2.5 hover:bg-purple-50 rounded-lg cursor-pointer transition-colors active:bg-purple-100 group/item">
                                            <input type="checkbox" name="odalar[]" value="5+1"
                                                onchange="updateOdaSelection()"
                                                class="oda-check w-4 h-4 rounded border-gray-300 text-purple-600 focus:ring-purple-500 accent-purple-600 cursor-pointer">
                                            <span
                                                class="ml-3 text-sm text-gray-700 group-hover/item:text-purple-900">5+1</span>
                                        </label>

                                        <label
                                            class="flex items-center px-3 py-2.5 hover:bg-purple-50 rounded-lg cursor-pointer transition-colors active:bg-purple-100 group/item">
                                            <input type="checkbox" name="odalar[]" value="Dubleks"
                                                onchange="updateOdaSelection()"
                                                class="oda-check w-4 h-4 rounded border-gray-300 text-purple-600 focus:ring-purple-500 accent-purple-600 cursor-pointer">
                                            <span
                                                class="ml-3 text-sm text-gray-700 group-hover/item:text-purple-900">Dubleks</span>
                                        </label>
                                    </div>
                                </div>
                            </div>


                            {{-- Fiyat --}}

                            <div class="w-full md:w-1/2 lg:w-[14%] lg:pl-4 mt-4 md:mt-0 relative">
                                <label
                                    class="block text-xs font-bold text-gray-600 uppercase tracking-wider text-plain">Fiyat</label>

                                <input type="checkbox" id="menu-fiyat" class="peer hidden" />

                                <label for="menu-fiyat" class="mt-2 w-full rounded-xl border border-gray-200 bg-white px-4 py-3 text-sm text-gray-900 flex justify-between items-center cursor-pointer transition-all duration-200 select-none
        peer-checked:border-purple-600 peer-checked:ring-4 peer-checked:ring-purple-500/15">

                                    <span id="selected-fiyat" class="truncate text-plain">Fiyat Seçin</span>

                                    <svg class="w-4 h-4 text-gray-400 transition-transform duration-300 peer-checked:rotate-180"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </label>

                                <label for="menu-fiyat"
                                    class="fixed inset-0 z-40 hidden peer-checked:block cursor-default"></label>

                                <div
                                    class="absolute z-50 w-full mt-2 bg-white border border-gray-200 rounded-xl shadow-2xl max-h-40 overflow-y-auto hidden peer-checked:block animate-in fade-in zoom-in duration-200">
                                    <div class="p-2 space-y-0.5">

                                        <label
                                            class="flex items-center px-3 py-2.5 hover:bg-purple-50 rounded-lg cursor-pointer transition-colors active:bg-purple-100 group/item">
                                            <input type="checkbox" name="fiyat_araligi[]" value="0 - 1M"
                                                onchange="updateFiyatSelection()"
                                                class="fiyat-check w-4 h-4 rounded border-gray-300 text-purple-600 focus:ring-purple-500 accent-purple-600 cursor-pointer">
                                            <span class="ml-3 text-sm text-gray-700 group-hover/item:text-purple-900">0
                                                - 1M</span>
                                        </label>

                                        <label
                                            class="flex items-center px-3 py-2.5 hover:bg-purple-50 rounded-lg cursor-pointer transition-colors active:bg-purple-100 group/item">
                                            <input type="checkbox" name="fiyat_araligi[]" value="1M - 3M"
                                                onchange="updateFiyatSelection()"
                                                class="fiyat-check w-4 h-4 rounded border-gray-300 text-purple-600 focus:ring-purple-500 accent-purple-600 cursor-pointer">
                                            <span class="ml-3 text-sm text-gray-700 group-hover/item:text-purple-900">1M
                                                - 3M</span>
                                        </label>

                                        <label
                                            class="flex items-center px-3 py-2.5 hover:bg-purple-50 rounded-lg cursor-pointer transition-colors active:bg-purple-100 group/item">
                                            <input type="checkbox" name="fiyat_araligi[]" value="3M - 4M"
                                                onchange="updateFiyatSelection()"
                                                class="fiyat-check w-4 h-4 rounded border-gray-300 text-purple-600 focus:ring-purple-500 accent-purple-600 cursor-pointer">
                                            <span class="ml-3 text-sm text-gray-700 group-hover/item:text-purple-900">3M
                                                - 4M</span>
                                        </label>

                                        <label
                                            class="flex items-center px-3 py-2.5 hover:bg-purple-50 rounded-lg cursor-pointer transition-colors active:bg-purple-100 group/item">
                                            <input type="checkbox" name="fiyat_araligi[]" value="Özel Fiyat"
                                                onchange="updateFiyatSelection()"
                                                class="fiyat-check w-4 h-4 rounded border-gray-300 text-purple-600 focus:ring-purple-500 accent-purple-600 cursor-pointer">
                                            <span
                                                class="ml-3 text-sm text-gray-700 group-hover/item:text-purple-900">Özel
                                                Fiyat Aralığı</span>
                                        </label>

                                    </div>
                                </div>
                            </div>


                            {{-- Actions --}}
                            <div class="w-full lg:w-[20%] lg:pl-14 mt-4 lg:mt-0">
                                <div class="flex items-center justify-end gap-3">
                                    <a href="{{ url('/arama') }}"
                                        class="inline-flex h-11 flex-1 items-center justify-center rounded-full bg-purple-600 px-6 text-sm font-extrabold text-white shadow-lg shadow-purple-900/20 hover:bg-purple-700 transition whitespace-nowrap">
                                        Ara
                                    </a>
                                </div>
                                <div class="mt-3 flex gap-3 lg:hidden">
                                    <a href="{{ url('/arama') }}" class="hidden"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- listings ile arayı aç --}}
        <div class="h-12 sm:h-16"></div>
    </div>

    <script>
        /**
         * konut tipi  bölümü
         * Seçilen tipi yukarıya yazar ve menüyü kapatır.
         * @param {string} labelText - Ekranda görünecek isim (Örn: Konut)
         * @param {string} value - Backend'e gidecek değer (Örn: konut)
         */
        function selectPropertyType(labelText, value) {
            // 1. Üstteki metni güncelle
            document.getElementById('selected-tip').innerText = labelText;

            // 2. Menüyü kapat (Checkbox'ı uncheck yap)
            document.getElementById('menu-tip').checked = false;

            // 3. (Opsiyonel) Gizli radio butonu işaretle - Backend (Laravel) için
            const radio = document.querySelector(`input[name="gayrimenkul_tipi"][value="${value}"]`);
            if (radio) {
                radio.checked = true;
            }
        }
        // oda sayısı bölümü
        function updateOdaSelection() {
            // 1. Tüm 'oda-check' sınıfına sahip işaretli checkboxları bul
            const selectedCheckboxes = document.querySelectorAll('.oda-check:checked');

            // 2. Seçilenlerin değerlerini bir diziye aktar
            const selectedValues = Array.from(selectedCheckboxes).map(cb => cb.value);

            // 3. Hedef span elemanını bul
            const displaySpan = document.getElementById('selected-odalar');

            // 4. Eğer seçim varsa virgülle birleştir, yoksa varsayılan metni yaz
            if (selectedValues.length > 0) {
                displaySpan.innerText = selectedValues.join(', ');
                displaySpan.classList.add('text-purple-700', 'font-medium'); // Seçilince belirginleştir
            } else {
                displaySpan.innerText = 'Odalar';
                displaySpan.classList.remove('text-purple-700', 'font-medium');
            }
        }

        // fiyat bölümü
        function updateFiyatSelection() {
            // 1. İşaretli tüm fiyat checkboxlarını seç
            const selectedFiyat = document.querySelectorAll('.fiyat-check:checked');

            // 2. Değerleri listeye al
            const values = Array.from(selectedFiyat).map(cb => cb.value);

            // 3. Ekran elementini bul
            const display = document.getElementById('selected-fiyat');

            // 4. Yazdır
            if (values.length > 0) {
                display.innerText = values.join(', ');
                display.classList.add('text-purple-700', 'font-medium');
            } else {
                display.innerText = 'Fiyat Seçin';
                display.classList.remove('text-purple-700', 'font-medium');
            }
        }
    </script>
</section>
