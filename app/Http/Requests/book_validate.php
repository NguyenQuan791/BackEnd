<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class book_validate extends FormRequest
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
            "bookName" => 'bail|required|min:6',
            "writer" => 'bail|required',
            "illstrator" => 'bail|required',
            "bookCover" => 'bail|required',
        ];
    }
    public function messages()
    {
        return [
            'bookName.required' => 'Tên sách không được để trống',

            'bookName.min' => 'Tên sách phải dài hơn 6 ký tự',

            'writer.required' => 'Tác giả không được để trống',

            'illstrator.required' => 'Minh họa không được để trống',

            'bookCover.required' => 'Hãy chọn một file ảnh bất kỳ',
        ];
    }
}
