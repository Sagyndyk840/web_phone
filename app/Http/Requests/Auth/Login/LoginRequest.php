<?php

namespace App\Http\Requests\Auth\Login;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize (): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules (): array
    {
        return [
            'login'    => ['required'],
            'password' => ['required']
        ];
    }

    public function messages (): array
    {
        return [
            'login.required'    => 'Login is required',
            'password.required' => 'Password is required',
        ];
    }
}
