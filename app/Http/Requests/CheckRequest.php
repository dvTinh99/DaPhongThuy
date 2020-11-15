<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckRequest extends FormRequest
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
    public function rules ()
    {
        return [
            'namecheck' => 'required',
            'emailcheck' => 'required',
            'location' => 'required',
            'phone' => 'required',
            'optradio' => 'required',
        ];
    }
    public function messages ()
    {
        return [
            'namecheck.required' => ' Vui lòng nhập tên của bạn !',
            'emailcheck.required' => ' Vui lòng nhập email của bạn !',
            'location.required' => ' Vui lòng nhập địa chỉ của bạn !',
            'phone.required' => ' Vui lòng nhập số điện thoại của bạn !',
            'optradio.required' => ' Vui lòng chọn phương thức thanh toán !',
        ];
    }
}
