<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRegisterRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; // Herkes kayıt olabilir
    }

    public function rules(): array
    {
        return [
            // Kişisel Bilgiler
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:20'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', 'min:8'], // Şifre zorunlu

            // Şirket Bilgileri
            'company_short_name' => ['required', 'string', 'max:255'],
            'company_official_name' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string'],
            'district' => ['required', 'string'],
            'address' => ['required', 'string', 'max:1000'],
            'auth_doc_no' => ['nullable', 'string', 'max:50'],

            // Eğer company_type (Emlak/İnşaat) radio butonlarını geri eklersek burayı aç:
            // 'company_type' => ['required', 'string'],
        ];
    }

    public function attributes()
    {
        return [
            'company_short_name' => 'Şirket Kısa Adı',
            'company_official_name' => 'Şirket Resmi Adı',
            'auth_doc_no' => 'Yetki Belgesi No',
            'district' => 'İlçe',
            'city' => 'İl',
        ];
    }
}
