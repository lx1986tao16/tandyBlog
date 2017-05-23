<?php

namespace App\Http\Controllers\Admin;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SignController extends Controller
{
    public function index()
    {
        return view('admin.signin');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email' =>  'required|email|max:255',
            'password'  =>  'required',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->has('remember'))) {
            return redirect()->intended(route('admin_home'));
        }

        return redirect()->back()->withErrors(['用户名和密码不匹配！']);
    }

    public function destroy()
    {
        Auth::logout();

        session()->flash('success', '退出登陆');

        return redirect()->route('admin_signin');
    }
}
