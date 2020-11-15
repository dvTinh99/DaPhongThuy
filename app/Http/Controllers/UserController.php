<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function getAdd()
    {
        return view('admin.user.add');
    }
    public function postAdd(Request $request)
    {
        $user = new User;
        $user->name = $request->txtName;
        $user->username = $request->txtUser;
        $user->email = $request->txtEmail;
        $user->password = $request->txtPass;
        $user->role = $request->rdoLevel;
        $user->save();

        return redirect()->route('admin.user.getadd')->with(['message' => 'Add User Success']);
    }
    public function UserList ()
    {
        $user = User::all();

        return view('admin.user.list', compact('user'));
    }

    public function UserDelete ($id)
    {
        $delete = User::findOrFail($id);
        $delete->delete();

        return redirect()->route('admin.user.list')->with(['messages' => 'Xóa Tài Khoản Thành Công']);
    }
}
