<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Register_page;

class RegisterPageController extends Controller
{
    public function register_page()
    {
        $registerPage = Register_page::get()->where('id', 1);
        return view('pages.frontend.register-page', compact('registerPage'));
    }

    public function update_register_page(Request $request, $id)
    {
        $registerPage = Register_page::findOrFail($id);
        $registerPage->update($request->all());
        if ($request->hasFile('illustration')) {
            $illustration = $request->file('illustration');
            $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
            $nameIllustration = $timestamp . '-' . $illustration->getClientOriginalName();
            $registerPage->illustration = $nameIllustration;
            $illustration->move(public_path() . '/registerPage/', $nameIllustration);
            $registerPage->save();
        }
        return redirect()->route('register.page');
    }
}