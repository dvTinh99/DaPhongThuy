<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'sltParent' => 'required',
            'name' => 'required',
            'price' => 'required',
            'promotion_price' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'sltParent.required' => 'Vui lòng nhập vào tên danh mục',
            'name.required' => 'Vui lòng nhập vào tên danh mục',
            'price.required' => 'Vui lòng nhập vào giá sản phẩm',
            'promotion_price.required' => 'Vui lòng nhập vào giá khuyến mãi sản phẩm',
        ];
    }

}
