@extends('layouts.app')

@section('content')
    <div class="pt-32 pb-20 min-h-screen flex items-center justify-center bg-gray-50 px-4">
        <div class="max-w-6xl w-full bg-white rounded-3xl shadow-2xl border border-gray-100 overflow-hidden flex flex-col lg:flex-row">

            <div class="w-full lg:w-2/3 p-8 lg:p-12">

                <div class="text-center mb-8">
                    <h2 class="text-3xl font-bold text-gray-900">Kurumsal Üyelik</h2>
                    <p class="text-gray-500 mt-2">İşinizi büyütmek için profesyonel adım atın.</p>
                </div>

                <div class="mb-10">
                    <div class="bg-gray-100 p-2 rounded-xl flex items-center justify-between gap-3">
                        <a href="{{ route('register') }}"
                            class="flex-1 py-3 rounded-lg bg-transparent text-gray-500 font-bold hover:text-purple-600 hover:bg-white/50 transition-all text-center">
                            Bireysel Kayıt
                        </a>
                        <button type="button"
                            class="flex-1 py-3 rounded-lg bg-purple-600 text-white font-bold shadow-md shadow-purple-100 ring-1 ring-black/5 transition-all cursor-default">
                            Kurumsal Kayıt
                        </button>
                    </div>
                </div>

                @if ($errors->any())
                    <div class="mb-6 p-4 bg-red-50 text-red-600 rounded-xl text-sm border border-red-100">
                        <ul class="list-disc list-inside">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('register.company.store') }}" method="POST" class="space-y-6">
                    @csrf

                    <div class="space-y-4">
                        <h3 class="text-sm font-bold text-gray-900 uppercase tracking-wider border-b border-gray-100 pb-2 mb-4">
                            Yetkili Bilgileri
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Ad</label>
                                <input type="text" name="name" value="{{ old('name') }}" required
                                    class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-purple-500/20 focus:border-purple-600 outline-none transition-all">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Soyad</label>
                                <input type="text" name="surname" value="{{ old('surname') }}" required
                                    class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-purple-500/20 focus:border-purple-600 outline-none transition-all">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Cep Telefonu</label>
                                <input type="tel" name="phone" value="{{ old('phone') }}" placeholder="05__ ___ __ __" required
                                    class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-purple-500/20 focus:border-purple-600 outline-none transition-all">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">E-posta Adresi</label>
                                <input type="email" name="email" value="{{ old('email') }}" required
                                    class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-purple-500/20 focus:border-purple-600 outline-none transition-all">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div x-data="{ show: false }" class="relative">
                                <label class="block text-sm font-medium text-gray-700 mb-2">Şifre</label>
                                <div class="relative">
                                    <input :type="show ? 'text' : 'password'" name="password" required
                                        class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-purple-500/20 focus:border-purple-600 outline-none transition-all pr-10">
                                    <button type="button" @click="show = !show" class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400 hover:text-purple-600">
                                        <svg x-show="!show" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" /></svg>
                                        <svg x-show="show" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="display: none;"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.542-7a10.057 10.057 0 012.183-3.64m4.533-2.133A10.05 10.05 0 0112 5c4.478 0 8.268 2.943 9.542 7a10.057 10.057 0 01-2.183 3.64M3 3l18 18" /></svg>
                                    </button>
                                </div>
                            </div>
                            <div x-data="{ show: false }" class="relative">
                                <label class="block text-sm font-medium text-gray-700 mb-2">Şifre</label>
                                <div class="relative">
                                    <input :type="show ? 'text' : 'password'" name="password" required
                                        class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-purple-500/20 focus:border-purple-600 outline-none transition-all pr-10">
                                    <button type="button" @click="show = !show" class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400 hover:text-purple-600">
                                        <svg x-show="!show" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" /></svg>
                                        <svg x-show="show" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="display: none;"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.542-7a10.057 10.057 0 012.183-3.64m4.533-2.133A10.05 10.05 0 0112 5c4.478 0 8.268 2.943 9.542 7a10.057 10.057 0 01-2.183 3.64M3 3l18 18" /></svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="space-y-4 pt-4">
                        <h3 class="text-sm font-bold text-gray-900 uppercase tracking-wider border-b border-gray-100 pb-2 mb-4">
                            Firma & İletişim
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Şirket Kısa Adı</label>
                                <input type="text" name="company_short_name" value="{{ old('company_short_name') }}" placeholder="Örn: Yıldız Emlak" required
                                    class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-purple-500/20 focus:border-purple-600 outline-none transition-all">
                                <p class="text-xs text-gray-400 mt-1">İlanlarda görünecek isim.</p>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Şirket Resmi Adı</label>
                                <input type="text" name="company_official_name" value="{{ old('company_official_name') }}" placeholder="Örn: Yıldız Gayr. Ltd. Şti." required
                                    class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-purple-500/20 focus:border-purple-600 outline-none transition-all">
                                <p class="text-xs text-gray-400 mt-1">Fatura ünvanınız.</p>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div x-data="{ open: false, selected: 'Seçiniz' }" class="relative">
                                <label class="block text-sm font-medium text-gray-700 mb-2">İl</label>
                                <input type="hidden" name="city" x-model="selected">
                                <button type="button" @click="open = !open" @click.outside="open = false"
                                    class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-white text-left flex justify-between items-center transition-all"
                                    :class="open ? 'ring-2 ring-purple-500/20 border-purple-600' : ''">
                                    <span x-text="selected" :class="selected === 'Seçiniz' ? 'text-gray-500' : 'text-gray-900'"></span>
                                    <svg class="w-5 h-5 text-purple-600 transition-transform duration-200" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                                </button>
                                <div x-show="open" x-transition class="absolute z-50 mt-2 w-full bg-white border border-gray-100 rounded-2xl shadow-2xl overflow-hidden" style="display: none;">
                                    <div @click="selected = 'Edirne'; open = false" class="px-4 py-3 hover:bg-purple-50 hover:text-purple-700 cursor-pointer border-b border-gray-50 text-gray-700">Edirne</div>
                                    <div @click="selected = 'İstanbul'; open = false" class="px-4 py-3 hover:bg-purple-50 hover:text-purple-700 cursor-pointer border-b border-gray-50 text-gray-700">İstanbul</div>
                                    <div @click="selected = 'Ankara'; open = false" class="px-4 py-3 hover:bg-purple-50 hover:text-purple-700 cursor-pointer border-b border-gray-50 text-gray-700">Ankara</div>
                                </div>
                            </div>

                            <div x-data="{ open: false, selected: 'Seçiniz' }" class="relative">
                                <label class="block text-sm font-medium text-gray-700 mb-2">İlçe</label>
                                <input type="hidden" name="district" x-model="selected">
                                <button type="button" @click="open = !open" @click.outside="open = false"
                                    class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-white text-left flex justify-between items-center transition-all"
                                    :class="open ? 'ring-2 ring-purple-500/20 border-purple-600' : ''">
                                    <span x-text="selected" :class="selected === 'Seçiniz' ? 'text-gray-500' : 'text-gray-900'"></span>
                                    <svg class="w-5 h-5 text-purple-600 transition-transform duration-200" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                                </button>
                                <div x-show="open" x-transition class="absolute z-50 mt-2 w-full bg-white border border-gray-100 rounded-2xl shadow-2xl overflow-hidden" style="display: none;">
                                    <div class="px-4 py-3 text-gray-400 text-sm">Önce İl Seçiniz</div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Açık Adres</label>
                            <textarea name="address" rows="3" placeholder="Mahalle, Cadde, Sokak, Kapı No..." required
                                class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-purple-500/20 focus:border-purple-600 outline-none transition-all resize-none">{{ old('address') }}</textarea>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Taşınmaz Ticareti Yetki Belgesi No</label>
                            <input type="text" name="auth_doc_no" value="{{ old('auth_doc_no') }}" placeholder="Varsa giriniz"
                                class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-purple-500/20 focus:border-purple-600 outline-none transition-all">
                        </div>
                    </div>

                    <div class="space-y-3 pt-4">
                        <label class="flex items-start">
                            <input type="checkbox" required class="mt-1 w-4 h-4 rounded border-gray-300 accent-purple-600 focus:ring-purple-500 cursor-pointer">
                            <span class="ml-2 text-sm text-gray-600">
                                <a href="#" class="text-purple-600 hover:underline">Üyelik Sözleşmesi</a>'ni ve <a href="#" class="text-purple-600 hover:underline">Kişisel Verilerin Korunması</a> metnini okudum, onaylıyorum.
                            </span>
                        </label>
                        <label class="flex items-start">
                            <input type="checkbox" class="mt-1 w-4 h-4 rounded border-gray-300 accent-purple-600 focus:ring-purple-500 cursor-pointer">
                            <span class="ml-2 text-sm text-gray-600">
                                Kampanya ve fırsatlardan haberdar olmak için elektronik ileti almayı kabul ediyorum.
                            </span>
                        </label>
                    </div>

                    <button type="submit"
                        class="w-full bg-purple-600 hover:bg-purple-700 text-white font-bold py-4 rounded-xl transition-all duration-300 shadow-lg shadow-purple-200 hover:shadow-2xl hover:shadow-purple-500/50 transform active:scale-95 text-lg">
                        Üyeliği Tamamla
                    </button>

                </form>
            </div>

            <div class="hidden lg:flex w-1/3 bg-purple-50 p-12 flex-col justify-center relative overflow-hidden">
                <div class="absolute top-0 right-0 -mr-20 -mt-20 w-64 h-64 bg-purple-200 rounded-full opacity-30 blur-3xl"></div>
                <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-64 h-64 bg-purple-300 rounded-full opacity-30 blur-3xl"></div>

                <div class="relative z-10">
                    <h3 class="text-2xl font-bold text-gray-900 mb-8">Neden Tapu Cepte Kurumsal?</h3>
                    <ul class="space-y-8">
                        <li class="flex items-start">
                            <div class="flex-shrink-0 w-12 h-12 bg-white rounded-xl shadow-md flex items-center justify-center text-2xl">🚀</div>
                            <div class="ml-4">
                                <h4 class="text-lg font-bold text-gray-900">Hızlı Satış & Kiralama</h4>
                                <p class="text-sm text-gray-600 mt-1">Portföyünüzü milyonlarca kullanıcıya ulaştırarak kazancınıza kazanç katın.</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <div class="flex-shrink-0 w-12 h-12 bg-white rounded-xl shadow-md flex items-center justify-center text-2xl">📊</div>
                            <div class="ml-4">
                                <h4 class="text-lg font-bold text-gray-900">Gelişmiş Raporlama</h4>
                                <p class="text-sm text-gray-600 mt-1">İlanlarınızın performansını detaylı grafiklerle analiz edin.</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <div class="flex-shrink-0 w-12 h-12 bg-white rounded-xl shadow-md flex items-center justify-center text-2xl">🤝</div>
                            <div class="ml-4">
                                <h4 class="text-lg font-bold text-gray-900">Prestijli Profil</h4>
                                <p class="text-sm text-gray-600 mt-1">Kurumsal kimliğinizi yansıtan özel mağaza sayfası ile güven verin.</p>
                            </div>
                        </li>
                    </ul>
                    <div class="mt-12 p-6 bg-white rounded-2xl shadow-lg border border-purple-100 text-center">
                        <p class="text-gray-500 text-sm mb-2">Sorularınız mı var?</p>
                        <p class="text-2xl font-bold text-purple-700">0850 123 45 67</p>
                        <p class="text-xs text-gray-400 mt-1">Kurumsal Destek Hattı</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
