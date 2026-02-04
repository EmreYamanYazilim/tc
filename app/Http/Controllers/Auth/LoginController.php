<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // 1. Giriş Sayfasını Göster
    public function create()
    {
        return view('auth.login');
    }

    // 2. Giriş İşlemini Yap (Login)
    public function store(LoginRequest $request)
    {
        // Not: Validasyon (Email/Şifre kontrolü) artık LoginRequest içinde otomatik yapılıyor.
        // Buraya geldiğine göre veriler güvenli demektir.
// dd($request->all());
        // Blade dosyasındaki "Beni Hatırla" kutusu işaretli mi?
        $remember = $request->boolean('remember'); // Beni Hatırla

        // Giriş yapmayı dene (Email, Şifre ve Beni Hatırla bilgisiyle)
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate(); // Güvenlik için oturumu yenile

            // intended: Kullanıcı giriş yapmadan önce hangi sayfaya gitmek istiyorsa oraya atar
            // Eğer yoksa ana sayfaya (home) atar.
            return redirect()->intended(route('home'));
        }

        // Hatalıysa geri gönder
        return back()->withErrors([
            'email' => 'Girdiğiniz bilgiler hatalı.',
        ])->onlyInput('email');
    }

    // 3. Çıkış İşlemini Yap (Logout)
    public function destroy(Request $request)
    {
        Auth::logout(); // Sistemden çıkar

        $request->session()->invalidate(); // Oturumu iptal et
        $request->session()->regenerateToken(); // Token'ı yenile

        return redirect('/'); // Ana sayfaya gönder
    }
}
