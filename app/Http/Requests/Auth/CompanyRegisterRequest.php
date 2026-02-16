<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRegisterRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            // Yetkili Bilgileri
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:20'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'string', 'confirmed', 'min:8'],

            // Firma & İletişim
            'company_short_name' => ['required', 'string', 'max:255'],
            'company_official_name' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'district' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:1000'],
            'auth_doc_no' => ['nullable', 'string', 'max:50'],
        ];
    }

    public function attributes(): array
    {
        return [
            'name' => 'Ad',
            'surname' => 'Soyad',
            'phone' => 'Cep Telefonu',
            'email' => 'E-posta Adresi',
            'password' => 'Şifre',
            'company_short_name' => 'Şirket Kısa Adı',
            'company_official_name' => 'Şirket Resmi Adı',
            'city' => 'İl',
            'district' => 'İlçe',
            'address' => 'Açık Adres',
            'auth_doc_no' => 'Taşınmaz Ticareti Yetki Belgesi No',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Ad alanı zorunludur.',
            'surname.required' => 'Soyad alanı zorunludur.',
            'phone.required' => 'Cep telefonu alanı zorunludur.',
            'email.required' => 'E-posta adresi zorunludur.',
            'email.email' => 'Geçerli bir e-posta adresi giriniz.',
            'email.unique' => 'Bu e-posta adresi zaten kayıtlı.',
            'password.required' => 'Şifre alanı zorunludur.',
            'password.confirmed' => 'Şifreler birbiriyle uyuşmuyor.',
            'password.min' => 'Şifre en az 8 karakter olmalıdır.',
            'company_short_name.required' => 'Şirket kısa adı zorunludur.',
            'company_official_name.required' => 'Şirket resmi adı zorunludur.',
            'city.required' => 'İl seçimi zorunludur.',
            'district.required' => 'İlçe seçimi zorunludur.',
            'address.required' => 'Adres alanı zorunludur.',
        ];
    }
}
