<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\CompanyRegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CompanyRegisterController extends Controller
{
    // Kurumsal kayıt formu
    public function create()
    {
        return view('auth.company-register');
    }

    // Kurumsal kayıt işlemi
    // Not: Migration yok => şirket alanlarını DB'ye yazmıyoruz, sadece User oluşturuyoruz.
    public function store(CompanyRegisterRequest $request)
    {
        $user = User::create([
            'name' => trim($request->name . ' ' . $request->surname),
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect()
            ->route('home')
            ->with('success', 'Kurumsal başvurunuz alındı. İnceleme sonrası size bilgi verilecektir.');
    }
}
