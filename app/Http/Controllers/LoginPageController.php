<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Login_page;
use Illuminate\Http\Request;

class LoginPageController extends Controller
{
    public function login_page()
    {
        $loginPage = Login_page::get()->where('id', 1);
        return view('pages.frontend.login-page', compact('loginPage'));
    }

    public function update_login_page(Request $request, $id)
    {
        $loginPage = Login_page::findOrFail($id);
        $loginPage->update($request->all());
        if ($request->hasFile('illustration')) {
            $illustration = $request->file('illustration');
            $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
            $nameIllustration = $timestamp . '-' . $illustration->getClientOriginalName();
            $loginPage->illustration = $nameIllustration;
            $illustration->move(public_path() . '/loginPage/', $nameIllustration);
            $loginPage->save();
        }
        return redirect()->route('login.page');
    }
}