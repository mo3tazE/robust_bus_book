<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
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
            'name' => 'required',
            'password' => 'required|different:from',
            'email' => 'required|email',
        ];
    }
    public function messages()
    {
        return [
            'to.after_or_equal' => 'The destination must be after or equal to the starting station.',
        ];
    }
}
