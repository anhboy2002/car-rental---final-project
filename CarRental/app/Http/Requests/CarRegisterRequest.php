<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarRegisterRequest extends FormRequest
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
            'phone' => 'required',
            'plateNumber' => 'required',
            'priceCar' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'carLocation.required' => ' Vui lòng nhập địa chỉ xe.',
            'phone.required' => ' Vui lòng nhập số điện thoại.',
            'plateNumber.required' => ' Vui lòng nhập biển số xe.',
        ];
    }
}
