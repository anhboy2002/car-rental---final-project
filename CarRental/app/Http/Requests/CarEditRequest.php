<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarEditRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'carLocation' => 'required',
            'description' => 'required',
            'priceCar' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'carLocation.required' => ' Vui lòng nhập địa chỉ xe.',
            'description.required' => ' Vui lòng nhập mô tả xe.',
            'priceCar.required' => ' Vui lòng nhập giá xe.',
        ];
    }
}
