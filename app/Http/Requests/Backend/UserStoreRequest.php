<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
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
            'full_name' => 'required|max:255',
            'user_name' => 'required|unique:users,user_name',
            'phone'     => 'nullable|max:17|unique:users,phone',
            'status'    => 'required',
            'photo'     => 'nullable|mimes:jpg,png,jpeg|max:512',
            'email'     => 'required|email|unique:users,email',
            'password'  => 'required|min:6|max:20',
            'role_id'   => 'required|exists:roles,id',
        ];
    }
}
