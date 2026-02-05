@extends('layouts.app')

@section('content')
    <div class="pt-32 pb-20 min-h-screen flex items-center justify-center bg-gray-50 px-4">
        <div class="max-w-md w-full bg-white p-8 rounded-3xl shadow-xl border border-gray-100">

            <div class="text-center mb-6">
                <h2 class="text-3xl font-bold text-gray-900">Aramıza Katıl</h2>
                <p class="text-gray-500 mt-2">Tapu Cepte ayrıcalıklarından yararlan.</p>
            </div>

            <div class="mb-8">
                <div class="bg-gray-100 p-2 rounded-xl flex items-center justify-between gap-3">

                    <button type="button"
                        class="flex-1 py-3 rounded-lg bg-purple-600 text-white font-bold shadow-md shadow-purple-200 transition-all text-center">
                        Bireysel Üyelik
                    </button>

                    <a href="{{ url('/kurumsal-kayit') }}"
                        class="flex-1 py-3 rounded-lg bg-white text-purple-600 font-bold hover:text-purple-700 hover:bg-purple-50 shadow-sm transition-all text-center flex items-center justify-center">
                        Kurumsal Üyelik
                    </a>
                </div>
            </div>

            @if ($errors->any())
                <div class="mb-4 p-4 bg-red-50 text-red-600 rounded-xl text-sm border border-red-100">
                    <ul class="list-disc list-inside">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('register') }}" method="POST" class="space-y-5">
                @csrf

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Ad Soyad</label>
                    <input type="text" name="name" value="{{ old('name') }}" required autofocus
                        class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-purple-500/20 focus:border-purple-600 outline-none transition-all">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">E-posta</label>
                    <input type="email" name="email" value="{{ old('email') }}" required
                        class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-purple-500/20 focus:border-purple-600 outline-none transition-all">
                </div>

                <div x-data="{ showPassword: false }">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Şifre</label>
                    <div class="relative">
                        <input :type="showPassword ? 'text' : 'password'" name="password" required
                            class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-purple-500/20 focus:border-purple-600 outline-none transition-all pr-12">
                        <button type="button" @click="showPassword = !showPassword"
                            class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400 hover:text-purple-600 transition-colors focus:outline-none">
                            <svg x-show="showPassword" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                            <svg x-show="!showPassword" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" style="display: none;">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.542-7a10.057 10.057 0 012.183-3.64m4.533-2.133A10.05 10.05 0 0112 5c4.478 0 8.268 2.943 9.542 7a10.057 10.057 0 01-2.183 3.64M3 3l18 18" />
                            </svg>
                        </button>
                    </div>
                </div>

                <div x-data="{ showPasswordConfirm: false }">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Şifre Tekrar</label>
                    <div class="relative">
                        <input :type="showPasswordConfirm ? 'text' : 'password'" name="password_confirmation" required
                            class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-purple-500/20 focus:border-purple-600 outline-none transition-all pr-12">
                        <button type="button" @click="showPasswordConfirm = !showPasswordConfirm"
                            class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400 hover:text-purple-600 transition-colors focus:outline-none">
                            <svg x-show="showPasswordConfirm" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                            <svg x-show="!showPasswordConfirm" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" style="display: none;">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.542-7a10.057 10.057 0 012.183-3.64m4.533-2.133A10.05 10.05 0 0112 5c4.478 0 8.268 2.943 9.542 7a10.057 10.057 0 01-2.183 3.64M3 3l18 18" />
                            </svg>
                        </button>
                    </div>
                </div>

                <button type="submit"
                    class="w-full bg-purple-600 hover:bg-purple-700 text-white font-bold py-3 rounded-xl transition-all duration-300 shadow-lg shadow-purple-200 hover:shadow-2xl hover:shadow-purple-500/50 transform active:scale-95">
                    Kayıt Ol
                </button>
            </form>

            <div class="mt-6 text-center text-sm text-gray-500">
                Zaten hesabın var mı?
                <a href="{{ route('login') }}" class="text-purple-600 font-bold hover:underline">Giriş Yap</a>
            </div>
        </div>
    </div>
@endsection
