<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/ilan', function () {
    return view('listings.show'); // listings klasöründeki show dosyasını aç
});


// MİSAFİR GRUBU (Sadece giriş yapmamışlar görebilir)
Route::middleware('guest')->group(function () {

    Route::get('/kayit-ol', [RegisterController::class, 'create'])->name('register');
    Route::post('/kayit-ol', [RegisterController::class, 'store']);
    Route::get('/giris-yap', [LoginController::class, 'create'])->name('login');
    Route::post('/giris-yap', [LoginController::class, 'store']);
});


// 3. ÜYE GRUBU (Giriş Yapmış Olanlar)
Route::middleware('auth')->group(function () {

    // Çıkış Yapma Rotası
    Route::post('/cikis-yap', [LoginController::class, 'destroy'])->name('logout');
});
