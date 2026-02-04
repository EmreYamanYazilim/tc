@extends('layouts.app')

@section('content')
    <div class="pt-32 pb-20 min-h-screen flex items-center justify-center bg-gray-50 px-4">
        <div class="max-w-md w-full bg-white p-8 rounded-3xl shadow-xl border border-gray-100">

            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-gray-900">Hoş Geldin</h2>
                <p class="text-gray-500 mt-2">Emlak dünyasına kaldığın yerden devam et.</p>
            </div>

            @if ($errors->any())
                <div class="mb-4 p-4 bg-red-50 text-red-600 rounded-xl text-sm italic">
                    {{ $errors->first() }}
                </div>
            @endif

            <form action="{{ route('login') }}" method="POST" class="space-y-6">
                @csrf

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">E-posta</label>
                    <input type="email" name="email" value="{{ old('email') }}" required autofocus
                        class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-purple-500 focus:border-transparent outline-none transition">
                </div>

                <div x-data="{ showPassword: false }">
                    <div class="flex justify-between mb-2">
                        <label class="block text-sm font-medium text-gray-700">Şifre</label>
                        <a href="#" class="text-sm text-purple-600 hover:underline italic">Şifremi Unuttum</a>
                    </div>
                    <div class="relative">
                        <input :type="showPassword ? 'text' : 'password'" name="password" required
                            class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-purple-500 focus:border-transparent outline-none transition pr-12">

                        <button type="button" @click="showPassword = !showPassword"
                            class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400 hover:text-purple-600 transition-colors">

                            <svg x-show="showPassword" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>

                            <svg x-show="!showPassword" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.542-7a10.057 10.057 0 012.183-3.64m4.533-2.133A10.05 10.05 0 0112 5c4.478 0 8.268 2.943 9.542 7a10.057 10.057 0 01-2.183 3.64M3 3l18 18" />
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="flex items-center">
                    <input type="checkbox" name="remember" id="remember"
                        class="w-4 h-4 rounded border-gray-300 accent-purple-600 focus:ring-purple-500 cursor-pointer transition-all">

                    <label for="remember" class="ml-2 text-sm text-purple-700 font-semibold cursor-pointer select-none">
                        Beni Hatırla
                    </label>
                </div>

                <button type="submit"
                    class="w-full bg-purple-600 hover:bg-purple-700 text-white font-bold py-3 rounded-xl transition shadow-lg shadow-purple-200 transform active:scale-95">
                    Giriş Yap
                </button>
            </form>

            <div class="mt-8 text-center text-sm text-gray-500">
                Hesabın yok mu?
                <a href="{{ route('register') }}" class="text-purple-600 font-bold hover:underline">Hemen Kaydol</a>
            </div>
        </div>
    </div>
@endsection
