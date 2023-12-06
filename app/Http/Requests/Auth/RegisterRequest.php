<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\User;
use Illuminate\Validation\Rules;

class RegisterRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Email obrigatório',
            'name.required' => 'Nome obrigatório',
            'password.required' => 'Senha obrigatória',
            'string' => 'O conteúdo precisa ser um texto',
            'email' => 'Campo precisa ser um email',
            'max' => 'O conteúdo precisa ser menor que :max',
            'lowercase' => 'Campo precisa estar em letras minúsculas',
            'unique' => ':attribute já existe e precisa ser único',
            'confirmed' => 'A confirmação é necessária'
        ];
    }
}
