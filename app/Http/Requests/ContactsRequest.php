<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactsRequest extends FormRequest
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
            'namecontact' => 'required',
            'emailcontact' => 'required',
            'titlecontact' => 'required',
            'messagecontact' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'namecontact.required' => 'Nhập vào Tên của bạn !',
            'emailcontact.required' => 'Nhập vào Email của bạn !',
            'titlecontact.required' => 'Nhập vào Tiêu đề của bạn !',
            'messagecontact.required' => 'Nhập vào Nội dung lời nhắn của bạn !',
        ];

    }
}
