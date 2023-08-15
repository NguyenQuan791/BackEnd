<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class page_validate extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'bookId'=>'bail|required',
            'pageNumber'=>'bail|required|integer|min:1',
            'backgroud'=>'bail|required',
        ];
    }

    public function messages()
    {
        return [
            'bookId.required' => 'Mã sách không được để trống',

            'pageNumber.integer' => 'Số trang phải là số nguyên',

            'pageNumber.required' => 'Số trang không được để trống',

            'backgroud.required' => 'Hãy chọn một file ảnh bất kỳ',

        ];
    }
}
