<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\Http\Requests;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    protected $redirectTo = '/';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');



    }

    public function username ()
    {
        return 'username';
    }

    public function showformLogin ()
    {
        return view('auth.login');
    }

    public function Login (LoginRequest $request)
    {
        $username = $request->username;
        $password = $request->password;
        if (Auth::attempt(['username' => $username, 'password' => $password, 'role' => 2])){
            return redirect()->route('home')->with(['messages' => 'Đăng Nhập Thành Công !!']);
        } elseif(Auth::attempt(['username' => $username, 'password' => $password, 'role' => 1])){
            return redirect()->route('dashboard');
        }
        else{
            return redirect()->route('showformLogin')->with(['messages' => 'Đăng Nhập Thất Bại !!']);
        }


    }

    public function Logout () {
        Auth::logout();

        return redirect()->back();
    }
}
