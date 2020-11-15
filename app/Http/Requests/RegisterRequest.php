<?php namespace App\Http\Requests;

use App\Http\Requests;

class RegisterRequest extends Request {

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
			'username' => 'required|unique:users,username',
			'email' => 'required|unique:users,email|regex:/^[a-z][a-z0-9]*(_[a-z0-9]+)*(\.[a-z0-9]+)*@[a-z0-9]([a-z0-9][a-z0-9]+)*(\.[a-z]{2,4}){1,2}$/',
			'password' => 'required|min:6|regex:/^[a-zA-Z0-9!$#%]+$/',
			'password_confirmation' => 'required|same:password',
			'role' => 'required',
		];
	}
	public function messages()
	{
		return [
			'name.required' => 'Please Enter Name',
			'username.required' => 'Please Enter UserName',
			'username.unique' => 'UserName is Exist',
			'email.required' => 'Please Enter Email',
			'email.unique' => 'Email is Exist',
			'password.required' => 'Please Enter PassWord',
			'password_confirmation.required' => 'Please Enter Re-PassWord',
			'role.required' => 'Please tick Role',
		];
	}

}
