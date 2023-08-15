<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
            'locationX'=>'bail|required|integer',
            'locationY'=>'bail|required|integer',
            'width'=>'bail|required|integer|min:1',
            'height'=>'bail|required|integer|min:1',
        ];
    }
}