<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
            'last_name' => 'required', 'string', 'max:255',
            'first_name' => 'required', 'string', 'max:255',
            'contact' => 'required', 'integer',
            'city' => 'required', 'string',
            'email' => 'required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class,
            'password' => 'required', 'confirmed',
        ];
    }
}