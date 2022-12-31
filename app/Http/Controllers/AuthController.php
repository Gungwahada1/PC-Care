<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use App\Models\Login_page;
use GuzzleHttp\Psr7\Request;
use App\Models\Register_page;
use App\Http\Request\LoginRequest;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function loginView()
    {
        $loginPage = Login_page::get()->where('id', 1);
        return view('login.main', compact('loginPage'), [
            'layout' => 'login'
        ]);
    }

    public function login(LoginRequest $request)
    {
        if (!Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ])) {
            throw new \Exception('Wrong email or password.');
        }
    }

    public function logout()
    {
        \Auth::logout();
        return redirect('/');
    }

    public function registerView()
    {
        $registerPage = Register_page::get()->where('id', 1);
        return view('register.main', compact('registerPage'), [
            'layout' => 'login'
        ]);
    }

    public function storeRegister(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->gender = $request->gender;
        $user->password = $request->password;
        $user->role = $request->role;
        $user->active = $request->active;
        $user->save();
        return redirect()->route('login.index');
    }
}