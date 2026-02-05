<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\Requests\Auth\RegisterRequest; // Bireysel için
use App\Http\Requests\Auth\CompanyRegisterRequest; // Kurumsal için (YENİ)
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    // Bireysel Kayıt Formu
    public function create()
    {
        return view('auth.register');
    }

    // Bireysel Kayıt İşlemi
    public function store(RegisterRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            // 'type' => 'individual', // İleride gerekirse
        ]);

        Auth::login($user);

        return redirect()->route('home');
    }

    // Kurumsal Kayıt Formu
    public function showCompanyRegistrationForm()
    {
        return view('auth.company-register');
    }

    // Kurumsal Kayıt İşlemi (Validation Request'e taşındı)
    public function registerCompany(CompanyRegisterRequest $request)
    {
        //  Kullanıcıyı Oluştur (User Tablosu)
        $user = User::create([
            'name' => $request->name . ' ' . $request->surname, // Ad ve Soyadı birleştirdik
            'email' => $request->email,
            'password' => Hash::make($request->password),
            // 'type' => 'corporate', // Veritabanında type sütunu varsa
        ]);


        //  Giriş Yap ve Yönlendir
        Auth::login($user);

        return redirect()->route('home')->with('success', 'Kurumsal üyeliğiniz oluşturulduğunda  size bilgi verilecektir.');
    }
}
