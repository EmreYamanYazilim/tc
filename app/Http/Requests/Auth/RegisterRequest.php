<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;

class RegisterRequest extends FormRequest
{
    // Bu işlemi herkes yapabilir mi? Evet.
    public function authorize(): bool
    {
        return true;
    }

    // Kurallarımız burada
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ];
    }

    // Hata mesajlarını özelleştirelim (Opsiyonel ama profesyonel)
    public function messages(): array
    {
        return [
            'email.unique' => 'Bu e-posta adresi zaten kayıtlı.',
            'password.confirmed' => 'Şifreler uyuşmuyor.',
            'password.min' => 'Şifreniz en az 8 karakter olmalı.',
        ];
    }
}
