<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Http\JsonResponse;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Exceptions\HttpResponseException;

class content_validate extends FormRequest
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
            'pageId'=>'bail|required|integer|min:1',
            
            'locationX'=>'bail|required|numeric',
            'locationY'=>'bail|required|numeric',
            'width'=>'bail|required|numeric|min:1',
            'height'=>'bail|required|numeric|min:1',
        ];
    }
    public function messages()
    {
        return [
            'pageId.required' => 'Mã trang không được để trống',

            'pageId.min' => 'Mã trang phải lớn hơn hoặc bằng 1',

            'pageId.integer' => 'Mã trang phải là số nguyên',

            'locationX.required' => 'Vị trí trục X không được để trống',

            'locationX.numeric' => 'Vị trí trục X phải là số',

            'locationY.required' => 'Vị trí trục Y không được để trống',

            'locationY.numeric' => 'Vị trí trục Y phải là số',

            'width.required' => 'Chiều dài không được để trống',

            'width.min' => 'Chiều dài phải lớn hơn hoặc bằng 1',

            'width.numeric' => 'Chiều dài phải là số nguyên',

            'height.required' => 'Chiều cao không được để trống',

            'height.min' => 'Chiều cao phải lớn hơn hoặc bằng 1',

            'height.numeric' => 'Chiều cao phải là số nguyên',

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
