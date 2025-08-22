<?php

namespace App\Http\Requests\Backend;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'full_name'=> 'required | max:255',
            'user_name'=> [
                'required',
                Rule::unique('users')->ignore($this->user),
            ],
            'phone'=> [
                'nullable',
                Rule::unique('users')->ignore($this->user),
            ],
            'status'=> 'required',
            'user_access'=> 'nullable',
           
            'photo' => 'nullable | mimes:jpg,png,jpeg',
            'email'=>  [
                'nullable',
                Rule::unique('users')->ignore($this->user),
            ],
            'password'=> 'nullable|min:6|max:20',
            'role_id'   => 'required|exists:roles,id',
        ];
    }
}
