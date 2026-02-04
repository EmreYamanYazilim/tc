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

                <div>
                    <div class="flex justify-between mb-2">
                        <label class="block text-sm font-medium text-gray-700">Şifre</label>
                        <a href="#" class="text-sm text-purple-600 hover:underline italic">Şifremi Unuttum</a>
                    </div>
                    <input type="password" name="password" required
                        class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-purple-500 focus:border-transparent outline-none transition">
                </div>

                <div class="flex items-center">
                    <input type="checkbox" name="remember" id="remember"
                        class="w-4 h-4 accent-purple-600 border-gray-300 rounded focus:ring-purple-500 cursor-pointer">
                    <label for="remember" class="ml-2 text-sm text-purple-600 font-medium cursor-pointer">
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
