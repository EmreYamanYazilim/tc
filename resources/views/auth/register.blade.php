@extends('layouts.app')

@section('content')
<div class="pt-32 pb-20 min-h-screen flex items-center justify-center bg-gray-50 px-4">
    <div class="max-w-md w-full bg-white p-8 rounded-3xl shadow-xl border border-gray-100">

        <div class="text-center mb-8">
            <h2 class="text-3xl font-bold text-gray-900">Aramıza Katıl</h2>
            <p class="text-gray-500 mt-2">Tapu Cepte ayrıcalıklarından yararlan.</p>
        </div>

        @if ($errors->any())
            <div class="mb-4 p-4 bg-red-50 text-red-600 rounded-xl text-sm">
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
                    class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-purple-500 focus:border-transparent outline-none transition">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">E-posta</label>
                <input type="email" name="email" value="{{ old('email') }}" required
                    class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-purple-500 focus:border-transparent outline-none transition">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Şifre</label>
                <input type="password" name="password" required
                    class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-purple-500 focus:border-transparent outline-none transition">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Şifre Tekrar</label>
                <input type="password" name="password_confirmation" required
                    class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-purple-500 focus:border-transparent outline-none transition">
            </div>

            <button type="submit"
                class="w-full bg-purple-600 hover:bg-purple-700 text-white font-bold py-3 rounded-xl transition shadow-lg shadow-purple-200 transform active:scale-95">
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
