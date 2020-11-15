<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewRequest extends FormRequest
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
            'namenew' => 'required',
            'fImagesnew' => 'required',
            'content' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'namenew.required' => 'Please Enter Name New',
            'fImagesnew.required' => 'Please Enter Image',
            'content.required' => 'Please Enter Content',
        ];
    }
}
