<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Contact_page;
use Illuminate\Http\Request;

class ContactPageController extends Controller
{
    public function contact_page()
    {
        $contactPage = Contact_page::get()->where('id', 1);
        return view('pages.frontend.contact-page', compact('contactPage'));
    }

    public function update_contact_page(Request $request, $id)
    {
        $contactPage = Contact_page::findOrFail($id);
        $contactPage->update($request->all());
        if ($request->hasFile('imageBanner')) {
            $imageBanner = $request->file('imageBanner');
            $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
            $nameImage = $timestamp . '-' . $imageBanner->getClientOriginalName();
            $contactPage->imageBanner = $nameImage;
            $imageBanner->move(public_path() . '/contactPage/', $nameImage);
            $contactPage->save();
        }
        return redirect()->route('contact.page');
    }
}