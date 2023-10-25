<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCustomerRequest extends FormRequest
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
            'email' => 'required',
            'phone' => 'required|unique:customers',
            'address' => 'required',
            'status' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Tên bắt buộc nhập.',
            'email.required' => 'Email bắt buộc nhập.',
            'phone.required' => 'Vui lòng điền.',
            'phone.unique' => 'Tối đa 11 số.' ,
            'address.required' => 'Vui lòng điền.',
            'status.required' => 'Vui lòng điền.',

        ];
    }
}
