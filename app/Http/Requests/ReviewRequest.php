<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReviewRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required',
            'review' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Nhập vào tên của bạn !',
            'email.required' => 'Nhập vào email của bạn !',
            'review.required' => 'Nhập vào nội dung review của bạn !',
        ];
    }
}
