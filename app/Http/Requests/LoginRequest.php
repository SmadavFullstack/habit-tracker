<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Override;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email' => 'required|email',
            'password' => 'required|min:6|max:60',
        ];
    }

    public function messages(): array
    {
        return [
            'email.required' => 'Este campo de e-mail é obrigatório.',
            'email.email' => 'Este campo deve conter um endereço de e-mail válido.',
            'password.required' => 'Este campo de senha é obrigatório.',
            'password.min' => 'Este campo deve conter no minimo 6 caracteres.',
            'password.max' => 'Este campo deve conter no máximo 60 caractéres.',
        ];
    }
}
