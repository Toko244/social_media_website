<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
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
            'username' => ['required', 'string', 'max:255', 'regex:/^[\w\-\.]+$/i'],
            'email' => ['required', 'string','email', 'max:255'],
        ];
    }

    public function messages()
    {
        return [
            'regex' => 'Username can only contain alphanumeric characters, dash (-) and dot(.).'
        ];
    }
}
