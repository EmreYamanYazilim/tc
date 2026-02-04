<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\Requests\Auth\RegisterRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    // Kayıt formunu gösterir
    public function create()
    {
        return view('auth.register');
    }

    // Kayıt işlemini yapar
    public function store(RegisterRequest $request)
    {
        // Buraya geldiyse, Request katmanından geçmiş ve veriler güvenli demektir.

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Kayıt olur olmaz giriş yaptır
        Auth::login($user);

        // Ana sayfaya yönlendir
        return redirect()->route('home');
    }
}
