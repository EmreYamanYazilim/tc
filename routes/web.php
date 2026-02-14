<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/ilan', function () {
    return view('listings.show');
})->name('listings.show');

Route::middleware('guest')->group(function () {
    // Kayıt
    Route::get('/kayit-ol', [RegisterController::class, 'create'])->name('register');
    Route::post('/kayit-ol', [RegisterController::class, 'store']);

    // Kurumsal kayıt
    Route::get('/kurumsal-kayit', [RegisterController::class, 'showCompanyRegistrationForm'])->name('register.company');
    Route::post('/kurumsal-kayit', [RegisterController::class, 'registerCompany'])->name('register.company.store');

    // Giriş
    Route::get('/giris-yap', [LoginController::class, 'create'])->name('login');
    Route::post('/giris-yap', [LoginController::class, 'store']);
});

Route::middleware('auth')->group(function () {
    // Çıkış
    Route::post('/cikis-yap', [LoginController::class, 'destroy'])->name('logout');
});
