<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContractRequest extends FormRequest
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
            'customer_name' => 'required|regex:/^[a-zA-Z\s]+$/',
            'customer_identi' => 'numeric|required|unique:contracts',
            'customer_birthday' => 'before:today|required',
            'total_loan' => 'required|numeric',
            'interest_payment_period' => 'required|numeric',
            'interest_rate' => 'required|numeric',
            'date_paid' => 'required',
            'customer_phone' => 'required|digits:10|unique:contracts',
        ];
    }
    public function messages() {
        return [
            'customer_name.required' => 'Không được để trống trường này',
            'customer_name.regex' => 'Tên không hợp lệ',
            'customer_identi.numeric' => 'Bắt buộc phải nhập số',
            'customer_identi.required' => 'Không được để trống trường này',
            'customer_identi.unique' => 'Số CCCD đã tồn tại',
            'customer_birthday.before' => 'Ngày sinh không hợp lệ',
            'customer_birthday.required' => 'Không được để trống trường này',
            'total_loan.required' => 'Không được để trống trường này',
            'total_loan.numeric' => 'Bắt buộc phải nhập số',
            'interest_payment_period.required' => 'Không được để trống trường này',
            'interest_payment_period.numeric' => 'Bắt buộc phải nhập số',
            'interest_rate.required' => 'Không được để trống trường này',
            'interest_rate.numeric' => 'Bắt buộc phải nhập số',
            'date_paid.required' => 'Không được để trống trường này',
            'customer_phone.required' => 'Không được để trống trường này',
            'customer_phone.digits' => 'Số điện thoại không hợp lệ',
            'customer_phone.unique' => 'Số điện thoại đã tồn tại',
        ];
    }
}
