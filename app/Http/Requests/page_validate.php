<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Http\JsonResponse;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Exceptions\HttpResponseException;

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

            'pageNumber.min' => 'Số trang phải lớn hơn hoặc bằng 1',

            'pageNumber.integer' => 'Số trang phải là số nguyên',

            'pageNumber.required' => 'Số trang không được để trống',

            'backgroud.required' => 'Hãy chọn một file ảnh bất kỳ',

        ];
    }

    protected function failedValidation(Validator $validator)
    {
        $errors = (new ValidationException($validator))->errors();

        throw new HttpResponseException(
            response()->json(['errors' => $errors], JsonResponse::HTTP_UNPROCESSABLE_ENTITY)
        );
    }
}
