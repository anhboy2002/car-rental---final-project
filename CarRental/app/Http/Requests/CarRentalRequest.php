<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarRentalRequest extends FormRequest
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
            'addressSearch' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'addressSearch.required' => ' Vui lòng nhập địa chỉ để tìm kiếm.',
        ];
    }
}
