<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|unique:users,email,'.$this->user.'|regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/',
            'phone' => 'required|unique:users,phone,'.$this->user.'|digits:10',
            'address' => 'required',
        ];
    }
    public function messages() {
        return [
            'name.required' => 'Trường này không được để trống',
            'email.required' => 'Trường này không được để trống',
            'email.unique' => 'Email đã tồn tại',
            'email.regex' => 'Email không đúng định dạng',
            'phone.required' => 'Trường này không được để trống',
            'phone.unique' => 'Số điện thoại đã tồn tại',
            'phone.digits' => 'Số điện thoại không hợp lệ',
            'address.required' => 'Trường này không được để trống',
        ];
    }
}
