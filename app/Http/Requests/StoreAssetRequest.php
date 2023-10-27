<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAssetRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required',
            'asset_type_id' => 'required',
            'status' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên tài sản không được để trống',
            'asset_type_id.required' => 'Loại tài sản không được để trống.',
            'status.required' => 'Trạng thái không được để trống.',
        ];
    }
}
