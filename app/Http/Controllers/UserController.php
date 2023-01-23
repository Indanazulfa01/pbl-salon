<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function register()
    {
        return view("auth.register");
    }

    public function registerProses(Request $request)
    {
        $request->validate([
            "name" => "required",
            "email" => "required|unique:users",
            "password" => "required",
            "password_confirmation" => "required|same:password",
        ]);

        $data = $request->all();
        $data['password'] = bcrypt($data['password']);
        $user = User::create($data);
        return redirect("/login");
    }

    public function login()
    {
        return view('auth.login');
    }

    public function loginProses(Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect("/beranda");
        } else {
            return redirect("/login");
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
