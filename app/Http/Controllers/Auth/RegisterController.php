<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Requests;
use App\Http\Requests\RegisterRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showformRegister ()
    {
        return view('auth.register');
    }

    public function Register (RegisterRequest $request)
    {
        $register = new User;
        $register->name = $request->name;
        $register->username = $request->username;
        $register->email = $request->email;
        $register->password = bcrypt($request->password);
        $register->role = $request->role;
        $register->save();
        return redirect()->route('showformLogin')->with(['messages' => 'Đăng Kí Thành Công !']);
    }

}
