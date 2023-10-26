<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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
            'name' => 'required|min:4|max:20',
            'email' => 'unique:users|required|email',
            'password' => 'min:6|max:20|regex:/^[A-Za-z0-9\s]+$/|required',
            'phone' => 'required|numeric|unique:users',
            'address' => 'required',
        ];
    }
    public function messages() {
        return [
            'name.required' => 'Tên không được để trống',
            'name.min' => 'Tên quá ngắn',
            'name.max' => 'Tên quá dài',
            'email.unique' => 'Email đã tồn tại',
            'email.required' => 'Email không được để trống',
            'email.email' => 'Email không đúng định dạng',
            'password.min' => 'Mật khẩu buộc phải có ít nhất 6 kí tự',
            'password.max' => 'Mật khẩu không được quá 20 kí tự',
            'password.regex' => 'Mật khẩu không bao gồm các kí tự đặc biệt',
            'password.required' => 'Mật khẩu không được để trống',
            'phone.required' => 'Số điện thoại không được bỏ trống',
            'phone.numeric' => 'Bắt buộc phải là số',
            'phone.unique' => 'Số điện thoại không được trùng nhau',
            'address.required' => 'Địa chỉ không được để trống',
        ];
    }
}
